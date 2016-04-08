<?php

namespace GamificationBundle\Repository;

use GamificationBundle\Entity\User;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param string $name
     * @return User
     */
    public function obtainUser($name)
    {
        /** @var User $user */
        $user = $this->findOneBy(['name' => $name]);

        if (!$user) {
            $user = new User($name);
            $this->add($user);
        }

        return $user;
    }

    /**
     * @param User $user
     */
    public function add(User $user)
    {
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush($user);
    }

    public function getCodeReviewLeaderboard()
    {
        $query = $this->createQueryBuilder('user')
            ->select(['user', 'counter'])
            ->leftJoin('user.counters', 'counter', 'WITH', 'counter.name = :code_review')
            ->setParameter('code_review', 'code-reviewed')
            ->orderBy('counter.count', 'DESC')
            ->getQuery();

        return $query->execute();
    }
}
