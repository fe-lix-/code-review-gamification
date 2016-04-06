<?php

namespace BadgeBundle\Repository;

use BadgeBundle\Entity\BadgeAwarded;

/**
 * BadgeAwardedRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BadgeAwardedRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param string $user
     * @return BadgeAwarded[]
     */
    public function findByUser($user)
    {
        return $this->findBy(['user' => $user]);
    }
}
