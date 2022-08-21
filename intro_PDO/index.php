<?php

require 'Task.php';
require 'index.view.php';

try {
    $pdo = new PDO('mysql:host=localhost; dbname=dev_laracasts', 'danielhe4rt', '');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

$statement = $pdo->prepare('SELECT * FROM tasks');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($tasks);

