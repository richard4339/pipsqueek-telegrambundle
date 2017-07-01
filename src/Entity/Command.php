<?php

namespace PipSqueek\TelegramBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Command
 *
 * @ORM\Table(name="commands")
 * @ORM\Entity
 */
class Command
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="command", type="string", length=255, nullable=false)
     */
    private $command;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = true;

    /**
     * @var integer
     *
     * @ORM\Column(name="cmd_level", type="integer", nullable=false)
     */
    private $cmdLevel = 10;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_by_default", type="boolean", nullable=false)
     */
    private $allowByDefault = false;

    public function __toString()
    {
        return $this->getCommand();
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
     * Set command
     *
     * @param string $command
     *
     * @return Command
     */
    public function setCommand($command)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * Get command
     *
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Command
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
     * Set cmdLevel
     *
     * @param integer $cmdLevel
     *
     * @return Command
     */
    public function setCmdLevel($cmdLevel)
    {
        $this->cmdLevel = $cmdLevel;

        return $this;
    }

    /**
     * Get cmdLevel
     *
     * @return integer
     */
    public function getCmdLevel()
    {
        return $this->cmdLevel;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Command
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set allowByDefault
     *
     * @param boolean $allowByDefault
     *
     * @return Command
     */
    public function setAllowByDefault($allowByDefault)
    {
        $this->allowByDefault = $allowByDefault;

        return $this;
    }

    /**
     * Get allowByDefault
     *
     * @return boolean
     */
    public function getAllowByDefault()
    {
        return $this->allowByDefault;
    }
}
