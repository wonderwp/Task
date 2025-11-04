<?php

namespace WonderWp\Component\Task\Traits;

trait HasVerbose
{
    protected bool $verbose = false;

    public function isVerbose(): bool
    {
        return $this->verbose;
    }

    public function setVerbose(bool $verbose): static
    {
        $this->verbose = $verbose;

        return $this;
    }
}

