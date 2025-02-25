<?php

namespace WonderWp\Component\Task\Definition;

abstract class AbstractWpCliCommand extends \WP_CLI_Command implements WpCliCommandInterface
{
    /** @inheritDoc */
    public static function getArgsDefinition(): array
    {
        return [];
    }
}
