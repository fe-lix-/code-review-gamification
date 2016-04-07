<?php

namespace GitlabBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MergeRequestImportLog
 *
 * @ORM\Table(name="merge_request_import_log")
 * @ORM\Entity(repositoryClass="GitlabBundle\Repository\MergeRequestImportLogRepository")
 */
class MergeRequestImportLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="lastImportMergeRequest", type="integer")
     */
    private $lastImportMergeRequest;

    public function __construct($lastImportedMergeRequest)
    {
        $this->date = new \DateTime();
        $this->lastImportMergeRequest = $lastImportedMergeRequest;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return MergeRequestImportLog
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set lastImportMergeRequest
     *
     * @param integer $lastImportMergeRequest
     *
     * @return MergeRequestImportLog
     */
    public function setLastImportMergeRequest($lastImportMergeRequest)
    {
        $this->lastImportMergeRequest = $lastImportMergeRequest;

        return $this;
    }

    /**
     * Get lastImportMergeRequest
     *
     * @return int
     */
    public function getLastImportMergeRequest()
    {
        return $this->lastImportMergeRequest;
    }
}

