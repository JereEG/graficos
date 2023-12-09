
    <footer class="pie_pagina p-2 m-2">
        <div class="row text-center">
            <div class="col-4 text-justify">
                <h5>Navegación</h5>
                <ul class="nav flex-column">
                    <li class=""><a href="<?php echo base_url('/');?>" class="nav-link text-body-secondary">Pagina
                            Principal</a>
                    </li>
                    <li class="nav-item "><a href="<?php echo base_url('quienes_somos');?>"
                            class="nav-link text-body-secondary">¿Quiénes somos?</a></li>
                    <li class="nav-item "><a href="<?php echo base_url('catalogo');?>"
                            class="nav-link text-body-secondary">Catalogo</a></li>
                </ul>
            </div>

            <div class="col-4 text-justify">
                <h5>Redes Sociales</h5>
                <ul class="nav flex-column">
                    <p>
                        <a href="<?php echo base_url('sitio_en_construccion');?>" class="text-decoration-none">
                            Síguenos en Facebook <img class="img-fluid" src="<?php echo base_url('assets/img/facebook.png')?>"
                                style="color:#3b5998" class="bi" width="24" height="24">
                        </a>
                    </p>
                    <p>
                        <a href="<?php echo base_url('sitio_en_construccion');?>" class="text-decoration-none">
                            Síguenos en Instagram <img class="img-fluid" src="<?php echo base_url('assets/img/instagram.png')?>" class="bi"
                                width="24" height="24">
                        </a>
                    </p>
                    <p>
                        <a href="<?php echo base_url('sitio_en_construccion');?>" class="text-decoration-none">
                            Síguenos en Twitter <img class="img-fluid" src="<?php echo base_url('assets/img/twitter.png')?>"
                                style="color:#00acee" class="bi" width="24" height="24">
                        </a>
                    </p>

                </ul>
            </div>

            <div class="col-4 text-justify align-items-center">
                <h5>Envianos tu consulta</h5>
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="<?php echo base_url('contacto');?>"
                            class="nav-link text-body-secondary">Contáctanos</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center">
            <p>© 2023 Kiosko Online. Todos los derechos reservados.
                <a href="<?php echo base_url('terminos_y_condiciones');?>">Términos y Usos</a>
            </p>
        </div>


    </footer>

<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js');?>"></script>


</body>

</html>