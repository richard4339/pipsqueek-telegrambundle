<?php

namespace PipSqueek\TelegramBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quote
 *
 * @ORM\Table(name="quotes")
 * @ORM\Entity
 */
class Quote
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
     * @var string
     *
     * @ORM\Column(name="quote", type="text", nullable=true)
     */
    private $quote;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $userID;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer", nullable=true)
     */
    private $views = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer", nullable=true)
     */
    private $rating = 0;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quote
     *
     * @param string $quote
     *
     * @return Quote
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Get quote
     *
     * @return string
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Quote
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
     * Adds 1 to the current number of views
     *
     * @return Quote
     */
    public function addView() {
        return $this->setViews($this->getViews() + 1);
    }

    /**
     * Set views
     *
     * @param integer $views
     *
     * @return Quote
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer
     */
    public function getViews()
    {
        return $this->views ?? 0;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return Quote
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set userID
     *
     * @param \PipSqueek\TelegramBundle\Entity\User $userID
     *
     * @return Quote
     */
    public function setUserID(\PipSqueek\TelegramBundle\Entity\User $userID = null)
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
     * @return Quote
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
