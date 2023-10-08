<?php

namespace App\App;

require 'App.php';
function home(): string
{
    return trim(App::get("config")['app']["home_url"], '/'); // will retrun http://localhost/phptutorialPartTwo
}

function redirect($to): void
{
    header("Location: {$to}");   // will take u to $location
}

function redirect_home(): void
{
    redirect(home());
}

function back(): void
{
    redirect($_SERVER["HTTP_REFERER"] ?? home());
}

function view(string $path, ?array $data = null): void
{
    ($data != NULL) ? extract($data) : null;
    require "views/{$path}.view.php";
}