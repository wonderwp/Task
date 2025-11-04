<?php

namespace WonderWp\Component\Task\Traits;

trait HasLimit
{
    protected ?int $limit = null;

    public function getLimit(): ?int
    {
        return $this->limit;
    }

    public function setLimit(?int $limit): static
    {
        $this->limit = $limit;

        return $this;
    }
}

