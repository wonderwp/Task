<?php

namespace WonderWp\Component\Task\Traits;

interface HasDryRunInterface
{
    public function isDryRun(): bool;
    public function setDryRun(bool $dryRun): static;
}
