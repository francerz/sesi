<?php mostrarStruct('top',['title'=>'Página de prueba']); ?>
<?php mostrarStruct('header'); ?>
<main style='height:100vh; display:flex;justify-content:center; align-items:center;flex-wrap:wrap;'>
    <div class='content-view'>
        <h3>Datos del paciente</h3>
        <h1><?=$cartilla->nombres?> <?=$cartilla->apellido1?> <?=$cartilla->apellido2?></h1>

        <p>Fecha de nacimiento: <?=$cartilla->fechaNacimiento?></p>
        <?php if ($cartilla->tipo_sangre): ?>
        <p>Grupo sanguineo y RH: <span class='relevant'><?=$cartilla->tipo_sangre?></span>
        <?php endif; ?>
    </div>
</main>
<?php mostrarStruct('bottom'); ?>