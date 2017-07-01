<?php

namespace PipSqueek\TelegramBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClanWarManagerConfig
 *
 * @ORM\Table(name="clanwarmanager_config")
 * @ORM\Entity
 */
class ClanWarManagerConfig
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
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="clan_name", type="text", nullable=false)
     */
    private $clanName;

    /**
     * @var string
     *
     * @ORM\Column(name="clan_id", type="text", nullable=false)
     */
    private $clanId;

    /**
     * @var integer
     *
     * @ORM\Column(name="default_timer", type="integer", nullable=false)
     */
    private $defaultTimer;



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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ClanWarManagerConfig
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
     * Set clanName
     *
     * @param string $clanName
     *
     * @return ClanWarManagerConfig
     */
    public function setClanName($clanName)
    {
        $this->clanName = $clanName;

        return $this;
    }

    /**
     * Get clanName
     *
     * @return string
     */
    public function getClanName()
    {
        return $this->clanName;
    }

    /**
     * Set clanId
     *
     * @param string $clanId
     *
     * @return ClanWarManagerConfig
     */
    public function setClanId($clanId)
    {
        $this->clanId = $clanId;

        return $this;
    }

    /**
     * Get clanId
     *
     * @return string
     */
    public function getClanId()
    {
        return $this->clanId;
    }

    /**
     * Set defaultTimer
     *
     * @param integer $defaultTimer
     *
     * @return ClanWarManagerConfig
     */
    public function setDefaultTimer($defaultTimer)
    {
        $this->defaultTimer = $defaultTimer;

        return $this;
    }

    /**
     * Get defaultTimer
     *
     * @return integer
     */
    public function getDefaultTimer()
    {
        return $this->defaultTimer;
    }

    /**
     * Set chatID
     *
     * @param \PipSqueek\TelegramBundle\Entity\Chat $chatID
     *
     * @return ClanWarManagerConfig
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
