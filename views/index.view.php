<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>TodoList App</title>
    <style>
        .todo-item {
            display: flex !important;
            margin: 8px 0;
            border-radius: 0;
            background-color: #f7f7f7;
        }

        .completed {
            text-decoration: line-through !important;
        }

        .todo-item > .todo-item-remove > a > i {
            visibility: hidden;
        }

        .todo-item:hover > .todo-item-remove > a > i {
            visibility: visible;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card mt-3">
                <div class="card-header p-3">
                    <form action="task/create" method="post">
                        <div class="input-group">
                            <input type="text" name="description" class="form-control" placeholder="Add New Task"
                                   autocomplete="off" required/>
                            <button class="btn btn-success">Add It</button>
                        </div>
                    </form>
                </div>
                <div class="card-body p-3">
                    <ul class="nav nav-pills justify-content-center mb-3">
                        <li class="nav-item">
                            <a href="http://localhost/todolist/" class="nav-link">All</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/todolist?completed=0" class="nav-link">In Progress</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/todolist?completed=1" class="nav-link">Completed</a>
                        </li>
                    </ul>
                    <?php /** @var array $tasks */
                    foreach ($tasks as $task) : ?>
                        <div class="todo-item p-2">
                            <div class="p-1">
                                <a href="task/update?id=<?= $task->id ?>&completed=<?= $task->completed ? 0 : 1 ?>">
                                    <i class="bi fs-5 <?= $task->completed ? 'bi-check-square' : 'bi-clock text-secondary' ?>"></i>
                                </a>
                            </div>
                            <div class="flex-fill m-auto p-2 <?= $task->completed ? 'completed' : '' ?>">
                                <?= $task->description ?>
                            </div>
                            <div class="mb-2 todo-item-remove">
                                <a href="task/delete?id=<?= $task->id ?>" class="todo-item-remove">
                                    <i class="bi-trash text-danger fs-3"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>