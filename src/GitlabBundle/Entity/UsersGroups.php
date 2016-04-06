<?php

namespace GitlabBundle\Entity;

/**
 * UsersGroups
 */
class UsersGroups
{
    /**
     * @var integer
     */
    private $groupAccess;

    /**
     * @var integer
     */
    private $groupId;

    /**
     * @var integer
     */
    private $userId;

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
    private $notificationLevel = '3';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set groupAccess
     *
     * @param integer $groupAccess
     *
     * @return UsersGroups
     */
    public function setGroupAccess($groupAccess)
    {
        $this->groupAccess = $groupAccess;

        return $this;
    }

    /**
     * Get groupAccess
     *
     * @return integer
     */
    public function getGroupAccess()
    {
        return $this->groupAccess;
    }

    /**
     * Set groupId
     *
     * @param integer $groupId
     *
     * @return UsersGroups
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return UsersGroups
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return UsersGroups
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
     * @return UsersGroups
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
     * Set notificationLevel
     *
     * @param integer $notificationLevel
     *
     * @return UsersGroups
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

