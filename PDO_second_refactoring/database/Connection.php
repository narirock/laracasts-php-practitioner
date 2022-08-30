<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=dev_laracasts', 'danielhe4rt', '');
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }
}