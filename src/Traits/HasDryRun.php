<?php

namespace WonderWp\Component\Task\Traits;

trait HasDryRun
{
    protected bool $dryRun = false;

    public function isDryRun(): bool
    {
        return $this->dryRun;
    }

    public function setDryRun(bool $dryRun): static
    {
        $this->dryRun = $dryRun;

        return $this;
    }
}

