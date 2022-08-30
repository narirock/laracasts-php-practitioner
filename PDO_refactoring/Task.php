<?php

class Task
{
    public string $description;
    public string $due;
    public string $assigned_to;
    public bool $status = false;

//    public function __construct($description, $due, $assigned_to, $status)
//    {
//        $this->description = $description;
//        $this->due = $due;
//        $this->assigned_to = $assigned_to;
//        $this->status = $status;
//    }
//
//    public function statusCompleted(): bool
//    {
//        return $this->status = true;
//    }
}
//
//$tasks = [
//    new Task('Finish the PHP Practitioner course', 'August 31', 'Bellini', false),
//    new Task('Clean the kitchen', 'Tomorrow', 'NexTur', false)
//];
//
//$tasks[1]->statusCompleted();
//
//var_dump($tasks);