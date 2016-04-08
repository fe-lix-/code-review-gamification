<?php

namespace BadgeBundle\Controller;

use BadgeBundle\Entity\Badge;
use BadgeBundle\Entity\BadgeAwarded;
use EventBundle\Entity\RepositoryEvent;
use GamificationBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/badges/{username}")
     */
    public function indexAction($username)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['name' => $username]);

        $badges = $this->container->get('badge_bundle.doctrine.orm.badge_awarded_repository')
            ->findAll();

        $awarded = [];

        $awarded[] = new BadgeAwarded(new Badge('cr5', '5 code reviews'));
        $awarded[] = new BadgeAwarded(new Badge('cr10', '10 code reviews'));
        $awarded[] = new BadgeAwarded(new Badge('cr50', '50 code reviews'));
        $awarded[] = new BadgeAwarded(new Badge('cr100', '100 code reviews'));
        $awarded[] = new BadgeAwarded(new Badge('cr500', '500 code reviews'));
        $awarded[] = new BadgeAwarded(new Badge('cr1000', '1000 code reviews'));

        $counters = $this->container->get('gamification_bundle.doctrine.orm.counter_repository')
            ->getCounterFor($user);

        return $this->render(
            'BadgeBundle:Default:index.html.twig',
            [
                'user' => $user,
                'badges' => $awarded,
                'counters' => $counters,
            ]
        );
    }
}
