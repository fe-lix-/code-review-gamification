<?php

namespace GitlabBundle\Entity;

/**
 * Projects
 */
class Projects
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $description;

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
    private $creatorId;

    /**
     * @var boolean
     */
    private $issuesEnabled = '1';

    /**
     * @var boolean
     */
    private $wallEnabled = '1';

    /**
     * @var boolean
     */
    private $mergeRequestsEnabled = '1';

    /**
     * @var boolean
     */
    private $wikiEnabled = '1';

    /**
     * @var integer
     */
    private $namespaceId;

    /**
     * @var string
     */
    private $issuesTracker = 'gitlab';

    /**
     * @var string
     */
    private $issuesTrackerId;

    /**
     * @var boolean
     */
    private $snippetsEnabled = '1';

    /**
     * @var \DateTime
     */
    private $lastActivityAt;

    /**
     * @var string
     */
    private $importUrl;

    /**
     * @var integer
     */
    private $visibilityLevel = '0';

    /**
     * @var boolean
     */
    private $archived = '0';

    /**
     * @var string
     */
    private $importStatus;

    /**
     * @var float
     */
    private $repositorySize = '0';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Projects
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Projects
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Projects
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Projects
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
     * @return Projects
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
     * Set creatorId
     *
     * @param integer $creatorId
     *
     * @return Projects
     */
    public function setCreatorId($creatorId)
    {
        $this->creatorId = $creatorId;

        return $this;
    }

    /**
     * Get creatorId
     *
     * @return integer
     */
    public function getCreatorId()
    {
        return $this->creatorId;
    }

    /**
     * Set issuesEnabled
     *
     * @param boolean $issuesEnabled
     *
     * @return Projects
     */
    public function setIssuesEnabled($issuesEnabled)
    {
        $this->issuesEnabled = $issuesEnabled;

        return $this;
    }

    /**
     * Get issuesEnabled
     *
     * @return boolean
     */
    public function getIssuesEnabled()
    {
        return $this->issuesEnabled;
    }

    /**
     * Set wallEnabled
     *
     * @param boolean $wallEnabled
     *
     * @return Projects
     */
    public function setWallEnabled($wallEnabled)
    {
        $this->wallEnabled = $wallEnabled;

        return $this;
    }

    /**
     * Get wallEnabled
     *
     * @return boolean
     */
    public function getWallEnabled()
    {
        return $this->wallEnabled;
    }

    /**
     * Set mergeRequestsEnabled
     *
     * @param boolean $mergeRequestsEnabled
     *
     * @return Projects
     */
    public function setMergeRequestsEnabled($mergeRequestsEnabled)
    {
        $this->mergeRequestsEnabled = $mergeRequestsEnabled;

        return $this;
    }

    /**
     * Get mergeRequestsEnabled
     *
     * @return boolean
     */
    public function getMergeRequestsEnabled()
    {
        return $this->mergeRequestsEnabled;
    }

    /**
     * Set wikiEnabled
     *
     * @param boolean $wikiEnabled
     *
     * @return Projects
     */
    public function setWikiEnabled($wikiEnabled)
    {
        $this->wikiEnabled = $wikiEnabled;

        return $this;
    }

    /**
     * Get wikiEnabled
     *
     * @return boolean
     */
    public function getWikiEnabled()
    {
        return $this->wikiEnabled;
    }

    /**
     * Set namespaceId
     *
     * @param integer $namespaceId
     *
     * @return Projects
     */
    public function setNamespaceId($namespaceId)
    {
        $this->namespaceId = $namespaceId;

        return $this;
    }

    /**
     * Get namespaceId
     *
     * @return integer
     */
    public function getNamespaceId()
    {
        return $this->namespaceId;
    }

    /**
     * Set issuesTracker
     *
     * @param string $issuesTracker
     *
     * @return Projects
     */
    public function setIssuesTracker($issuesTracker)
    {
        $this->issuesTracker = $issuesTracker;

        return $this;
    }

    /**
     * Get issuesTracker
     *
     * @return string
     */
    public function getIssuesTracker()
    {
        return $this->issuesTracker;
    }

    /**
     * Set issuesTrackerId
     *
     * @param string $issuesTrackerId
     *
     * @return Projects
     */
    public function setIssuesTrackerId($issuesTrackerId)
    {
        $this->issuesTrackerId = $issuesTrackerId;

        return $this;
    }

    /**
     * Get issuesTrackerId
     *
     * @return string
     */
    public function getIssuesTrackerId()
    {
        return $this->issuesTrackerId;
    }

    /**
     * Set snippetsEnabled
     *
     * @param boolean $snippetsEnabled
     *
     * @return Projects
     */
    public function setSnippetsEnabled($snippetsEnabled)
    {
        $this->snippetsEnabled = $snippetsEnabled;

        return $this;
    }

    /**
     * Get snippetsEnabled
     *
     * @return boolean
     */
    public function getSnippetsEnabled()
    {
        return $this->snippetsEnabled;
    }

    /**
     * Set lastActivityAt
     *
     * @param \DateTime $lastActivityAt
     *
     * @return Projects
     */
    public function setLastActivityAt($lastActivityAt)
    {
        $this->lastActivityAt = $lastActivityAt;

        return $this;
    }

    /**
     * Get lastActivityAt
     *
     * @return \DateTime
     */
    public function getLastActivityAt()
    {
        return $this->lastActivityAt;
    }

    /**
     * Set importUrl
     *
     * @param string $importUrl
     *
     * @return Projects
     */
    public function setImportUrl($importUrl)
    {
        $this->importUrl = $importUrl;

        return $this;
    }

    /**
     * Get importUrl
     *
     * @return string
     */
    public function getImportUrl()
    {
        return $this->importUrl;
    }

    /**
     * Set visibilityLevel
     *
     * @param integer $visibilityLevel
     *
     * @return Projects
     */
    public function setVisibilityLevel($visibilityLevel)
    {
        $this->visibilityLevel = $visibilityLevel;

        return $this;
    }

    /**
     * Get visibilityLevel
     *
     * @return integer
     */
    public function getVisibilityLevel()
    {
        return $this->visibilityLevel;
    }

    /**
     * Set archived
     *
     * @param boolean $archived
     *
     * @return Projects
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;

        return $this;
    }

    /**
     * Get archived
     *
     * @return boolean
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * Set importStatus
     *
     * @param string $importStatus
     *
     * @return Projects
     */
    public function setImportStatus($importStatus)
    {
        $this->importStatus = $importStatus;

        return $this;
    }

    /**
     * Get importStatus
     *
     * @return string
     */
    public function getImportStatus()
    {
        return $this->importStatus;
    }

    /**
     * Set repositorySize
     *
     * @param float $repositorySize
     *
     * @return Projects
     */
    public function setRepositorySize($repositorySize)
    {
        $this->repositorySize = $repositorySize;

        return $this;
    }

    /**
     * Get repositorySize
     *
     * @return float
     */
    public function getRepositorySize()
    {
        return $this->repositorySize;
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

