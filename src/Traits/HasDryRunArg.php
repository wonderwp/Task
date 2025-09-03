<?php

namespace WonderWp\Component\Task\Traits;

trait HasDryRunArg
{
    protected static function getDryRunArgDefinition()
    {
        return [
            'name' => HasDryRunInterface::DRY_RUN_ARG,
            'description' => 'If set, the command should simulate the execution flow without persisting the data.',
            'type' => 'flag',
            'optional' => true,
        ];
    }
}
