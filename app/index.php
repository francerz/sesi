<?php include '../config.php'; ?>
<?php mostrarStruct('top',['title'=>'Página de prueba']); ?>
<?php mostrarStruct('header'); ?>
<main style='height:100vh;display:flex;justify-content:center;align-items:center;flex-flow:row'>
    <div class='content-view' style='text-align:center'>
        <h1>Bienvenido a S.E.S.I.</h1>
        <img src='<?=href('img/logo-big.png')?>' style='max-height:60vh' />
        <br/><br/>
        <div>
            <a class='button' href='<?=href('app/usuario-login.php')?>'>Usuario</a>
            <a class='button cta' href='<?=href('app/medico-login.php')?>'>Médico</a>
        </div>
    </div>
</main>
<?php mostrarStruct('bottom'); ?>