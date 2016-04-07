<?php

namespace GitlabBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentImportLog
 *
 * @ORM\Table(name="comment_import_log")
 * @ORM\Entity(repositoryClass="GitlabBundle\Repository\CommentImportLogRepository")
 */
class CommentImportLog
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
     * @ORM\Column(name="lastImportNote", type="integer")
     */
    private $lastImportNote;

    /**
     * @param int $lastImportedNote
     */
    public function __construct($lastImportedNote)
    {
        $this->date = new \DateTime();
        $this->lastImportNote = $lastImportedNote;
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
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * Get lastImportNote
     *
     * @return int
     */
    public function getLastImportNote()
    {
        return $this->lastImportNote;
    }
}

