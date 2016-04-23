<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RepositoryEvent
 *
 * @ORM\Table(name="repository_event")
 * @ORM\Entity(repositoryClass="EventBundle\Repository\RepositoryEventRepository")
 */
class RepositoryEvent
{
    const COMMENT_EVENT = 'comment';
    const MERGE_REQUEST_EVENT = 'merge-request';
    const CODE_REVIEW_EVENT = 'code-review';

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="repositoryReference", type="string", length=255)
     */
    private $repositoryReference;

    /**
     * @var string
     *
     * @ORM\Column(name="event", type="string", length=255)
     */
    private $event;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

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
     * Set repositoryReference
     *
     * @param string $repositoryReference
     *
     * @return RepositoryEvent
     */
    public function setRepositoryReference($repositoryReference)
    {
        $this->repositoryReference = $repositoryReference;

        return $this;
    }

    /**
     * Get repositoryReference
     *
     * @return string
     */
    public function getRepositoryReference()
    {
        return $this->repositoryReference;
    }

    /**
     * Set event
     *
     * @param string $event
     *
     * @return RepositoryEvent
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return RepositoryEvent
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return RepositoryEvent
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
     * @return bool
     */
    public function isComment()
    {
        return $this->event === self::COMMENT_EVENT;
    }
}

