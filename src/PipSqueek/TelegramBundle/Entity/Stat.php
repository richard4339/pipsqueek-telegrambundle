<?php

namespace PipSqueek\TelegramBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stat
 *
 * @ORM\Table(name="stats")
 * @ORM\Entity
 */
class Stat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     * })
     */
    private $userID;

    /**
     * @var Chat
     *
     * @ORM\ManyToOne(targetEntity="Chat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chat_id", referencedColumnName="id", nullable=false)
     * })
     */
    private $chatID;

    /**
     * @var integer
     *
     * @ORM\Column(name="chars", type="integer", nullable=false)
     */
    private $chars = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="words", type="integer", nullable=false)
     */
    private $words = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="lines", type="integer", nullable=false)
     */
    private $lines = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpl", type="integer", nullable=false)
     */
    private $charsPerLine = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="wpl", type="integer", nullable=false)
     */
    private $wordsPerLine = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="stars", type="integer", nullable=false)
     */
    private $stars = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="ponies", type="integer", nullable=false)
     */
    private $ponies = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="roulette_clicks", type="integer", nullable=false)
     */
    private $rouletteClicks = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="roulette_bangs", type="integer", nullable=false)
     */
    private $rouletteBangs = 0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created = 'CURRENT_TIMESTAMP';

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
     * Set chars
     *
     * @param integer $chars
     *
     * @return Stat
     */
    public function setChars($chars)
    {
        $this->chars = $chars;

        return $this;
    }

    /**
     * Get chars
     *
     * @return integer
     */
    public function getChars()
    {
        return $this->chars;
    }

    /**
     * Set words
     *
     * @param integer $words
     *
     * @return Stat
     */
    public function setWords($words)
    {
        $this->words = $words;

        return $this;
    }

    /**
     * Get words
     *
     * @return integer
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * Set lines
     *
     * @param integer $lines
     *
     * @return Stat
     */
    public function setLines($lines)
    {
        $this->lines = $lines;

        return $this;
    }

    /**
     * Get lines
     *
     * @return integer
     */
    public function getLines()
    {
        return $this->lines;
    }

    /**
     * Set charsPerLine
     *
     * @param integer $charsPerLine
     *
     * @return Stat
     */
    public function setCharsPerLine($charsPerLine)
    {
        $this->charsPerLine = $charsPerLine;

        return $this;
    }

    /**
     * Get charsPerLine
     *
     * @return integer
     */
    public function getCharsPerLine()
    {
        return $this->charsPerLine;
    }

    /**
     * Set wordsPerLine
     *
     * @param integer $wordsPerLine
     *
     * @return Stat
     */
    public function setWordsPerLine($wordsPerLine)
    {
        $this->wordsPerLine = $wordsPerLine;

        return $this;
    }

    /**
     * Get wordsPerLine
     *
     * @return integer
     */
    public function getWordsPerLine()
    {
        return $this->wordsPerLine;
    }

    /**
     * Set stars
     *
     * @param integer $stars
     *
     * @return Stat
     */
    public function setStars($stars)
    {
        $this->stars = $stars;

        return $this;
    }

    /**
     * Get stars
     *
     * @return integer
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * Set ponies
     *
     * @param integer $ponies
     *
     * @return Stat
     */
    public function setPonies($ponies)
    {
        $this->ponies = $ponies;

        return $this;
    }

    /**
     * Get ponies
     *
     * @return integer
     */
    public function getPonies()
    {
        return $this->ponies;
    }

    /**
     * Set rouletteClicks
     *
     * @param integer $rouletteClicks
     *
     * @return Stat
     */
    public function setRouletteClicks($rouletteClicks)
    {
        $this->rouletteClicks = $rouletteClicks;

        return $this;
    }

    /**
     * Get rouletteClicks
     *
     * @return integer
     */
    public function getRouletteClicks()
    {
        return $this->rouletteClicks;
    }

    /**
     * Set rouletteBangs
     *
     * @param integer $rouletteBangs
     *
     * @return Stat
     */
    public function setRouletteBangs($rouletteBangs)
    {
        $this->rouletteBangs = $rouletteBangs;

        return $this;
    }

    /**
     * Get rouletteBangs
     *
     * @return integer
     */
    public function getRouletteBangs()
    {
        return $this->rouletteBangs;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Stat
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set userID
     *
     * @param \PipSqueek\TelegramBundle\Entity\User $userID
     *
     * @return Stat
     */
    public function setUserID(\PipSqueek\TelegramBundle\Entity\User $userID)
    {
        $this->userID = $userID;

        return $this;
    }

    /**
     * Get userID
     *
     * @return \PipSqueek\TelegramBundle\Entity\User
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Set chatID
     *
     * @param \PipSqueek\TelegramBundle\Entity\Chat $chatID
     *
     * @return Stat
     */
    public function setChatID(\PipSqueek\TelegramBundle\Entity\Chat $chatID)
    {
        $this->chatID = $chatID;

        return $this;
    }

    /**
     * Get chatID
     *
     * @return \PipSqueek\TelegramBundle\Entity\Chat
     */
    public function getChatID()
    {
        return $this->chatID;
    }
}