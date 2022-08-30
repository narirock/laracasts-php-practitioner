<?php

require 'functions.php';
require 'Task.php';

$pdo = Connection();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';
