<?php

declare(strict_types = 1);

use PhpBench\Attributes as Bench;

class ResponseBench
{
    #[Bench\Assert('mode(variant.time.avg) < 200 ms')]
    public function benchHelloWorld()
    {
        sprintf('%s %s', 'hello', 'world');
    }
}
