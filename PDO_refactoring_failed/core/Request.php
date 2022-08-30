<?php

class Request
{

    public static function uri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }
}