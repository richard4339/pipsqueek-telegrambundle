<?php
/**
 * pipsqueek-telegram-panel
 * @author Richard Lynskey <richard@mozor.net>
 * @copyright Copyright (c) 2017, Richard Lynskey
 * @version 0.1
 *
 * Built 2017-07-01 09:21 CDT by richard
 *
 */

namespace PipSqueek\TelegramBundle\Repository;

use Doctrine\ORM\EntityRepository;
use PipSqueek\TelegramBundle\Entity\Command;

/**
 * Class CommandRepository
 * @package PipSqueek\TelegramBundle\Repository
 */
class CommandRepository extends EntityRepository
{

    /**
     * Finds a single entity by a set of criteria.
     *
     * @param string $command
     * @param array|null $orderBy
     * @return null|Command The entity instance or NULL if the entity can not be found.
     */
    public function findOneByCommand($command, array $orderBy = null) {
        return $this->findOneBy(['command' => $command], $orderBy);
    }

}