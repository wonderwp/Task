<?php

namespace WonderWp\Component\Task\Traits;

trait HasFocus
{
    protected ?array $focus = null;

    public function getFocus(): ?array
    {
        return $this->focus;
    }

    public function setFocus(?array $focus): static
    {
        $this->focus = $focus;

        return $this;
    }
}

