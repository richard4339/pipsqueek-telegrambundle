<?php

namespace PipSqueek\TelegramBundle\Command;

use PipSqueek\TelegramBundle\Config\Config;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Telegram\Bot\Api;

/**
 * Class AppSayCommand
 * @package PipSqueek\TelegramBundle\Command
 */
class AppSayCommand extends ContainerAwareCommand
{

    /**
     * Configure the command
     */
    protected function configure()
    {
        $this
            ->setName('app:say')
            ->setDescription('Say a message')
            ->addArgument('chatID', InputArgument::REQUIRED, 'Chat ID to speak to')
            ->addArgument('message', InputArgument::IS_ARRAY, 'The message to send')
            ->addOption('parseMode', null, InputOption::VALUE_REQUIRED, 'The parse mode to use', 'Markdown')
        ;
    }

    /**
     * Executes the say command.
     *
     * Usage is special because of the chatID being a number:
     * php bin/console -- -12345 This is a test message
     *
     * @param InputInterface $input An InputInterface instance
     * @param OutputInterface $output An OutputInterface instance
     *
     * @return null|int null or 0 if everything went fine, or an error code
     *
     * @throws \Symfony\Component\Console\Exception\LogicException When this abstract method is not implemented
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $config = new Config($this->getContainer()->getParameter('pip_squeek_telegram.config'));

        $message = implode(' ', $input->getArgument('message'));

        $telegram = new Api($config->apiKey);

        $telegram->sendMessage(["chat_id" => $input->getArgument('chatID'),
            "text" => $message,
            "parse_mode" => $input->getOption('parseMode')]);

        $output->writeln(sprintf("Sent message '%s'", $message));

        return 0;
    }

}