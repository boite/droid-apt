<?php

namespace Droid\Plugin\Apt\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use RuntimeException;
use Droid\Plugin\Apt\Utils;

class AptGetInstallCommand extends Command
{
    public function configure()
    {
        $this->setName('apt-get:install')
            ->setDescription('Installs package(s) through apt-get on Debian based systems')
            ->addArgument(
                'package',
                InputArgument::REQUIRED,
                'Name of the package(s) to install'
            )
        ;
    }
    
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $package = $input->getArgument('package');
        Utils::runAptGet('install', '-y ' . $package, $output);
    }
}
