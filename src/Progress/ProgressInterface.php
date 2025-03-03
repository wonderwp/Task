<?php

namespace WonderWp\Component\Task\Progress;

interface ProgressInterface
{
    /**
     * @param string $message
     * @param int $count
     * @param int $interval
     * @return mixed
     */
    public function initWith(string $message, int $count, int $interval = 100);

    public function display(): static;

    public function tick($increment = 1, $msg = null): static;

    public function finish(): static;
}
