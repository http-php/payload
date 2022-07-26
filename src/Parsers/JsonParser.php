<?php

declare(strict_types=1);

namespace HttpPHP\Payload\Parsers;

use HttpPHP\Payload\Contracts\ParserContract;
use JsonException;

final class JsonParser implements ParserContract
{
    public function __construct (
        private readonly string $content,
    ) {}

    /**
     * @return array
     * @throws JsonException
     */
    public function parse(): array
    {
        return (array) json_decode(
            json: $this->content,
            associative: true,
            depth: 512,
            flags: JSON_THROW_ON_ERROR,
        );
    }
}
