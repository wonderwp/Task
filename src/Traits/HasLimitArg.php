<?php

namespace WonderWp\Component\Task\Traits;

trait HasLimitArg
{
    protected static function getLimitArgDefinition()
    {
        return [
            'name' => HasLimitInterface::LIMIT_ARG,
            'description' => 'Limit the number of items to process.',
            'type' => 'assoc',
            'optional' => true,
        ];
    }
}

