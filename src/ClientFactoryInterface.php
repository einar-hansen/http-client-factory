<?php

declare(strict_type=1);

namespace EinarHansen\Http\Factories;

use Psr\Http\Client\ClientInterface;

interface ClientFactoryInterface
{
    public function __construct();

    public static function new(): static;

    public function getBaseUri(): string;

    public function setBaseUri(string $uri): self;

    public function getTimeout(): int;

    public function setTimeout(int $timeout): self;

    public function addHeader(string $key, string $value): self;

    /**
     * Getter for headers to be used with each request.
     *
     * @return array<string, string>
     */
    public function getHeaders(): array;

    public function create(): ClientInterface;
}
