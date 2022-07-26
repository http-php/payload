<?php

declare(strict_types=1);

namespace HttpPHP\Payload;

use HttpPHP\Payload\Contracts\ParserContract;
use HttpPHP\Payload\Contracts\PayloadContract;
use HttpPHP\Payload\Parsers\JsonParser;

final class Payload implements PayloadContract
{
    public function __construct(
        private readonly mixed $body,
        private ParserContract $parser,
    ) {}

    public static function make(
        mixed $body,
        null|ParserContract $parser = null,
    ): PayloadContract {
        return new Payload(
            body: $body,
            parser : $parser ?? new JsonParser(
                content: json_encode(
                    value: $body,
                ),
            ),
        );
    }

    public function parse(): array
    {
        return $this->parser->parse();
    }

    public function body(): mixed
    {
        return $this->body;
    }
}
