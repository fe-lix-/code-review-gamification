<?php

namespace GitlabBundle\Entity;

/**
 * DeployKeysProjects
 */
class DeployKeysProjects
{
    /**
     * @var integer
     */
    private $deployKeyId;

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
    private $id;


    /**
     * Set deployKeyId
     *
     * @param integer $deployKeyId
     *
     * @return DeployKeysProjects
     */
    public function setDeployKeyId($deployKeyId)
    {
        $this->deployKeyId = $deployKeyId;

        return $this;
    }

    /**
     * Get deployKeyId
     *
     * @return integer
     */
    public function getDeployKeyId()
    {
        return $this->deployKeyId;
    }

    /**
     * Set projectId
     *
     * @param integer $projectId
     *
     * @return DeployKeysProjects
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
     * @return DeployKeysProjects
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
     * @return DeployKeysProjects
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

