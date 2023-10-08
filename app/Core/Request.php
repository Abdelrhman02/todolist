<?php

namespace App\Core;

class Request
{


    /**
     * @return string
     */
    public static function getUri(): string
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = str_replace('todolist', '', $uri);

        return trim($uri, '/');
    }

    public static function getMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}