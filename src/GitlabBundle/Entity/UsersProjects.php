<?php

namespace GitlabBundle\Entity;

/**
 * UsersProjects
 */
class UsersProjects
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $projectId;

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
    private $projectAccess = '0';

    /**
     * @var integer
     */
    private $notificationLevel = '3';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return UsersProjects
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set projectId
     *
     * @param integer $projectId
     *
     * @return UsersProjects
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return UsersProjects
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
     * @return UsersProjects
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
     * Set projectAccess
     *
     * @param integer $projectAccess
     *
     * @return UsersProjects
     */
    public function setProjectAccess($projectAccess)
    {
        $this->projectAccess = $projectAccess;

        return $this;
    }

    /**
     * Get projectAccess
     *
     * @return integer
     */
    public function getProjectAccess()
    {
        return $this->projectAccess;
    }

    /**
     * Set notificationLevel
     *
     * @param integer $notificationLevel
     *
     * @return UsersProjects
     */
    public function setNotificationLevel($notificationLevel)
    {
        $this->notificationLevel = $notificationLevel;

        return $this;
    }

    /**
     * Get notificationLevel
     *
     * @return integer
     */
    public function getNotificationLevel()
    {
        return $this->notificationLevel;
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

