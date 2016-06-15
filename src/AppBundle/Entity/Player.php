<?php
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Player")
 */
class Player {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="integer")
     */
    protected $goals;

    /**
     * @ORM\Column(type="integer")
     */
    protected $assists;

    /**
     * @ORM\Column(type="integer")
     */
    protected $touches;

    /**
     * @ORM\Column(type="integer")
     */
    protected $throws;

    /**
     * @ORM\Column(type="integer")
     */
    protected $stalleds;

    /**
     * @ORM\Column(type="integer")
     */
    protected $throwaways;

    /**
     * @ORM\Column(type="integer")
     */
    protected $callahans;

    /**
     * @ORM\Column(type="integer")
     */
    protected $catches;

    /**
     * @ORM\Column(type="integer")
     */
    protected $drops;

    /**
     * @ORM\Column(type="integer")
     */
    protected $blocks;

    /**
     * @ORM\ManyToMany(targetEntity="Game", cascade={"persist"})
     * @ORM\JoinTable(name="PlayerGame",
     *      joinColumns={@ORM\JoinColumn(name="playerId", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="gameId", referencedColumnName="id")}
     *      )
     */
    protected $games;

    /**
     * @ORM\ManyToMany(targetEntity="Play", cascade={"persist"})
     * @ORM\JoinTable(name="PlayerPlay",
     *      joinColumns={@ORM\JoinColumn(name="playerId", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="playId", referencedColumnName="id")}
     *      )
     */
    protected $plays;

    public function __construct($name) {
        $this->name = $name;
        $this->games = new ArrayCollection();
        $this->play = new ArrayCollection();

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
     * Set name
     *
     * @param string $name
     *
     * @return Player
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
     * Set goals
     *
     * @param integer $goals
     *
     * @return Player
     */
    public function setGoals($goals)
    {
        $this->goals = $goals;

        return $this;
    }

    /**
     * Get goals
     *
     * @return integer
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * Set assists
     *
     * @param integer $assists
     *
     * @return Player
     */
    public function setAssists($assists)
    {
        $this->assists = $assists;

        return $this;
    }

    /**
     * Get assists
     *
     * @return integer
     */
    public function getAssists()
    {
        return $this->assists;
    }

    /**
     * Set touches
     *
     * @param integer $touches
     *
     * @return Player
     */
    public function setTouches($touches)
    {
        $this->touches = $touches;

        return $this;
    }

    /**
     * Get touches
     *
     * @return integer
     */
    public function getTouches()
    {
        return $this->touches;
    }

    /**
     * Set throws
     *
     * @param integer $throws
     *
     * @return Player
     */
    public function setThrows($throws)
    {
        $this->throws = $throws;

        return $this;
    }

    /**
     * Get throws
     *
     * @return integer
     */
    public function getThrows()
    {
        return $this->throws;
    }

    /**
     * Set stalleds
     *
     * @param integer $stalleds
     *
     * @return Player
     */
    public function setStalleds($stalleds)
    {
        $this->stalleds = $stalleds;

        return $this;
    }

    /**
     * Get stalleds
     *
     * @return integer
     */
    public function getStalleds()
    {
        return $this->stalleds;
    }

    /**
     * Set throwaways
     *
     * @param integer $throwaways
     *
     * @return Player
     */
    public function setThrowaways($throwaways)
    {
        $this->throwaways = $throwaways;

        return $this;
    }

    /**
     * Get throwaways
     *
     * @return integer
     */
    public function getThrowaways()
    {
        return $this->throwaways;
    }

    /**
     * Set callahans
     *
     * @param integer $callahans
     *
     * @return Player
     */
    public function setCallahans($callahans)
    {
        $this->callahans = $callahans;

        return $this;
    }

    /**
     * Get callahans
     *
     * @return integer
     */
    public function getCallahans()
    {
        return $this->callahans;
    }

    /**
     * Set catches
     *
     * @param integer $catches
     *
     * @return Player
     */
    public function setCatches($catches)
    {
        $this->catches = $catches;

        return $this;
    }

    /**
     * Get catches
     *
     * @return integer
     */
    public function getCatches()
    {
        return $this->catches;
    }

    /**
     * Set drops
     *
     * @param integer $drops
     *
     * @return Player
     */
    public function setDrops($drops)
    {
        $this->drops = $drops;

        return $this;
    }

    /**
     * Get drops
     *
     * @return integer
     */
    public function getDrops()
    {
        return $this->drops;
    }

    /**
     * Set blocks
     *
     * @param integer $blocks
     *
     * @return Player
     */
    public function setBlocks($blocks)
    {
        $this->blocks = $blocks;

        return $this;
    }

    /**
     * Get blocks
     *
     * @return integer
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * Add game
     *
     * @param \AppBundle\Entity\Game $game
     *
     * @return Player
     */
    public function addGame(\AppBundle\Entity\Game $game)
    {
        $this->games[] = $game;

        return $this;
    }

    /**
     * Remove game
     *
     * @param \AppBundle\Entity\Game $game
     */
    public function removeGame(\AppBundle\Entity\Game $game)
    {
        $this->games->removeElement($game);
    }

    /**
     * Get games
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGames()
    {
        return $this->games;
    }

    /**
     * Add play
     *
     * @param \AppBundle\Entity\Play $play
     *
     * @return Player
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
