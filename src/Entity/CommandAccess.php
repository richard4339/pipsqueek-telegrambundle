<?php

namespace PipSqueek\TelegramBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandAccess
 *
 * @ORM\Table(name="command_access")
 * @ORM\Entity
 */
class CommandAccess
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
     * @var integer
     *
     * @ORM\Column(name="command_id", type="integer", nullable=false)
     */

    /**
     * @var Command
     *
     * @ORM\ManyToOne(targetEntity="Command")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="command_id", referencedColumnName="id", nullable=false)
     * })
     */
    private $commandID;


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
     * @return CommandAccess
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
     * @return CommandAccess
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
     * Set commandID
     *
     * @param \PipSqueek\TelegramBundle\Entity\Command $commandID
     *
     * @return CommandAccess
     */
    public function setCommandID(\PipSqueek\TelegramBundle\Entity\Command $commandID)
    {
        $this->commandID = $commandID;

        return $this;
    }

    /**
     * Get commandID
     *
     * @return \PipSqueek\TelegramBundle\Entity\Command
     */
    public function getCommandID()
    {
        return $this->commandID;
    }
}
