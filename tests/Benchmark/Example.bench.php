<?php

declare(strict_types = 1);

/**
 * This file is part of the miniaturebase/template-php PHP library.
 *
 * @copyright 2021 Jordan Brauer <18744334+jordanbrauer@users.noreply.github.com>
 * @license MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PhpBench\Attributes as Bench;

class ResponseBench
{
    #[Bench\Assert('mode(variant.time.avg) < 200 ms')]
    public function benchHelloWorld()
    {
        sprintf('%s %s', 'hello', 'world');
    }
}
