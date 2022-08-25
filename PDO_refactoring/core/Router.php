<?php

class Router
{
    protected array $routes = [];

    public static function load($file): static
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function define($routes): void
    {
        $this->routes = $routes;
    }

    /**
     * @throws Exception
     */

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No route defined for this URI.');
    }
}