<?php
session_start();
define('BASE_URL','http://localhost/eneit/sesi/');
define('ROOT_DIR',__DIR__);

define('MONGODB_PATH','mongodb://localhost:27017');

function mostrarStruct($nombre, $vars = array()) {
    extract($vars);
    include ROOT_DIR."/struct/{$nombre}.php";
}
function mostrarPage($nombre, $vars = array()) {
    extract($vars);
    include ROOT_DIR."/app/pages/{$nombre}.php";
}
function mostrarTemplate($nombre,$vars = array()) {
    extract($vars);
    include ROOT_DIR."/templates/{$nombre}.php";
}
function parse_path($path)
{
    if (preg_match('/[a-z]+:.*/i', $path)) {
        return $path;
    } elseif (strpos($path, '//') === 0) {
        $path = ltrim($path, '/');
        $schema = 'http';
        return "{$schema}://{$_SERVER['HTTP_HOST']}/{$path}";
    } else {
        $path = ltrim($path, '/');
        return rtrim(BASE_URL,'/')."/{$path}";
    }
}
function redirect($path)
{
    header("Location: ".parse_path($path));
    exit;
}
function href($path)
{
    return parse_path($path);
}