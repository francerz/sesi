<?php
define('BASE_URL','http://localhost/eneit/sesi/');
define('ROOT_DIR',__DIR__);

define('MONGODB_PATH','mongodb://localhost:27017');

function mostrarStruct($nombre, $vars = array()) {
    extract($vars);
    include ROOT_DIR."/struct/{$nombre}.php";
}
function mostrarTemplate($nombre,$vars = array()) {
    extract($vars);
    include ROOT_DIR."/templates/{$nombre}.php";
}
function redirect($path)
{
    if (preg_match('/[a-z]+:.*/i', $path)) {
        header("Location: {$path}");
    } elseif (strpos($path, '//') == 0) {
        $path = ltrim($path, '/');
        header("Location: {$_SERVER['HTTP_HOST']}/{$path}");
    } else {
        $path = ltrim($path, '/');
        header("Location: ".BASE_URL."{$path}");
    }
    exit;
}