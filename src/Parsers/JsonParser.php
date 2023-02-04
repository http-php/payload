<?php

declare(strict_types=1);

namespace HttpPHP\Payload\Parsers;

use HttpPHP\Payload\Contracts\ParserContract;
use JsonException;

final readonly class JsonParser implements ParserContract
{
    public function __construct(
        private mixed $content,
    ) {
    }

    /**
     * @return array<int|string,mixed>
     * @throws JsonException
     */
    public function parse(): array
    {
        return (array) json_decode(
            json: strval($this->content),
            associative: true,
            depth: 512,
            flags: JSON_THROW_ON_ERROR,
        );
    }
}
