<?php

namespace Droid\Plugin\Apt\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use RuntimeException;
use Droid\Plugin\Apt\Utils;

class AptGetUpgradeCommand extends Command
{
    public function configure()
    {
        $this->setName('apt-get:upgrade')
            ->setDescription('Upgrade all packages to latest versions from sources')
        ;
    }
    
    public function execute(InputInterface $input, OutputInterface $output)
    {
        Utils::runAptGet('upgrade', '', $output);
    }
}
