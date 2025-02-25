<?php

namespace WonderWp\Component\Task\Service;

use WonderWp\Component\Task\Definition\CommandInterface;
use WonderWp\Component\Task\Definition\WpCliCommandInterface;
use WonderWp\Component\Task\Response\CommandRegistrationResponse;
use WonderWp\Component\Task\Response\CommandRegistrationResponseInterface;

class WpCliCommandService extends AbstractCommandService
{

    public function registerCommand(CommandInterface $command): CommandRegistrationResponseInterface
    {
        /** @var WpCliCommandInterface $command */
        $registered = \WP_CLI::add_command($command::getName(), $command, $command::getArgsDefinition());

        $code = $registered ? 200 : 500;
        $msgKey = $registered ? CommandRegistrationResponseInterface::SUCCESS : CommandRegistrationResponseInterface::ERROR;

        return new CommandRegistrationResponse($code, $msgKey);
    }

    protected function autoloadFile(string $className, string $filePath): object
    {
        $instance = parent::autoloadFile($className, $filePath);
        if($instance instanceof WpCliCommandInterface){
            $this->registerCommand($instance);
        }

        return $instance;
    }
}
