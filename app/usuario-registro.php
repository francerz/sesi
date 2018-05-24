<?php include '../config.php'; ?>
<?php mostrarStruct('top',['title'=>'Registro de usuario']); ?>
<?php mostrarStruct('header'); ?>
<main>
<div class='content-view'>
        <h1>Registro de usuario</h1>
        <form class='form flex' method='POST' action='app/action/usuario.php?action=insertar'>
        
                  <div class='input w2'>
                      <label for='txtNombres'>Nombre(s)</label>
                      <input id='txtNombres' name='nombres' type='text' required autofocus/>
                  </div>
 
                  <div class='input w2'>
                      <label for='txtPrimerApellido'>Primer apellido</label>
                      <input id='txtPrimerApellido' name='apellido1' type='text' required />
                  </div>

                  <div class='input w2'>
                      <label for='txtSegundoApellido'>Segundo apellido</label>
                      <input id ='txtSegundoApellido' name='apellido2' type='text' required />
                  </div>

                 <div class='input w6'>
                 <label for='txtCorreo'>Correo</label>
                      <input id='txtCorreo' name='email' type='email' required />
                 </div>
                 
                 <div class='input w3'>
                      <label for='txtContraseña'>Contraseña</label>
                      <input id='txtContraseña' name='password' type='password' required />
                  </div>

                   <div class='input w3'>
                      <label for='txtConfirmarContraseña'>Confirmar contraseña</label>
                      <input id='txtConfirmarContraseña' name='confirmarContraseña' type='password' required/>
                  </div>

                   <div class='input w3'>
                      <label for='txtCurp'>Curp</label>
                      <input id='txtCurp'name='curp' type='text' required />
                  </div>

                  <div class='input w3'>
                      <label for='txtFechaNacimiento'>Fecha de nacimiento</label>
                      <input id='txtFechaNacimiento' name='fechaNacimiento' type='date'/>
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