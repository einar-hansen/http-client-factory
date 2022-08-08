<?php

declare(strict_type=1);

namespace EinarHansen\Http\Factories;

interface ClientWithMiddlewareInterface
{
    /**
     * Add a middleware that should be applied to each request.
     */
    public function addMiddleware(callable $middleware): self;

    /**
     * Get the middlewares to be used with each request.
     *
     * @return array<callable>
     */
    public function getMiddlewares(): array;
}
