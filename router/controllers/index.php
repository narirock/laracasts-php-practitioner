<?php

require_once("core/bootstrap.php");

$tasks = $query->selectAll('tasks');

require "views/index.view.php";
