<?php

  function consultarRecomendaciones(){
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
  
$cadena='<thead>
	    <tr>
	      <th scope="col">Enfermedad</th>
	      <th scope="col">Recomendacion</th>
	    </tr>
      </thead>
      <tbody>
	  <tr>';

  foreach ($resultado as $recomendaciones) {
      if($recomendaciones->edadminima>=$edad){
          $cadena=$cadena.'<td scope="row" data-label="Column 1">'.$recomendaciones->enfermedad.'</td>
          <td scope="row" data-label="Column 1">'.$recomendaciones->enfermedad.'</td>';
        
     }
   };
   $cadena=$cadena.' </tr></tbody>';
   return $cadena;
  }

?>