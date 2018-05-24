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
    $recomendaciones = $cliente->sesi->recomendaciones;

    $resultado = $recomendaciones->insertOne(array(
        'nombreestudio' => $_POST['nombreestudio'],
        'enfermedad' => $_POST['enfermedad'],
        'edadminima' => $_POST['edadminima'],
        'genero' => $_POST['genero'],
        'recomendacion' => $_POST['recomendacion']
    ));

    header('http://localhost/eneit/sesi/app/recomendacion-registro.php');
}
