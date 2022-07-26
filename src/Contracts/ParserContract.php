<?php

declare(strict_types=1);

namespace HttpPHP\Payload\Contracts;

use Throwable;

interface ParserContract
{
    /**
     * @return array<int|string,mixed>
     * @throws Throwable
     */
    public function parse(): array;
}
