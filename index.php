<?php

use App\Core\Request;
use App\Core\Route;
use App\Controller\TaskController;

require '__init.php';


Route::factory()
    ->get('', [TaskController::class, 'index'])
    ->post('task/create', [TaskController::class, 'create'])
    ->get('task/update', [TaskController::class, 'update'])
    ->get('task/delete', [TaskController::class, 'delete'])
    ->resolve(Request::getUri(), Request::getMethod());