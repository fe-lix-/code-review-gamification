<?php

namespace GamificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="GamificationBundle\Repository\UserRepository")
 */
class User
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var Counter
     *
     * @ORM\OneToMany(targetEntity="Counter", mappedBy="user")
     */
    private $counters;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Counter
     */
    public function getCounters()
    {
        return $this->counters;
    }

    /**
     * @return int
     */
    public function getCodeReviews()
    {
        /** @var Counter $counter */
        foreach ($this->counters as $counter) {
            if ($counter->getName() === 'code-reviewed') {
                return $counter->getCount();
            }
        }

        return 0;
    }
}

