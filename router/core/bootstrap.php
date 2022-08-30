<?php

$config = require 'router/config.php';

require './Router.php';
require './database/Connection.php';
require './database/QueryBuilder.php';

return new QueryBuilder(
    Connection::make($config['database'])
);
