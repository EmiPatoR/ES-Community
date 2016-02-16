<?php

namespace ESC\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LOLChampion
 *
 * @ORM\Table(name="l_o_l_champion")
 * @ORM\Entity(repositoryClass="ESC\MainBundle\Repository\LOLChampionRepository")
 */
class LOLChampion
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
     * @var int
     *
     * @ORM\Column(name="championId", type="integer")
     * 
     */
    private $championId;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @var bool
     *
     * @ORM\Column(name="botEnabled", type="boolean")
     */
    private $botEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="botMmEnabled", type="boolean")
     */
    private $botMmEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="freeToPlay", type="boolean")
     */
    private $freeToPlay;

    /**
     * @var bool
     *
     * @ORM\Column(name="rankedPlayEnabled", type="boolean")
     */
    private $rankedPlayEnabled;


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
     * Set active
     *
     * @param boolean $active
     *
     * @return LOLChampion
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set botEnabled
     *
     * @param boolean $botEnabled
     *
     * @return LOLChampion
     */
    public function setBotEnabled($botEnabled)
    {
        $this->botEnabled = $botEnabled;

        return $this;
    }

    /**
     * Get botEnabled
     *
     * @return bool
     */
    public function getBotEnabled()
    {
        return $this->botEnabled;
    }

    /**
     * Set botMmEnabled
     *
     * @param boolean $botMmEnabled
     *
     * @return LOLChampion
     */
    public function setBotMmEnabled($botMmEnabled)
    {
        $this->botMmEnabled = $botMmEnabled;

        return $this;
    }

    /**
     * Get botMmEnabled
     *
     * @return bool
     */
    public function getBotMmEnabled()
    {
        return $this->botMmEnabled;
    }

    /**
     * Set freeToPlay
     *
     * @param boolean $freeToPlay
     *
     * @return LOLChampion
     */
    public function setFreeToPlay($freeToPlay)
    {
        $this->freeToPlay = $freeToPlay;

        return $this;
    }

    /**
     * Get freeToPlay
     *
     * @return bool
     */
    public function getFreeToPlay()
    {
        return $this->freeToPlay;
    }

    /**
     * Set rankedPlayEnabled
     *
     * @param boolean $rankedPlayEnabled
     *
     * @return LOLChampion
     */
    public function setRankedPlayEnabled($rankedPlayEnabled)
    {
        $this->rankedPlayEnabled = $rankedPlayEnabled;

        return $this;
    }

    /**
     * Get rankedPlayEnabled
     *
     * @return bool
     */
    public function getRankedPlayEnabled()
    {
        return $this->rankedPlayEnabled;
    }

    /**
     * Set championId
     *
     * @param integer $championId
     *
     * @return LOLChampion
     */
    public function setChampionId($championId)
    {
        $this->championId = $championId;

        return $this;
    }

    /**
     * Get championId
     *
     * @return integer
     */
    public function getChampionId()
    {
        return $this->championId;
    }
}
