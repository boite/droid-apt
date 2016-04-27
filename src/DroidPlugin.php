<?php

namespace Droid\Plugin\Apt;

class DroidPlugin
{
    public function __construct($droid)
    {
        $this->droid = $droid;
    }
    
    public function getCommands()
    {
        $commands = [];
        $commands[] = new \Droid\Plugin\Apt\Command\AptGetInstallCommand();
        $commands[] = new \Droid\Plugin\Apt\Command\AptGetRemoveCommand();
        $commands[] = new \Droid\Plugin\Apt\Command\AptGetUpdateCommand();
        $commands[] = new \Droid\Plugin\Apt\Command\AptGetUpgradeCommand();
        return $commands;
    }
}
