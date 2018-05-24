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