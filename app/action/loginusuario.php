<?php
require '../../config.php';
require ROOT_DIR.'/vendor/autoload.php';
  $cliente = new MongoDB\Client(MONGODB_PATH);
  $coleccionNombre="usuarios";
  $usuarios = $cliente->sesi->$coleccionNombre;

$password=$_POST['password'];
  //$email="criosmancilla@gmail.com";
$email=$_POST['email'];
$resultado = $usuarios->findOne(
    [
        'email' => $email
    ]
);

if(!$resultado){
    echo "Usuario no encontrado";
    return;
}

if(password_verify($password,$resultado->password)){
    $_SESSION['logged']=array(
     'perfil'=>$resultado,
     'nombre'=>$resultado->nombres
    );
    echo "Logiado";
}

?>