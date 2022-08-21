<?php

class Task {
    public $description;
    public $due;
    public $assigned_to;
    public $status = false;

    public function __construct($description, $due, $assigned_to, $status)
    {
        $this->description = $description;
        $this->due = $due;
        $this->assigned_to = $assigned_to;
        $this->status = $status;
    }

    public function statusCompleted()
    {
        return $this->status = true;
    }
}

$tasks = [
    new Task('Finish the PHP Practioner course', 'August 31', 'Bellini', true),
    new Task('Clean the kitchen', 'Tomorrow', 'NexTur', false)
    ];

var_dump($tasks);

require 'index.view.php';