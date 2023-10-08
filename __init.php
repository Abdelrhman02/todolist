<?php

use App\Database\DatabaseConnection;
use App\Database\QueryBuilder;
use App\App;

require 'vendor\autoload.php';



App::set('config', require 'config.php');

QueryBuilder::make(
    DatabaseConnection::connection(App::get('config')['Database'])
);