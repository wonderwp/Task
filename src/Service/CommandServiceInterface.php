<?php

namespace WonderWp\Component\Task\Service;

use WonderWp\Component\PluginSkeleton\Service\RegistrableInterface;
use WonderWp\Component\Task\Definition\CommandInterface;
use WonderWp\Component\Task\Response\CommandRegistrationResponseInterface;

interface CommandServiceInterface extends RegistrableInterface
{
    public function registerCommand(CommandInterface $command): CommandRegistrationResponseInterface;
}
