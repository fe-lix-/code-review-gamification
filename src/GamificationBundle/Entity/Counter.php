<?php

namespace GamificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Counter
 *
 * @ORM\Table(name="counter")
 * @ORM\Entity(repositoryClass="GamificationBundle\Repository\CounterRepository")
 */
class Counter
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="counters")
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="count", type="integer")
     */
    private $count;

    /**
     * @param string $name
     * @param User $user
     */
    public function __construct($name, User $user)
    {
        $this->name = $name;
        $this->user = $user;
        $this->count = 0;
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
     * Get count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    public function increment()
    {
        $this->count += 1;
    }
}

