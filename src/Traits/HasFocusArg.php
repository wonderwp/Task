<?php

namespace WonderWp\Component\Task\Traits;

trait HasFocusArg
{
    protected static function getFocusArgDefinition(?string $description = null)
    {
        $defaultDescription = 'Comma-separated list of reference IDs to focus on.';
        
        return [
            'name' => HasFocusInterface::FOCUS_ARG,
            'description' => $description ?? $defaultDescription,
            'type' => 'assoc',
            'optional' => true,
        ];
    }
}

