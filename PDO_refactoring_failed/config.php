<?php

return [
  'database' => [
      'name' => 'dev_laracasts',
      'username' => 'danielhe4rt',
      'password' => '',
      'connection' => 'mysql:host=localhost',
      'options' => [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ]
  ]
];