<?php

declare(strict_type=1);

namespace EinarHansen\Http\Factories;

interface ClientWithMiddlewareInterface
{
    /**
     * Get the middlewares to be used with each request.
     *
     * @return array<callable>
     */
    public function addMiddleware(callable $middleware): self;

    /**
     * Get the middlewares to be used with each request.
     *
     * @return array<callable>
     */
    public function getMiddlewares(): array;
}
