<?php

namespace PipSqueek\TelegramBundle\Tests;

use Telegram\Bot\Api;

/**
 * Class AppSayCommandTest
 * @package PipSqueek\TelegramBundle\Tests
 */
class AppSayCommandTest extends CommandTestCase
{

    /**
     *
     */
    public function setUp()
    {
    }

    /**
     * @since 1.0.1
     * @expectedException \Telegram\Bot\Exceptions\TelegramSDKException
     */
    public function testNoAPIKey() {
        $telegram = new Api();
    }

}
