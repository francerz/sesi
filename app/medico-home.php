<?php include '../config.php'; ?>
<?php mostrarStruct('top',['title'=>'Página de prueba']); ?>
<?php mostrarStruct('header'); ?>
<main>
    <div class='content-view'>
        <br>
        <h1>Bienvenido <?=$_SESSION['logged']['nombre']?></h1>
        <br>
    </div>
    <div class='content-view'>
        <div class='panel'>
            <h2>Buscar por CURP</h2>
            <form class='form' method='GET' action='app/cartilla.php'>
                <input type='hidden' name='action' value='buscar-curp' />
                <div class='input'>
                    <div class='fixed-input name:curp'>
                        <input type='text' pattern='[A-Z]' autofocus />
                        <input type='text' pattern='[A-Z]' />
                        <input type='text' pattern='[A-Z]' />
                        <input type='text' pattern='[A-Z]' />
                        <input type='text' pattern='[0-9]' />
                        <input type='text' pattern='[0-9]' />
                        <input type='text' pattern='[0-1]' />
                        <input type='text' pattern='[0-9]' />
                        <input type='text' pattern='[0-3]' />
                        <input type='text' pattern='[0-9]' />
                        <input type='text' pattern='[HM]' />
                        <input type='text' pattern='[A-Z]' />
                        <input type='text' pattern='[A-Z]' />
                        <input type='text' pattern='[A-Z]' />
                        <input type='text' pattern='[A-Z]' />
                        <input type='text' pattern='[A-Z]' />
                        <input type='text' pattern='[A0-9]' />
                        <input id='txt2' type='text' pattern='[0-9]' />
                    </div>
                </div>
                <br/>
                <div class='button-row'>
                    <button type='submit' class='cta'>Buscar</button>
                </div>
            </form>
        </div>
    </div>
</main>