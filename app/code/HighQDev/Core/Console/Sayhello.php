<?php
declare(strict_types=1);

namespace HighQDev\Core\Console;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Sayhello
 * @package HighQDev\Core\Console
 */
class Sayhello extends Command
{
    protected function configure()
    {
        $this->setName('core:sayhello');
        $this->setDescription('Demo command line');

        parent::configure();
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
       // $this->_logger->info('I did something from command');
        $output->writeln("Happy Coding");
    }

}
