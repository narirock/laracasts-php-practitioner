<?php

require 'PDO_refactoring_failed/core/bootstrap.php';
require 'PDO_refactoring_failed/Tasks.php';

$tasks = $app['database']->selectAll('tasks');

var_dump($tasks);

require 'PDO_refactoring_failed/views/index.view.php';
