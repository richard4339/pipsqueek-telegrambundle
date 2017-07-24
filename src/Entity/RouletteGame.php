<?php

namespace PipSqueek\TelegramBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RouletteGame
 *
 * @ORM\Table(name="roulette_game")
 * @ORM\Entity
 */
class RouletteGame
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
     * @ORM\Column(name="round", type="integer", nullable=false)
     */
    private $round;

    /**
     * @var integer
     *
     * @ORM\Column(name="attempts", type="integer", nullable=false)
     */
    private $attempts = 0;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="previous_user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $previousUserID;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;



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
     * Set round
     *
     * @param integer $round
     *
     * @return RouletteGame
     */
    public function setRound($round)
    {
        $this->round = $round;

        return $this;
    }

    /**
     * Get round
     *
     * @return integer
     */
    public function getRound()
    {
        return $this->round;
    }

    /**
     * Set attempts
     *
     * @param integer $attempts
     *
     * @return RouletteGame
     */
    public function setAttempts($attempts)
    {
        $this->attempts = $attempts;

        return $this;
    }

    /**
     * Get attempts
     *
     * @return integer
     */
    public function getAttempts()
    {
        return $this->attempts ?? 0;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return RouletteGame
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
     * Set chatID
     *
     * @param \PipSqueek\TelegramBundle\Entity\Chat $chatID
     *
     * @return RouletteGame
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

    /**
     * Set previousUserID
     *
     * @param \PipSqueek\TelegramBundle\Entity\User $previousUserID
     *
     * @return RouletteGame
     */
    public function setPreviousUserID(\PipSqueek\TelegramBundle\Entity\User $previousUserID = null)
    {
        $this->previousUserID = $previousUserID;

        return $this;
    }

    /**
     * Get previousUserID
     *
     * @return \PipSqueek\TelegramBundle\Entity\User
     */
    public function getPreviousUserID()
    {
        return $this->previousUserID;
    }
}
