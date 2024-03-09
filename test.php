<?php

use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Output\NullOutput;

class test extends \PHPUnit\Framework\TestCase
{
    public function testIt(): void
    {
        $progressBar = new ProgressBar(new NullOutput());

        $progressBar->start(5);
        $this->assertSame(0, $progressBar->getProgress());

        $progressBar->advance();
        $this->assertSame(1, $progressBar->getProgress());

        $progressBar->advance();
        $this->assertSame(2, $progressBar->getProgress());

        $progressBar->finish();
        $this->assertSame(5, $progressBar->getProgress());
    }
}
