# HTTP Client Factory

[![Latest Version on Packagist](https://img.shields.io/packagist/v/einar-hansen/http-client-factory.svg?style=flat-square)](https://packagist.org/packages/einar-hansen/http-client-factory)
[![Total Downloads](https://img.shields.io/packagist/dt/einar-hansen/http-client-factory.svg?style=flat-square)](https://packagist.org/packages/einar-hansen/http-client-factory)

This repository holds the interface for new http factories that return a [PSR-18 (HTTP Client)][psr-url] client.

Note that this is not a HTTP Client Factory implementation. For an example, checkout the [Guzzle Client Factory][guzzle-client-url]

The installable [package][package-url] and [dependents][implementation-url] are listed on Packagist.

[psr-url]: https://www.php-fig.org/psr/psr-18
[package-url]: https://packagist.org/packages/einar-hansen/http-client-factory
[guzzle-client-url]: https://packagist.org/packages/einar-hansen/guzzle-client-factory
[implementation-url]: https://packagist.org/packages/einar-hansen/http-client-factory/dependents

## Installation
```bash
composer require einar-hansen/http-client-factory
```

## Testing
```bash
# Install packages
docker run --rm --interactive --tty --volume $(pwd):/app composer install

# Run code style formatting and static analysis
docker run -it -v $(pwd):/app  php:8.1-alpine /app/vendor/bin/pint /app
docker run -it -v $(pwd):/app  php:8.1-alpine /app/vendor/bin/phpstan --level=9 analyse /app/src
```

## License
The MIT License (MIT).
