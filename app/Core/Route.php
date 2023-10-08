<?php

namespace App\Core;


use App\Controller\TaskController;

class Route
{
    private static array $routes = [];
    public array $get;
    public array $post;

    /**
     * @return Route
     */
    public static function factory(): Route
    {
        return new self;
    }

    /**
     * @param $uri
     * @param $action
     * @return $this
     */
    public function get($uri, $action): static
    {
        $this->get[$uri] = $action;

        return $this;
    }

    /**
     * @param $uri
     * @param $action
     * @return $this
     */
    public function post($uri, $action): static
    {
        $this->post[$uri] = $action;
        return $this;
    }

    /**
     * @param string $uri
     * @param string $method
     * @return void
     */
    public function resolve(string $uri, string $method): void
    {
        if (!array_key_exists($uri, $this->{$method})) {
            echo "Page Is Not Found";
            return;
        }

        $this->action(...$this->{$method}[$uri]);
    }

    public function action(string $controller, string $method): void
    {
        $controller = new $controller;
        $controller->{$method}();
    }
}