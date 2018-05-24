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
    $vacunas = $cliente->sesi->vacunas;

    $resultado = $vacunas->insertOne(array(
        'vacuna' => $_POST['vacuna'],
        'enfermedad' => $_POST['enfermedad'],
        'dosis' => $_POST['dosis'],
        'frecuencia' => $_POST['frecuencia']
    ));

    header('app/vacuna-registro.php');
}