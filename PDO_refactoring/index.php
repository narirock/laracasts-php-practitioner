<?php

$query = require 'bootstrap.php';

require 'Task.php';
require 'index.view.php';

$tasks = $query->selectAll('tasks');

var_dump($tasks);

