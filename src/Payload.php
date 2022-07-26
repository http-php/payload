<?php

declare(strict_types=1);

namespace HttpPHP\Payload;

use HttpPHP\Payload\Contracts\ParserContract;
use HttpPHP\Payload\Contracts\PayloadContract;
use HttpPHP\Payload\Parsers\JsonParser;
use Throwable;

final class Payload implements PayloadContract
{
    /**
     * @param mixed $body
     * @param ParserContract $parser
     */
    public function __construct(
        private readonly mixed $body,
        private ParserContract $parser,
    ) {
    }

    /**
     * @param mixed $body
     * @param ParserContract|null $parser
     * @return PayloadContract
     */
    public static function make(
        mixed $body,
        null|ParserContract $parser = null,
    ): PayloadContract {
        return new Payload(
            body: $body,
            parser : $parser ?? new JsonParser(
                content: $body,
            ),
        );
    }

    /**
     * @return array<int|string,mixed>
     * @throws Throwable
     */
    public function parse(): array
    {
        return $this->parser->parse();
    }

    /**
     * @return mixed
     */
    public function body(): mixed
    {
        return $this->body;
    }
}
