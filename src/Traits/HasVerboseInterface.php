<?php

namespace WonderWp\Component\Task\Traits;

interface HasVerboseInterface
{
    const VERBOSE_ARG = 'verbose';
    
    public function isVerbose(): bool;
    public function setVerbose(bool $verbose): static;
}

