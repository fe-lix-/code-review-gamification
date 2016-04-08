<?php

namespace GamificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/code-review/leaderboard")
     */
    public function indexUserAction()
    {
        $users = $this->container->get('gamification_bundle.doctrine.orm.user_repository')
            ->getCodeReviewLeaderboard();

        return $this->render(
            'GamificationBundle:Default:index.html.twig',
            [
                'users' => $users,
            ]
        );
    }

    /**
     * @Route("/code-review/history")
     */
    public function codeReviewHistory()
    {
        $codeReviewHistory = $this->container->get('event_bundle.doctrine.orm.repository_event_repository')
            ->getCodeReviewHistory();

        var_dump($codeReviewHistory);

        return $this->render(
            'GamificationBundle:Default:code-review-history.html.twig',
            [
                'history' => $codeReviewHistory,
            ]
        );
    }
}
