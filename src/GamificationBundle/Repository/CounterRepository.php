<?php

namespace GamificationBundle\Repository;

use GamificationBundle\Entity\Counter;
use EventBundle\Entity\RepositoryEvent;
use GamificationBundle\Entity\User;

/**
 * CounterRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CounterRepository extends \Doctrine\ORM\EntityRepository
{
    public function getCounter(RepositoryEvent $event, User $user)
    {
        $counter = $this->findOneBy(['name' => $event->getEvent(), 'user' => $user]);

        if (!$counter) {
            $counter = new Counter($event->getEvent(), $user);
        }

        return $counter;
    }

    /**
     * @param User $user
     * @return Counter[]
     */
    public function getCounterFor(User $user)
    {
        return $this->findBy(['user' => $user]);
    }

    /**
     * @param Counter $counter
     */
    public function save(Counter $counter)
    {
        $this->getEntityManager()->persist($counter);
        $this->getEntityManager()->flush($counter);
    }
}
