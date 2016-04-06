<?php

namespace GitlabBundle\Entity;

/**
 * Notes
 */
class Notes
{
    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $noteableType;

    /**
     * @var integer
     */
    private $authorId;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var integer
     */
    private $projectId;

    /**
     * @var string
     */
    private $attachment;

    /**
     * @var string
     */
    private $lineCode;

    /**
     * @var string
     */
    private $commitId;

    /**
     * @var integer
     */
    private $noteableId;

    /**
     * @var string
     */
    private $stDiff;

    /**
     * @var boolean
     */
    private $system = '0';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set note
     *
     * @param string $note
     *
     * @return Notes
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set noteableType
     *
     * @param string $noteableType
     *
     * @return Notes
     */
    public function setNoteableType($noteableType)
    {
        $this->noteableType = $noteableType;

        return $this;
    }

    /**
     * Get noteableType
     *
     * @return string
     */
    public function getNoteableType()
    {
        return $this->noteableType;
    }

    /**
     * Set authorId
     *
     * @param integer $authorId
     *
     * @return Notes
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Get authorId
     *
     * @return integer
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Notes
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Notes
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set projectId
     *
     * @param integer $projectId
     *
     * @return Notes
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Get projectId
     *
     * @return integer
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set attachment
     *
     * @param string $attachment
     *
     * @return Notes
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return string
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set lineCode
     *
     * @param string $lineCode
     *
     * @return Notes
     */
    public function setLineCode($lineCode)
    {
        $this->lineCode = $lineCode;

        return $this;
    }

    /**
     * Get lineCode
     *
     * @return string
     */
    public function getLineCode()
    {
        return $this->lineCode;
    }

    /**
     * Set commitId
     *
     * @param string $commitId
     *
     * @return Notes
     */
    public function setCommitId($commitId)
    {
        $this->commitId = $commitId;

        return $this;
    }

    /**
     * Get commitId
     *
     * @return string
     */
    public function getCommitId()
    {
        return $this->commitId;
    }

    /**
     * Set noteableId
     *
     * @param integer $noteableId
     *
     * @return Notes
     */
    public function setNoteableId($noteableId)
    {
        $this->noteableId = $noteableId;

        return $this;
    }

    /**
     * Get noteableId
     *
     * @return integer
     */
    public function getNoteableId()
    {
        return $this->noteableId;
    }

    /**
     * Set stDiff
     *
     * @param string $stDiff
     *
     * @return Notes
     */
    public function setStDiff($stDiff)
    {
        $this->stDiff = $stDiff;

        return $this;
    }

    /**
     * Get stDiff
     *
     * @return string
     */
    public function getStDiff()
    {
        return $this->stDiff;
    }

    /**
     * Set system
     *
     * @param boolean $system
     *
     * @return Notes
     */
    public function setSystem($system)
    {
        $this->system = $system;

        return $this;
    }

    /**
     * Get system
     *
     * @return boolean
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

