<?php

namespace WonderWp\Component\Task\Definition;

interface WpCliCommandInterface extends CommandInterface
{
    /**
     * See \WP_CLI::add_command third parameter for more details
     * @return array
     */
    public static function getArgsDefinition(): array;
}
