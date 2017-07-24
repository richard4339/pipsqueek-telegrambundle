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
use PipSqueek\TelegramBundle\Entity\Chat;

/**
 * Class ChatRepository
 * @package PipSqueek\TelegramBundle\Repository
 */
class ChatRepository extends EntityRepository
{
    /**
     * Finds a single entity by a set of criteria.
     *
     * @param int $chatID
     * @param array|null $orderBy
     *
     * @return Chat|null The entity instance or NULL if the entity can not be found.
     */
    public function findOneByChatID($chatID, array $orderBy = null) {
        return $this->findOneBy(['chatID' => $chatID], $orderBy);
    }

}