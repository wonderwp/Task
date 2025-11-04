<?php

namespace WonderWp\Component\Task\Traits;

interface HasFocusInterface
{
    const FOCUS_ARG = 'focus';
    
    public function getFocus(): ?array;
    public function setFocus(?array $focus): static;
}

