<?php

namespace PipSqueek\TelegramBundle\Config;


/**
 * Class Config
 * @package PipSqueek\TelegramBundle\Config
 *
 * @property string $twitchAPIClientID
 * @property int $twitchAPIVersion
 * @property string $serverName
 */
class Config
{
    /**
     * Config constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->apiKey = $config['api_key'];
    }
}