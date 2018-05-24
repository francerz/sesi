<?php
if (empty($_GET['action'])) {
    exit;
}

require '../../config.php';
require ROOT_DIR.'/vendor/autoload.php';

switch($_GET['action']) {
    case 'insertar':
        insertar();
        break;
    default:
        exit;
}

function insertar()
{
    $cliente = new MongoDB\Client(MONGODB_PATH);
    $medicos = $cliente->sesi->medicos;

    $resultado = $medicos->insertOne(array(
        'nombres' => $_POST['nombres'],
        'apellido1' => $_POST['apellido1'],
        'apellido2' => $_POST['apellido2'],
        'cedula' => $_POST['cedula'],
        'titulo' => $_POST['titulo'],
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    ));

    redirect('app/inicio.php');
}