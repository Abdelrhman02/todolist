# PHP TodoList App - MVC Model

This is a PHP TodoList application built using the Model-View-Controller (MVC) architectural pattern. The application
allows you to create, read, update, and delete tasks in a structured manner.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Folder Structure](#folder-structure)
- [Dependencies](#dependencies)
- [Contributing](#contributing)

## Features

- Create new tasks with a title and description.
- Read and view the list of tasks.
- Update tasks by marking them as completed or editing their details.
- Delete tasks.
- Filter Tasks Using MySQL.
- User-friendly interface.

## Installation

Follow these steps to set up the PHP TodoList app on your local development environment:

1. Clone the repository:
   ```
   https://github.com/Abdelrhman02/todolist.git
   ```
2. Create a MySQL database for the application (you can use phpMyAdmin or a similar tool). Update the database
   credentials in `.env`.

3. Create a Table called `tasks` with 3 column id, description, completed.

4. run `composer install`.

5. Start your web server and access the application in your web browser.

## Usage

1. Open your web browser and navigate to the application URL.

2. You will be presented with the TodoList application interface.

3. Create new tasks by clicking the "Add Task" button and filling in the task details.

4. View and manage your tasks using the provided options.

5. Enjoy a clean and efficient way to manage your tasks!

## Folder Structure

The project follows the MVC architectural pattern, which separates the application into three main folders:

- **app**: Contains the core application files.
    - `controllers`: Handles user input and communicates with the model and view.
    - `models`: Manages data and business logic.
- **views**: Contains public assets such as CSS, JavaScript, and images.

- **config.php**: Stores configuration files, including database settings and routes.

## Dependencies

The application uses the following technologies and libraries:

- PHP
- MySQL (or your preferred database)
- HTML, CSS, JavaScript
- Bootstrap (for styling)

## Contributing

Contributions to this project are welcome! If you have any improvements or bug fixes to propose, please follow these
steps:

1. Fork the repository.

2. Create a new branch for your feature or bug fix.

3. Make your changes and commit them with descriptive messages.

4. Push your changes to your forked repository.

5. Create a pull request to the original repository.

