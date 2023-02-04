<?php

declare(strict_types=1);

namespace HttpPHP\Payload\Contracts;

interface PayloadContract
{
    /**
     * @param string|array $body
     * @return PayloadContract
     */
    public static function make(
        string|array $body,
        null|ParserContract $parser = null,
    ): PayloadContract;

    /**
     * @return array<int|string,string|array>
     */
    public function parse(): array;

    /**
     * @return string|array
     */
    public function body(): string|array;
}
