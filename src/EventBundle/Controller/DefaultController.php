<?php

namespace EventBundle\Controller;

use EventBundle\Entity\RepositoryEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/event/repository")
     */
    public function addEventRepository(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $event = new RepositoryEvent();
        $event->setUser($data['user']);
        $event->setRepositoryReference($data['object']);
        $event->setEvent($data['event']);
        $event->setDate(new \DateTime());

        $this->container->get('event_bundle.register_event_service')->register($event);

        return new Response('OK');
    }

    /**
     * @Route ("/event/repository/{user}")
     */
    public function getEventForAction($user)
    {
        $response = json_encode($this->container->get('event_bundle.doctrine.orm.repository_event_repository')->findByUser($user));

        return new Response($response);
    }
}
