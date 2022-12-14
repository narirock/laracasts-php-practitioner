<?php

$app = [];

$app['config'] = require './config.php';

use database\Connection;
use database\QueryBuilder;

require 'Router.php';
require 'Request.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);