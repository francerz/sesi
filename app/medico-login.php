<?php include '../config.php'; ?>
<?php mostrarStruct('top',['title'=>'Página de prueba']); ?>
<?php mostrarStruct('header'); ?>
<main>
    <div class='content-view' style='max-width: 300px'>
        <h1>Ingreso de médico</h1>
        <form class='form flex' method='POST' action='app/action/medico.php?action=login'>
            <div class='input w6'>
                <label for='txtEmail'>Correo electrónico:</label>
                <input id='txtEmail' type='email' name='email' required autofocus />
            </div>
            <div class='input w6'>
                <label for='txtPassword'>Contraseña:</label>
                <input id='txtPassword' type='password' name='password' required />
            </div>
            <div class='button-row'>
                <button type='submit' class='cta'>Acceder</button>
            </div>
        </form>
        <a href='<?=href('app/medico-registro.php')?>'>Crear cuenta</a>
    </div>
</main>
<?php mostrarStruct('bottom'); ?>