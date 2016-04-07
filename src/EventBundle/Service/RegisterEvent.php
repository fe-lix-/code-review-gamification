<?php

namespace EventBundle\Service;

use EventBundle\Entity\RepositoryEvent;
use EventBundle\Repository\CounterRepository;
use EventBundle\Repository\RepositoryEventRepository;

class RegisterEvent
{
    /** @var CounterRepository */
    private $counterRepository;

    /** @var RepositoryEventRepository */
    private $eventRepository;

    public function __construct(
        CounterRepository $counterRepository,
        RepositoryEventRepository $eventRepository
    ) {
        $this->counterRepository = $counterRepository;
        $this->eventRepository = $eventRepository;
    }

    public function register(RepositoryEvent $event)
    {
        if ($this->eventRepository->exists($event)) {
            return false;
        }

        $this->eventRepository->add($event);
        $counter = $this->counterRepository->getCounter($event);
        $counter->increment();
        $this->counterRepository->save($counter);

        return true;
    }
}
