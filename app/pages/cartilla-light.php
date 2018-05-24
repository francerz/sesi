<?php mostrarStruct('top',['title'=>'Página de prueba']); ?>
<?php mostrarStruct('header'); ?>
<main>
    <div class='content-view'>
        <h1><?=$cartilla->nombres?> <?=$cartilla->apellido1?> <?=$cartilla->apellido2?></h1>

        <p>Fecha de nacimiento: <?=$cartilla->fechaNacimiento?></p>
        <?php if ($cartilla->tipo_sangre): ?>
        <p>Grupo sanguineo y RH: <span class='relevant'><?=$cartilla->tipo_sangre?></span>
        <?php endif; ?>
    </div>
</main>
<?php mostrarStruct('bottom'); ?>