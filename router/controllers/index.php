<?php

$query = require ('../core/bootstrap.php');;
$tasks = $query->selectAll('tasks');

require '../views/index.view.php';
