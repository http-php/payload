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
     * @param string|array $body
     * @param ParserContract $parser
     */
    public function __construct(
        private readonly string|array $body,
        private ParserContract $parser,
    ) {
    }

    /**
     * @param string|array $body
     * @param ParserContract|null $parser
     * @return PayloadContract
     */
    public static function make(
        string|array $body,
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
     * @return array<int|string,string|array>
     * @throws Throwable
     */
    public function parse(): array
    {
        return $this->parser->parse();
    }

    /**
     * @return string|array
     */
    public function body(): string|array
    {
        return $this->body;
    }
}
