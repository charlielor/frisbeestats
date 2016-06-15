<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Play")
 */
class Play {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $od;

    /**
     * @ORM\Column(type="string")
     */
    protected $sequence;

    /**
     * @ORM\Column(type="time")
     */
    protected $minutes;
    

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set od
     *
     * @param string $od
     *
     * @return Play
     */
    public function setOd($od)
    {
        $this->od = $od;

        return $this;
    }

    /**
     * Get od
     *
     * @return string
     */
    public function getOd()
    {
        return $this->od;
    }

    /**
     * Set sequence
     *
     * @param string $sequence
     *
     * @return Play
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set minutes
     *
     * @param \DateTime $minutes
     *
     * @return Play
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;

        return $this;
    }

    /**
     * Get minutes
     *
     * @return \DateTime
     */
    public function getMinutes()
    {
        return $this->minutes;
    }
}
