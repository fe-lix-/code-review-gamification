<?php

namespace EventBundle\Repository;

use EventBundle\Entity\RepositoryEvent;
use DateTime;

/**
 * RepositoryEventRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RepositoryEventRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param RepositoryEvent $event
     */
    public function add(RepositoryEvent $event)
    {
        $this->getEntityManager()->persist($event);
        $this->getEntityManager()->flush($event);
    }

    /**
     * @param RepositoryEvent $event
     * @return bool
     */
    public function exists(RepositoryEvent $event)
    {
        return $this->findOneBy([
            'event' => $event->getEvent(),
            'user' => $event->getUser(),
            'repositoryReference' => $event->getRepositoryReference(),
        ]) !== null;
    }

    public function findByUser($user)
    {
        return $this->findBy(['user' => $user]);
    }

    /**
     * @return array
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getCodeReviewHistory()
    {
        $sql = "select strftime('%Y-%m', date) as week, count(*) as count
                from repository_event
                where event = :code_review
                group by strftime('%Y-%m', date) order by date ASC
                limit 30";

        $statement = $this->getEntityManager()->getConnection()->prepare($sql);
        $statement->bindValue('code_review', 'code-reviewed');
        $statement->execute();

        $result = $statement->fetchAll();
        array_pop($result);

        return $result;
    }

    /**
     * @return array
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getCodeReviewHistoryForUser($user)
    {
        $sql = "select strftime('%Y-%W', date) as week, count(*) as count
                from repository_event
                where event = :code_review
                and user = :user
                group by strftime('%Y-%W', date) order by date ASC
                limit 6";

        $statement = $this->getEntityManager()->getConnection()->prepare($sql);
        $statement->bindValue('code_review', 'code-reviewed');
        $statement->bindValue('user', $user);
        $statement->execute();

        $result = $statement->fetchAll();
        array_pop($result);

        $count = 0;
        foreach ($result as &$resultLine) {
            $resultLine['count'] = $count + $resultLine['count'];
            $count = $resultLine['count'];
        }

        return $result;
    }

    /**
     * @param DateTime $month
     * @return array
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getCodeReviewMonthlyReport(DateTime $month = null)
    {
        if (!$month) {
            $month = new DateTime();
        }

        $sql = "select user, count(*) as count
                from repository_event
                where event = :code_review
                and strftime('%Y%m', date) = :current_month
                group by user
                order by count(*) DESC";

        $statement = $this->getEntityManager()->getConnection()->prepare($sql);
        $statement->bindValue('code_review', 'code-reviewed');
        $statement->bindValue('current_month', $month->format('Ym'));
        $statement->execute();

        return $statement->fetchAll();
    }
}
