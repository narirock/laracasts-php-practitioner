<?php

use database\Connection;
use database\QueryBuilder;

$config = require 'config.php';


include "Router.php";
require "database/Connection.php";
include "database/QueryBuilder.php";


return new QueryBuilder(
    Connection::make($config['database'])
);
