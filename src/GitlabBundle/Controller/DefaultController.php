<?php

namespace GitlabBundle\Controller;

use EventBundle\Entity\RepositoryEvent;
use GitlabBundle\Entity\CommentImportLog;
use GitlabBundle\Entity\MergeRequestImportLog;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    const MYSQL_DATE_FORMAT = 'Y-m-d H:i:s';
    const BATCH_SIZE = 2000;

    /**
     * @Route("/gitlab/import")
     */
    public function indexAction()
    {
        $comments = $this->getLatestsComments();
        $this->registerGitlabComments($comments);

        $mergeRequests = $this->getLatestsMergeRequests();
        $this->registerGitlabMergeRequest($mergeRequests);

        return $this->redirect('/');
    }

    /**
     * @return mixed
     */
    private function getLatestsComments()
    {
        $lastImportedId = $this->getDoctrine()->getRepository(CommentImportLog::class)->findLastImportedId();

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

        $statement = $this->getDoctrine()->getConnection('gitlab')->prepare($sql);
        $statement->bindValue('jenkins_user_id', 42);
        $statement->bindValue('merge_request', 'MergeRequest');
        $statement->bindValue('last_imported_id', $lastImportedId);

        $statement->execute();
        $events = $statement->fetchAll();
        return $events;
    }

    /**
     * @param $comments
     */
    private function registerGitlabComments($comments)
    {
        foreach ($comments as $gitlabComments) {
            $event = new RepositoryEvent();
            $event->setEvent('code-reviewed');
            $event->setDate(\DateTime::createFromFormat(self::MYSQL_DATE_FORMAT, $gitlabComments['created_at']));
            $event->setUser($gitlabComments['username']);
            $event->setRepositoryReference(
                sprintf(
                    'gitlab#%s/%s#%s',
                    $gitlabComments['namespace'],
                    $gitlabComments['project'],
                    $gitlabComments['iid']
                )
            );

            $this->container->get('event_bundle.register_event_service')->register($event);
        }

        if ($comments) {
            $importLog = new CommentImportLog((int)$gitlabComments['note_id']);

            $this->getDoctrine()->getManager()->persist($importLog);
            $this->getDoctrine()->getManager()->flush($importLog);
        }
    }

    /**
     * @param $comments
     */
    private function registerGitlabMergeRequest($comments)
    {
        foreach ($comments as $gitlabComments) {
            $event = new RepositoryEvent();
            $event->setEvent('merge-request');
            $event->setDate(\DateTime::createFromFormat(self::MYSQL_DATE_FORMAT, $gitlabComments['created_at']));
            $event->setUser($gitlabComments['username']);
            $event->setRepositoryReference(
                sprintf(
                    'gitlab#%s/%s#%s',
                    $gitlabComments['namespace'],
                    $gitlabComments['project'],
                    $gitlabComments['iid']
                )
            );

            $this->container->get('event_bundle.register_event_service')->register($event);
        }

        if ($comments) {
            $importLog = new MergeRequestImportLog((int)$gitlabComments['mr_id']);

            $this->getDoctrine()->getManager()->persist($importLog);
            $this->getDoctrine()->getManager()->flush($importLog);
        }
    }


    /**
     * @return string
     */
    private function getLatestsMergeRequests()
    {
        $lastImportedId = $this->getDoctrine()->getRepository(MergeRequestImportLog::class)->findLastImportedId();

        $sql = "select merge_requests.id as mr_id, merge_requests.created_at, merge_requests.iid, users.username, namespaces.path as namespace, projects.path as project
                from merge_requests
                join users on merge_requests.author_id = users.id
                join projects on projects.id = merge_requests.target_project_id
                join namespaces on namespaces.id = projects.namespace_id
                where merge_requests.id > :last_imported_id
                order by merge_requests.id ASC
                limit " . self::BATCH_SIZE;

        $statement = $this->getDoctrine()->getConnection('gitlab')->prepare($sql);
        $statement->bindValue('last_imported_id', $lastImportedId);

        $statement->execute();
        return $statement->fetchAll();
    }
}
