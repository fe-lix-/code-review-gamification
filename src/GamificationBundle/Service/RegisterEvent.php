<?php

namespace GamificationBundle\Service;

use EventBundle\Entity\RepositoryEvent;
use GamificationBundle\Repository\CounterRepository;
use EventBundle\Repository\RepositoryEventRepository;
use GamificationBundle\Repository\UserRepository;

class RegisterEvent
{
    /** @var CounterRepository */
    private $counterRepository;

    /** @var RepositoryEventRepository */
    private $eventRepository;

    /** @var UserRepository */
    private $userRepository;

    public function __construct(
        CounterRepository $counterRepository,
        RepositoryEventRepository $eventRepository,
        UserRepository $userRepository
    ) {
        $this->counterRepository = $counterRepository;
        $this->eventRepository = $eventRepository;
        $this->userRepository = $userRepository;
    }

    public function register(RepositoryEvent $event)
    {
        $user = $this->userRepository->obtainUser($event->getUser());

        if ($this->eventRepository->exists($event)) {
            return false;
        }

        $this->eventRepository->add($event);
        $counter = $this->counterRepository->getCounter($event, $user);
        $counter->increment();
        $this->counterRepository->save($counter);

        return true;
    }
}