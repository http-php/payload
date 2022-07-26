# Payload

[![Latest Version][badge-release]][packagist]
[![PHP Version][badge-php]][php]
[![Tests][badge-tests]][tests]
[![Total Downloads][badge-downloads]][downloads]

[badge-tests]: https://github.com/http-php/payload/actions/workflows/test.yml/badge.svg
[badge-release]: https://img.shields.io/packagist/v/http-php/payload.svg?style=flat-square&label=release
[badge-php]: https://img.shields.io/packagist/php-v/http-php/payload.svg?style=flat-square
[badge-downloads]: https://img.shields.io/packagist/dt/http-php/payload.svg?style=flat-square&colorB=mediumvioletred

[packagist]: https://packagist.org/packages/http-php/payload
[php]: https://php.net
[downloads]: https://packagist.org/packages/http-php/payload
[tests]: https://github.com/http-php/payload/actions/workflows/test.yml
<!-- BADGES_END -->

This package is to allow you to create HTTP payloads in PHP, in a simple and reliable way.

## Installation

```bash
composer require http-php/payload
```

## Usage

To use this package, it is very simple. Create a payload using the following code:

```php
use HttpPHP\Payload\Payload;

$payload = Payload::make(
    body: '{"test": "test"}', // add your json content here.
);

$payload->parse(); // ['test' => 'test'']; parse to get payload as an array.
```

This package currently supports the following payload types:

- JSON

## Testing

To run the test suite:

```bash
composer run test
```

## Credits

- [Steve McDougall](https://github.com/JustSteveKing)
- [All Contributors](../../contributors)

## LICENSE

The MIT LIcense (MIT). Please see [License File](./LICENSE) for more information.
