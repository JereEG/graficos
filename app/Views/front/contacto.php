<section class="container-fluid d-flex justify-content-center">
    <div class="row d-flex justify-content-center">
        <div class="text-center">
            <img src="<?php echo base_url('assets/img/kiosco_online.png');?>" class="img-fluid">
            <h1>Contacta a Kiosko Online</h1>
            <p>Razón social: <em>Kioscko Online S.A.</em></p>
            <p>Domicilio legal: <em>Los Atacamas 4244, Corrientes Capital, Argentina</em></p>
            <p>Teléfonos de contacto:</p>

            <li>Teléfono celular: <em>3794906261</em></li>
            <li>Teléfono fijo: <em>3794414779</em></li>

        </div>
        <div class="text-center">
            <h4>Redes Sociales</h4>
            <ul class="nav flex-column">
                <p>
                    <a href="<?php echo base_url('sitio_en_construccion');?>" class="text-decoration-none">
                        Contáctanos en Facebook <img class="img-fluid" src="assets\img\facebook.png"
                            style="color:#3b5998" class="bi" width="24" height="24">
                    </a>
                </p>
                <p>
                    <a href="<?php echo base_url('sitio_en_construccion');?>" class="text-decoration-none">
                        Contáctanos en Instagram <img class="img-fluid" src="assets\img\instagram.png" class="bi"
                            width="24" height="24">
                    </a>
                </p>
                <p>
                    <a href="<?php echo base_url('sitio_en_construccion');?>" class="text-decoration-none">
                        Contáctanos en Twitter <img class="img-fluid" src="assets\img\twitter.png" style="color:#00acee"
                            class="bi" width="24" height="24">
                    </a>
                </p>

            </ul>
        </div>

        <div class="p-4 d-flex justify-content-center">
            <div class="card p-2 justify-content-center">
                <!-- Validación -->
                <div>
                    <!--recuperamos datos con la función Flashdata para mostrarlos-->
                
                
                    <?php if (session()->getFlashdata('success')) {
                                        echo "
                                  <div class='mt-3 mb-3 ms-3 me-3 h4 text-center alert alert-success alert-dismissible'>
                                  <button type='button' class='btn-close' data-bs-dismiss='alert'></button>" . session()->getFlashdata('success') . "
                                    </div>";
                                    } ?>
                </div>
                
                <?php $validation = \Config\Services::validation(); ?>
                
                <h4 class="text-center">Envíanos tu consulta</h4>
                <form method="post" action="<?php echo base_url('/enviar_consulta') ?>">
                
                    <div class="row g-3 p-4">
                
                        <div class="col-sm-6">
                            <label for="nombre" class="form-label">Nombre</label>
                            <!-- ingreso sel nombre-->
                            <input name="nombre" type="text" class="form-control" placeholder="Nombre...">
                            <!-- Error -->
                            <?php if ($validation->getError('nombre')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('nombre'); ?>
                            </div>
                            <?php } ?>
                        </div>
                
                        <div class="col-sm-6">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" name="apellido" class="form-control" placeholder="Apellido...">
                            <!-- Error -->
                            <?php if ($validation->getError('apellido')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('apellido'); ?>
                            </div>
                            <?php } ?>
                        </div>
                
                        <div class="col-sm-6">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input name="email" type="email" class="form-control" placeholder="fulanito@ejemplo.com">
                            <!-- Error -->
                            <?php if ($validation->getError('email')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('email'); ?>
                            </div>
                            <?php } ?>
                        </div>
                
                
                
                        <div class="col-sm-6">
                            <label for="telefono" class="form-label">Numero de teléfono</label>
                            <input type="number" name="telefono" placeholder="3794906261">
                            <!-- Error -->
                            <?php if ($validation->getError('numero_telefonico')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('numero_telefonico'); ?>
                            </div>
                            <?php } ?>
                        </div>
                
                
                        <div class="col-12 col-sm-6">
                            <label for="consulta" class="form-label">Escribe tu consulta aquí</label>
                            <div>
                                <textarea maxlength="256" name="consulta" cols="50" rows="5"></textarea>
                            </div>
                
                            <!-- Error -->
                            <?php if ($validation->getError('consulta')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('consulta'); ?>
                            </div>
                            <?php } ?>
                        </div>
                
                
                    </div>
                    <div class="text-center">
                        <button class="w-25 btn btn-danger btn-sm" type="reset">Cancelar</button>
                        <button class="w-25 btn btn-primary btn-sm" type="submit">Enviar</button>
                
                
                    </div>
                
                
                </form>

            </div>
       </div>

    </div>
</section>