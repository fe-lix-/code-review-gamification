<?php

namespace GamificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
}
