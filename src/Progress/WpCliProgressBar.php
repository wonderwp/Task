<?php

namespace WonderWp\Component\Task\Progress;

use cli\progress\Bar;

class WpCliProgressBar implements ProgressInterface
{
    protected ?Bar $bar = null;

    public function initWith(string $message, int $count, int $interval = 100)
    {
        $this->bar = new Bar( $message, $count, $interval );
    }

    public function display(): static
    {
        if(!$this->bar){
            return $this;
        }

        $this->bar->display();
        return $this;
    }

    public function tick($increment = 1, $msg = null): static
    {
        if (!$this->bar) {
            return $this;
        }

        $this->bar->tick($increment, $msg);
        return $this;
    }

    public function finish(): static
    {
        if (!$this->bar) {
            return $this;
        }

        $this->bar->finish();
        return $this;
    }

    public function setTotal($total): static
    {
        if (!$this->bar) {
            return $this;
        }

        $this->bar->setTotal($total);
        return $this;
    }

    public function reset($total = null): static
    {
        if (!$this->bar) {
            return $this;
        }

        $this->bar->reset($total);
        return $this;
    }

    public function current(): string
    {
        if (!$this->bar) {
            return '';
        }

        return $this->bar->current();
    }

    public function total(): string
    {
        if (!$this->bar) {
            return '';
        }

        return $this->bar->total();
    }

    public function estimated(): int
    {
        if (!$this->bar) {
            return 0;
        }

        return $this->bar->estimated();
    }

    public function increment($increment = 1): static
    {
        if (!$this->bar) {
            return $this;
        }

        $this->bar->increment($increment);
        return $this;
    }

    public function percent() : float
    {
        if (!$this->bar) {
            return 0;
        }

        return $this->bar->percent();
    }

}
