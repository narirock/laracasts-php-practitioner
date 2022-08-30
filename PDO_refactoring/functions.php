<?php

function Connection(): PDO
{
    try {
        return new PDO('mysql:host=localhost;dbname=dev_laracasts', 'danielhe4rt', '');
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}

function fetchAllTasks(PDO $pdo): array
{
    $statement = $pdo->prepare('SELECT * FROM tasks');
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}