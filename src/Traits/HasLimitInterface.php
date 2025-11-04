<?php

namespace WonderWp\Component\Task\Traits;

interface HasLimitInterface
{
    const LIMIT_ARG = 'limit';
    
    public function getLimit(): ?int;
    public function setLimit(?int $limit): static;
}

