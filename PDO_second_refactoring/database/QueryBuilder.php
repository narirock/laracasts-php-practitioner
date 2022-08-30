<?php

class QueryBuilder
{
    protected PDO $pdo;

    public function __construct(PDO $pdo)
    {
    $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}