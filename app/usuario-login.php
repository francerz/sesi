<?php include '../config.php'; ?>
<?php mostrarStruct('top',['title'=>'Login usuario']); ?>
<?php mostrarStruct('header'); ?>
<main>
    <div class='content-view'>
        <h1>Login de Usuarios</h1>
     <form class='form flex' method='POST' action='app/action/loginusuario.php'>
        <div class='input w6'>
            <label for='txtCorreo'>Correo</label>
            <input id='txtCorreo' name='email' type='email' required autofocus/>
        </div>

        <div class='input w6'>
           <label for='txtContraseña'>Contraseña</label>
           <input id='txtContraseña' name='password' type='password' required />
        </div>

      <div class='content-view'>
      <div class='button-row'>
        <button type='submit' name='action' value='insertar' class='cta'>Acceder</button>
      </div>
      </div>

     </form>
    </div>
</main>
<?php mostrarStruct('bottom'); ?>