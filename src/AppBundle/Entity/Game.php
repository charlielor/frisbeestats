<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Game")
 */
class Game {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $week;

    /**
     * @ORM\Column(type="integer")
     */
    protected $day;

    /**
     * @ORM\Column(type="integer")
     */
    protected $tscore;

    /**
     * @ORM\Column(type="integer")
     */
    protected $osocre;

    /**
     * @ORM\Column(type="string")
     */
    protected $oteamname;

    /**
     * @ORM\ManyToMany(targetEntity="Play", cascade={"persist"})
     * @ORM\JoinTable(name="GamePlay",
     *      joinColumns={@ORM\JoinColumn(name="gameId", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="playId", referencedColumnName="id")}
     *      )
     */
    protected $plays;

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
     * Set week
     *
     * @param integer $week
     *
     * @return Game
     */
    public function setWeek($week)
    {
        $this->week = $week;

        return $this;
    }

    /**
     * Get week
     *
     * @return integer
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * Set day
     *
     * @param integer $day
     *
     * @return Game
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return integer
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set tscore
     *
     * @param integer $tscore
     *
     * @return Game
     */
    public function setTscore($tscore)
    {
        $this->tscore = $tscore;

        return $this;
    }

    /**
     * Get tscore
     *
     * @return integer
     */
    public function getTscore()
    {
        return $this->tscore;
    }

    /**
     * Set osocre
     *
     * @param integer $osocre
     *
     * @return Game
     */
    public function setOsocre($osocre)
    {
        $this->osocre = $osocre;

        return $this;
    }

    /**
     * Get osocre
     *
     * @return integer
     */
    public function getOsocre()
    {
        return $this->osocre;
    }

    /**
     * Set oteamname
     *
     * @param string $oteamname
     *
     * @return Game
     */
    public function setOteamname($oteamname)
    {
        $this->oteamname = $oteamname;

        return $this;
    }

    /**
     * Get oteamname
     *
     * @return string
     */
    public function getOteamname()
    {
        return $this->oteamname;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->plays = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add play
     *
     * @param \AppBundle\Entity\Play $play
     *
     * @return Game
     */
    public function addPlay(\AppBundle\Entity\Play $play)
    {
        $this->plays[] = $play;

        return $this;
    }

    /**
     * Remove play
     *
     * @param \AppBundle\Entity\Play $play
     */
    public function removePlay(\AppBundle\Entity\Play $play)
    {
        $this->plays->removeElement($play);
    }

    /**
     * Get plays
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlays()
    {
        return $this->plays;
    }
}
