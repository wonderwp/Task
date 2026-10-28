<?php

declare(strict_types=1);

namespace WonderWp\Component\Task\Tests\Unit;

use PHPUnit\Framework\TestCase;
use WonderWp\Component\Task\Progress\WpCliProgressBar;

final class WpCliProgressBarTest extends TestCase
{
    public function testWithoutInitReturnsSafeDefaults(): void
    {
        $bar = new WpCliProgressBar();
        $this->assertSame('', $bar->current());
        $this->assertSame(0.0, $bar->percent());
    }
}
