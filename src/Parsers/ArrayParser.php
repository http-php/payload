<?php

declare(strict_types=1);

namespace HttpPHP\Payload\Parsers;

use HttpPHP\Payload\Contracts\ParserContract;

final readonly class ArrayParser implements ParserContract
{
    public function __construct(
        private array $content,
    ) {
    }

    public function parse(): array
    {
        return $this->content;
    }
}
