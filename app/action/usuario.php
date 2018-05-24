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
    $usuarios = $cliente->sesi->usuarios;

    $resultado = $usuarios->insertOne(array(
        'nombres' => $_POST['nombres'],
        'apellido1' => $_POST['apellido1'],
        'apellido2' => $_POST['apellido2'],
        'email' => $_POST['email'],
        'curp' => $_POST['curp'],
        'fechaNacimiento' => $_POST['fechaNacimiento'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    ));

    header('app/usuario-registro.php');
}