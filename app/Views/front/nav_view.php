<!--Barra de navegación-->

<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
//var_dump($perfil);
//var_dump($session);
//exit();
?>


<div class="container-fluid d-flex justify-content-center barra_navegacion ">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid barra_navegacion">

            <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url() ?>/public/img/logo.png" alt="logo" width="100px"></a>
            </div>
        </div>
    </nav>


</div>