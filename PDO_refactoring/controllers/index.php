<?php

require 'PDO_refactoring/core/bootstrap.php';
require 'PDO_refactoring/Task.php';

$tasks = $app['database']->selectAll('tasks');

var_dump($tasks);

require 'PDO_refactoring/views/index.view.php';
