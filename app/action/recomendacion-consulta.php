<?php
require '../../config.php';
require ROOT_DIR.'/vendor/autoload.php';
  $cliente = new MongoDB\Client(MONGODB_PATH);
  $coleccionNombre="recomendaciones";
  $usuarios = $cliente->sesi->$coleccionNombre;

$edad=30;
$genero='Mujer';
$resultado = $usuarios->find(
    [
        'genero' => $genero
    ]
);

if(!$resultado){
    echo "Sin recomendaciones";
    return;
}
?>

<?php

foreach ($resultado as $recomendaciones) {
    if($recomendaciones->edadminima>=$edad){
        echo "
        <h1>".$recomendaciones->enfermedad."</h1><br>".
        "<h3> ".$recomendaciones->recomendacion.'</h3>';
   }
 };

?>