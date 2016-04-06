<?php

namespace BadgeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BadgeAwarded
 *
 * @ORM\Table(name="badge_awarded")
 * @ORM\Entity(repositoryClass="BadgeBundle\Repository\BadgeAwardedRepository")
 */
class BadgeAwarded
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
     * @var Badge
     *
     * @ORM\ManyToOne(targetEntity="Badge")
     */
    private $badge;

    /**
     * @param Badge $badge
     */
    public function __construct(Badge $badge)
    {
        $this->badge = $badge;
        $this->date = new \DateTime();
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
     * @return Badge
     */
    public function getBadge()
    {
        return $this->badge;
    }
}

