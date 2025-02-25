<?php

namespace WonderWp\Component\Task\Traits;

trait HasDryRunArg
{
    const DRY_RUN_ARG = 'dry-run';

    protected static function getDryRunArgDefinition()
    {
        return [
            'name' => self::DRY_RUN_ARG,
            'description' => 'If set, the command should simulate the execution flow without persisting the data.',
            'type' => 'flag',
            'optional' => true,
        ];
    }
}
