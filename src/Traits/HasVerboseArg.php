<?php

namespace WonderWp\Component\Task\Traits;

trait HasVerboseArg
{
    protected static function getVerboseArgDefinition()
    {
        return [
            'name' => HasVerboseInterface::VERBOSE_ARG,
            'description' => 'If set, the command will show detailed output including item details.',
            'type' => 'flag',
            'optional' => true,
        ];
    }
}

