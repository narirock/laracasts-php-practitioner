<?php

use database\Connection;
use database\QueryBuilder;

require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(
    Connection::make()
);
