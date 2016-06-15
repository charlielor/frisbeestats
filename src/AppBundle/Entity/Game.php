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
    protected $tScore;

    /**
     * @ORM\Column(type="integer")
     */
    protected $oSocre;

    /**
     * @ORM\Column(type="string")
     */
    protected $oTeamName;

    /**
     * @ORM\ManyToMany(targetEntity="Play", cascade={"persist"})
     * @ORM\JoinTable(name="GamePlay",
     *      joinColumns={@ORM\JoinColumn(name="gameId", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="playId", referencedColumnName="id")}
     *      )
     */
    protected $plays;

    /**
     * Constructor
     */
    public function __construct($week, $day, $oTeamName)
    {
        $this->week = $week;
        $this->day = $day;
        $this->oTeamName = $oTeamName;
        $this->tScore = 0;
        $this->oSocre = 0;

        $this->plays = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set tScore
     *
     * @param integer $tScore
     *
     * @return Game
     */
    public function setTScore($tScore)
    {
        $this->tScore = $tScore;

        return $this;
    }

    /**
     * Get tScore
     *
     * @return integer
     */
    public function getTScore()
    {
        return $this->tScore;
    }

    /**
     * Set oSocre
     *
     * @param integer $oSocre
     *
     * @return Game
     */
    public function setOSocre($oSocre)
    {
        $this->oSocre = $oSocre;

        return $this;
    }

    /**
     * Get oSocre
     *
     * @return integer
     */
    public function getOSocre()
    {
        return $this->oSocre;
    }

    /**
     * Set oTeamName
     *
     * @param string $oTeamName
     *
     * @return Game
     */
    public function setOTeamName($oTeamName)
    {
        $this->oTeamName = $oTeamName;

        return $this;
    }

    /**
     * Get oTeamName
     *
     * @return string
     */
    public function getOTeamName()
    {
        return $this->oTeamName;
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
