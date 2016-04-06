<?php

namespace GitlabBundle\Controller;

use EventBundle\Entity\RepositoryEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/gitlab/import")
     */
    public function indexAction()
    {
        $sql = "select notes.created_at, users.username, namespaces.path, projects.path ,merge_requests.iid
                from notes
                join users on notes.author_id = users.id
                join merge_requests on merge_requests.id = notes.noteable_id
                join projects on projects.id = merge_requests.target_project_id
                join namespaces on namespaces.id = projects.namespace_id
                where notes.author_id != :jenkins_user_id
                and notes.noteable_type = :merge_request";

        $statement = $this->getDoctrine()->getConnection('gitlab')->prepare($sql);
        $statement->bindValue('jenkins_user_id', 42);
        $statement->bindValue('merge_request', 'MergeRequest');

        $statement->execute();
        $events = $statement->fetchAll();

        foreach($events as $gitlabEvent) {
            $event = new RepositoryEvent();
            $event->setEvent('code-reviewed');
            $event->setDate(new \DateTime($gitlabEvent['created_at'], 'Y-m-d h:i:s'));
            $event->setUser($gitlabEvent['username']);
            $event->setRepositoryReference(
                sprintf(
                    'gitlab#%s/%s#%s',
                    $gitlabEvent['namespace_path'],
                    $gitlabEvent['project_path'],
                    $gitlabEvent['iid']
                )
            );

            $this->getDoctrine()->getManager()->persist($event);
            $this->getDoctrine()->getManager()->flush();
        }
    }
}
