<?php
use App\App;
function home(): string
{
    return trim(App::get('config')['app']['home_url'], '/');
}

function redirect($to): void
{
    header("Location : {$to}");
}

function redirectHome(): void
{
    redirect(home());
}

function back(): void
{
    redirect($_SERVER['HTTP_REFERER'] ?? home());
}

function view(string $path, ?array $data = null): void
{
    ($data != NULL) ? extract($data) : NULL;
    require "views/{$path}.view.php";
}