<?php include '../config.php'; ?>
<?php mostrarStruct('top',['title'=>'Registro Recomendaciones']); ?>
<?php mostrarStruct('header'); ?>
<main>
    <div class='content-view'>
        <h1>Registro de recomencaciones</h1>
        <form class='form flex' method='POST' action='app/action/recomendacion.php?action=insertar'>
        
                  <div class='input 3'>
                      <label for='txtNombreEstudio'>Nombre de Estudio</label>
                      <input id='txtNombreEstudio' name='nombreestudio' type='text' required autofocus/>
                  </div>

                  <div class='input w3'>
                      <label for='txtEnfermedad'>Enfermedad</label>
                      <input id='txtEnfermedad' name='enfermedad' type='text' required />
                  </div>

                   <div class='input w2'>
                      <label for='txtEdadMinima'>Edad Minima</label>
                      <input id='txtEdadMinima' name='edadminima' type='number' required />
                  </div>

                 <div class='input w2'>
                      <label for='txtGeneroDestino'>Genero destino</label>
                      <input id='txtGeneroDestino' name='genero' type='text' required />
                  </div>
                  
                  <div class='input w2'>
                      <label for='txtRecomendacion'>Recomendacion</label>
                      <input id='txtRecomendacion' name='recomendacion' type='text' required />
                  </div>
                  <div class='content-view'>
                  <div class='button-row'>
                  <button type='submit' name='action' value='insertar' class='cta'>Registrar</button>
                  </div>
                  </div>
        </form>          
    </div>
</main>
<?php mostrarStruct('bottom'); ?>