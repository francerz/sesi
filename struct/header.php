<header>
    <div id='nav-bar'>
        <div class='content-view'>
            <?php if (empty($_SESSION['logged'])): ?>
            <?php mostrarStruct('header_nav'); ?>
            <?php elseif ($_SESSION['logged']['tipo'] == 'medico'): ?>
            <?php mostrarStruct('header_medico'); ?>
            <?php else: ?>
            <?php mostrarStruct('header_usuario'); ?>
            <?php endif; ?>
        </div>
    </div>
</header>