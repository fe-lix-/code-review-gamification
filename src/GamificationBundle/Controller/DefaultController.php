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

        return $this->render(
            'GamificationBundle:Default:code-review-history.html.twig',
            [
                'label' => array_column($codeReviewHistory, 'week'),
                'values' => [
                    [
                        'name' => 'Code reviews',
                        'class' => 'codereview',
                        'data' => array_column($codeReviewHistory, 'count')
                    ]
                ],
            ]
        );
    }

    /**
     * @Route("/code-review/compare/{user1}/{user2}")
     */
    public function codeReviewHistoryCompareUsers($user1, $user2)
    {
        $user1History = $this->container->get('event_bundle.doctrine.orm.repository_event_repository')
            ->getCodeReviewHistoryForUser($user1);
        $labelUser1 = array_column($user1History, 'week');
        $countUser1 = array_column($user1History, 'count');

        $user2History = $this->container->get('event_bundle.doctrine.orm.repository_event_repository')
            ->getCodeReviewHistoryForUser($user2);
        $countUser2 = array_column($user2History, 'count');

        return $this->render(
            'GamificationBundle:Default:code-review-history.html.twig',
            [
                'label' => $labelUser1,
                'values' => [
                    ['name' => $user1, 'class' => 'user1', 'data' => $countUser1],
                    ['name' => $user2, 'class' => 'user2', 'data' => $countUser2],
                ],
            ]
        );
    }
}
