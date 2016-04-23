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
    /**
     * @Route("/gitlab/import")
     */
    public function indexAction()
    {
        $this->container->get('gitlab_bundle.importer')->importAllData();

        return $this->redirect('/');
    }
}
