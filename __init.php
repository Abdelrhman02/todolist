<?php

use App\Database\DatabaseConnection;
use App\Database\QueryBuilder;
use App\Core\Request;
use App\Core\Route;
use App\Controller\TaskController;

require 'app/Database/DatabaseConnection.php';
require 'app/Database/QueryBuilder.php';
require 'app/Core/Route.php';
require 'app/Core/Request.php';
require 'app\helper.php';
require 'app\Controller\TaskController.php';

QueryBuilder::make(
    DatabaseConnection::connection()
);

Route::factory()
    ->get('', [TaskController::class, 'index'])
    ->post('create/task', [TaskController::class, 'index'])
    ->post('update/task', [TaskController::class, 'update'])
    ->post('delete/task', [TaskController::class, 'delete'])
    ->resolve(Request::getUri(), Request::getMethod());



