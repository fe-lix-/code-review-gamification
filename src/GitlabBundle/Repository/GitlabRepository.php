<?php

namespace GitlabBundle\Repository;

use Doctrine\DBAL\Connection;

class GitlabRepository
{
    const MYSQL_DATE_FORMAT = 'Y-m-d H:i:s';
    const BATCH_SIZE = 2000;

    /** @var Connection */
    private $connection;

    /**
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return array
     */
    public function getLatestsCommentsAfterId($lastId = 0)
    {
        $sql = "select notes.id as note_id, notes.created_at, users.username, namespaces.path as namespace, projects.path as project ,merge_requests.iid
                from notes
                join users on notes.author_id = users.id
                join merge_requests on merge_requests.id = notes.noteable_id
                join projects on projects.id = merge_requests.target_project_id
                join namespaces on namespaces.id = projects.namespace_id
                where notes.author_id != :jenkins_user_id
                and notes.author_id != merge_requests.author_id
                and notes.noteable_type = :merge_request
                and notes.id > :last_imported_id
                order by notes.id ASC
                limit " . self::BATCH_SIZE;

        $statement = $this->connection->prepare($sql);
        $statement->bindValue('jenkins_user_id', 42);
        $statement->bindValue('merge_request', 'MergeRequest');
        $statement->bindValue('last_imported_id', $lastId);

        $statement->execute();
        return $statement->fetchAll();
    }

    /**
     * @return array
     */
    public function getLatestsMergeRequests($lastImportedId)
    {
        $sql = "select merge_requests.id as mr_id, merge_requests.created_at, merge_requests.iid, users.username, namespaces.path as namespace, projects.path as project
                from merge_requests
                join users on merge_requests.author_id = users.id
                join projects on projects.id = merge_requests.target_project_id
                join namespaces on namespaces.id = projects.namespace_id
                where merge_requests.id > :last_imported_id
                order by merge_requests.id ASC
                limit " . self::BATCH_SIZE;

        $statement = $this->connection->prepare($sql);
        $statement->bindValue('last_imported_id', $lastImportedId);

        $statement->execute();
        return $statement->fetchAll();
    }
}
