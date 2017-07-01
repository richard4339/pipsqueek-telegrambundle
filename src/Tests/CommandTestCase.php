<?php

namespace PipSqueek\TelegramBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\StreamOutput;
use Symfony\Bundle\FrameworkBundle\Client;

/**
 * Base class for testing the CLI tools.
 *
 * Class modified copy of the class from Alexandre Salomé
 * @author Alexandre Salomé <alexandre.salome@gmail.com>
 * @link http://alexandre-salome.fr/blog/Test-your-commands-in-Symfony2
 */
abstract class CommandTestCase extends WebTestCase
{

    /**
     * @var array
     */
    protected $arguments = ['--no-interaction' => true,
        '-vvv' => true,
        '--env' => 'test'];

    /**
     * Runs a command and returns it output
     *
     * @param Client $client
     * @param string $command
     * @param array|null $arguments
     * @return bool|string|StreamOutput
     */
    public function runCommand(Client $client, $command, array $arguments = null)
    {
        $application = new Application($client->getKernel());
        $application->setAutoExit(false);

        $arguments = array_merge($arguments, array('command' => $command),
            $this->arguments);

        $fp = tmpfile();
        $input = new ArrayInput($arguments);
        $output = new StreamOutput($fp);

        $application->run($input, $output);

        fseek($fp, 0);
        $output = '';
        while (!feof($fp)) {
            $output = fread($fp, 4096);
        }
        fclose($fp);

        return $output;
    }
}