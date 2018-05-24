<?php include '../config.php'; ?>
<?php mostrarStruct('top',['title'=>'Página de prueba']); ?>
<?php mostrarStruct('header'); ?>
<main>
    <div class='content-view'>
        <h1>Registro de médico</h1>
        <form class='form flex' method='POST' action='app/action/medico.php?action=insertar'>
            <div class='input w2'>
                <label for='txtNombres'>Nombre(s):</label>
                <input id='txtNombres' type='text' name='nombres' required autofocus />
            </div>
            <div class='input w2'>
                <label for='txtApellido1'>Primer apellido:</label>
                <input id='txtApellido1' type='text' name='apellido1' required />
            </div>
            <div class='input w2'>
                <label for='txtApellido2'>Segundo apellido:</label>
                <input id='txtApellido2' type='text' name='apellido2' required />
            </div>
            <div class='input w1'>
                <label for='txtCedula'>No. Cédula:</label>
                <input id='txtCedula' type='text' name='cedula' required />
            </div>
            <div class='input w5'>
                <label for='txtTitulo'>Título:</label>
                <input id='txtTitulo' type='text' name='titulo' required />
            </div>
            <div class='input w2'>
                <label for='txtEmail'>Correo electrónico:</label>
                <input id='txtEmail' type='email' name='email' required />
            </div>
            <div class='input w2'>
                <label for='txtPassword'>Contraeña de acceso:</label>
                <input id='txtPassword' type='password' name='password' required />
            </div>
            <div class='input w2'>
                <label for='txtPassword2'>Confirmar contraeña:</label>
                <input id='txtPassword2' type='password' required />
            </div>
            <div class='button-row'>
                <button type='submit' class='cta'>Registrar</button>
            </div>
        </form>
    </div>
</main>
<?php mostrarStruct('bottom'); ?>