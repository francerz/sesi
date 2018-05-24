<?php
if (empty($_GET['action'])) {
    exit;
}

require '../config.php';
require ROOT_DIR.'/vendor/autoload.php';

switch($_GET['action']) {
    case 'buscar-curp':
        buscarPorCurp();
        break;
    default:
        http_response_code(405);
        // exit;
}
// buscarPorCurp();


function buscarPorCurp()
{
    $cliente = new MongoDB\Client(MONGODB_PATH);
    $cartillas = $cliente->sesi->usuarios;

    $curp = $_GET['curp'];

    $cartilla = $cartillas->findOne(['curp'=>$curp]);

    mostrarPage('cartilla-light',['cartilla'=>$cartilla]);
}