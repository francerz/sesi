<?php include '../config.php'; ?>
<?php mostrarStruct('top',['title'=>'Captura de vacuna']); ?>
<?php mostrarStruct('header'); ?>
<main>
    <div class='content-view'>
        <h1>Capturar de vacuna</h1>
        <form class='form flex' method='POST' action='app/action/vacuna.php?action=insertar'>
        
          <div class='input w3'>
            <label for='txtVacuna'>Vacuna</label>
            <input id='txtVacuna' name='vacuna' type='text' required autofocus/>
          </div>

          <div class='input w3'>
            <label for='txtEnfermedadPreviene'>Enfermedad que previene</label>
            <input id='txtEnfermedadPreviene' name='enfermedad' type='text' required />
          </div>

          <div class='input w3'>
            <label for='txtDosis'>Dosis</label>
            <input id='txtDosis' name='dosis' type='text' required />
          </div>

          <div class='input w3'>
            <label for='txtFrecuencia'>Frecuencia</label>
            <input id='txtFrecuencia' name='frecuencia' type='number' required/>
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