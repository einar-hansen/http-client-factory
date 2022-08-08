<?php

declare(strict_type=1);

namespace EinarHansen\Http\Factories;

use Psr\Http\Client\ClientInterface;

interface ClientFactoryInterface
{
    public function __construct();

    /**
     * Create a new instance of the factory.
     */
    public static function new(): static;

    /**
     * Get the base url for each request.
     */
    public function getBaseUri(): string;

    /**
     * Set the base url for each request.
     */
    public function setBaseUri(string $uri): self;

    /**
     * Get the timeout in seconds.
     */
    public function getTimeout(): int;

    /**
     * Set the timeout for each request, in seconds.
     */
    public function setTimeout(int $timeout): self;

    /**
     * Push a middleware the the middleware stack.
     */
    public function addHeader(string $key, string $value): self;

    /**
     * Getter for headers to be used with each request.
     *
     * @return array<string, string>
     */
    public function getHeaders(): array;

    /**
     * Create the client that has been configured.
     */
    public function create(): ClientInterface;
}
