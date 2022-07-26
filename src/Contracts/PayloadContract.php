<?php

declare(strict_types=1);

namespace HttpPHP\Payload\Contracts;

interface PayloadContract
{
    /**
     * @param mixed $body
     * @return PayloadContract
     */
    public static function make(
        mixed $body,
        null|ParserContract $parser = null,
    ): PayloadContract;

    /**
     * @return array
     */
    public function parse(): array;

    /**
     * @return mixed
     */
    public function body(): mixed;
}
