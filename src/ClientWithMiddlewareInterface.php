<?php

declare(strict_type=1);

namespace EinarHansen\Http\Factories;

interface ClientWithMiddlewareInterface
{
    public function addMiddleware(callable $middleware): self;

    /**
     * @return array<callable> An array of middleware
     */
    public function getMiddlewares(): array;
}
