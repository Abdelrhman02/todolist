<?php

namespace App\Controller;

use App\Model\Tasks;

require 'app\Model\Tasks.php';

class TaskController
{
    public function index(): void
    {
        $tasks = Tasks::getAll($_GET['completed'] ?? null);
        extract($tasks);
        require "views/index.view.php";
    }

    public function create(): void
    {
        Tasks::create($_POST);
        header("Location: http://localhost/todolist/");

    }

    public function update(): void
    {
        Tasks::update([
            'completed' => $_GET["completed"]
        ],
            $_GET['id']);

        header("Location: http://localhost/todolist/");
    }

    public function delete(): void
    {
        Tasks::delete($_GET['id']);
        header("Location: http://localhost/todolist/");
    }


}