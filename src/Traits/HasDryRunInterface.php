<?php

namespace WonderWp\Component\Task\Traits;

interface HasDryRunInterface
{
    const DRY_RUN_ARG = 'dry-run';
    
    public function isDryRun(): bool;
    public function setDryRun(bool $dryRun): static;
}
