<?php

namespace ESC\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LOLSummoner
 *
 * @ORM\Table(name="l_o_l_summoner")
 * @ORM\Entity(repositoryClass="ESC\MainBundle\Repository\LOLSummonerRepository")
 */
class LOLSummoner
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
     * @ORM\Column(name="summonerID", type="integer", unique=true)
     */
    private $summonerID;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="profileIconId", type="integer")
     */
    private $profileIconId;

    /**
     * @var int
     *
     * @ORM\Column(name="revisionDate", type="bigint")
     */
    private $revisionDate;

    /**
     * @var int
     *
     * @ORM\Column(name="summonerLevel", type="integer")
     */
    private $summonerLevel;


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
     * Set summonerID
     *
     * @param integer $summonerID
     *
     * @return LOLSummoner
     */
    public function setSummonerID($summonerID)
    {
        $this->summonerID = $summonerID;

        return $this;
    }

    /**
     * Get summonerID
     *
     * @return int
     */
    public function getSummonerID()
    {
        return $this->summonerID;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return LOLSummoner
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
     * Set profileIconId
     *
     * @param integer $profileIconId
     *
     * @return LOLSummoner
     */
    public function setProfileIconId($profileIconId)
    {
        $this->profileIconId = $profileIconId;

        return $this;
    }

    /**
     * Get profileIconId
     *
     * @return int
     */
    public function getProfileIconId()
    {
        return $this->profileIconId;
    }

    /**
     * Set revisionDate
     *
     * @param integer $revisionDate
     *
     * @return LOLSummoner
     */
    public function setRevisionDate($revisionDate)
    {
        $this->revisionDate = $revisionDate;

        return $this;
    }

    /**
     * Get revisionDate
     *
     * @return int
     */
    public function getRevisionDate()
    {
        return $this->revisionDate;
    }

    /**
     * Set summonerLevel
     *
     * @param integer $summonerLevel
     *
     * @return LOLSummoner
     */
    public function setSummonerLevel($summonerLevel)
    {
        $this->summonerLevel = $summonerLevel;

        return $this;
    }

    /**
     * Get summonerLevel
     *
     * @return int
     */
    public function getSummonerLevel()
    {
        return $this->summonerLevel;
    }
}

