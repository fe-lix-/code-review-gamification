<?php

namespace GitlabBundle\Repository;

use GitlabBundle\Entity\CommentImportLog;

class CommentImportLogRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return int
     */
    public function findLastImportedId()
    {
        /** @var CommentImportLog $lastImport */
        $lastImport = $this->findOneBy([], ['date' => 'DESC']);

        if ($lastImport) {
            return $lastImport->getLastImportNote();
        }

        return 0;
    }

    /**
     * @param int $id
     */
    public function setLastImportedId($id)
    {
        $importLog = new CommentImportLog((int) $id);

        $this->getEntityManager()->persist($importLog);
        $this->getEntityManager()->flush($importLog);
    }
}
