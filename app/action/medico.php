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
    case 'login':
        login();
        break;
    default:
        http_response_code(405);
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

    redirect('app');
}
function login()
{
    $cliente = new MongoDB\Client(MONGODB_PATH);
    $medicos = $cliente->sesi->medicos;

    $email = $_POST['email'];

    $medico = $medicos->findOne(['email'=>$email]);

    if (empty($medico)) {
        echo "MÉDICO NO EXISTE.";
        return;
    }

    if (password_verify($_POST['password'], $medico->password)) {
        $_SESSION['logged'] = array(
            'tipo' => 'medico',
            'perfil' => $medico,
            'nombre' => $medico->nombres
        );
        redirect('app/medico-home.php');
    }
}