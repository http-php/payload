<?php

declare(strict_types=1);

use HttpPHP\Payload\Contracts\PayloadContract;
use HttpPHP\Payload\Parsers\JsonParser;
use HttpPHP\Payload\Payload;

it('can create a new payload', function () {
    expect(
        new Payload(
            body: [],
            parser : new JsonParser(
                content: '{"test":"test}',
            ),
        ),
    )->toBeInstanceOf(PayloadContract::class)->body()->toEqual([]);
});

it('can statically create a new payload', function () {
    expect(
        Payload::make(
            body: [],
        ),
    )->toBeInstanceOf(PayloadContract::class)->body()->toEqual([]);
});

it('can get the original payload back', function () {
    $payload = Payload::make(
        body: [],
    );

    expect(
        $payload->body()
    )->toBeArray()->toEqual([]);
});

it('can be built with a parser', function () {
    $payload = Payload::make(
        body: '{"test":"test"}',
        parser: new JsonParser(
            content: '{"test":"test"}',
        ),
    );

    expect(
        $payload->parse(),
    )->toBeArray()->toEqual(['test' => 'test']);
});
