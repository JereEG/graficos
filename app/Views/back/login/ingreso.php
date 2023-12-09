<div class="container-fluid d-flex justify-content-center">
  <!--recuperamos datos con la función Flashdata para mostrarlos-->
  <?php if (session()->getFlashdata('success')) : ?>
    <div class='text-center w-50 alert alert-success alert-dismissible fade show' role='alert'>
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      <?= session()->getFlashdata('success') ?>
  </div>
  <?php endif ?>
  
</div>
<!-- php $validación = \Config\Services::validación(); Esto carga automáticamente el archivo Config\Validation que contiene configuraciones para incluir múltiples conjuntos de reglas -->
<?php $validation = \Config\Services::validation(); ?>



<div class="container-fluid mt-1 mb-1 d-flex justify-content-center">
  <div class="card p-4 col-md-7  col-lg-8">

    <h4 class="mb-3">Ingresar usuario</h4>
    <!-- envio de datos a la ruta /enviar-login ******* -->
    <form method="post" action="<?php echo base_url('/enviar-form-login') ?>">

      <div class="row g-3 p-4 ">


        <div class="col-sm-6">
          <label for="email" class="form-label">Correo electrónico</label>
          <input name="email" type="email" class="form-control" value="<?php echo set_value('email')?>"
            placeholder="fulanito@ejemplo.com">
          <!-- Error -->
          <?php if ($validation->getError('email')) { ?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('email'); ?>
          </div>
          <?php } ?>
        </div>
        

        <!--<div class="">
          <label for="username" class="form-label">Nombre de usuario</label>
          <div class="input-group has-validation">
            <span class="input-group-text">@</span>
            <input type="text" class="form-control" id="username" placeholder="Nombre de usuario" required="">
            <div class="invalid-feedback">
              Su nombre de usuario es obligatorio.
            </div>
          </div>
        </div>-->

        <!--<div class="col-sm-6">
          <label for="usuario" class="form-label">Nombre de usuario</label>
          <input type="text" name="usuario" value="<?php echo set_value('usuario')?>" class="form-control"
            placeholder="Nombre de usuario">
          <!-- Error -->
          <!--<?php if ($validation->getError('usuario')) { ?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('usuario'); ?>
          </div>
          <?php } ?>
        </div>-->
        

        <div class="col-sm-6">
          <label for="pass" class="form-label">Contraseña</label>
          <input name="pass" type="password" class="form-control" placeholder="Contraseña (mínimo 5 caracteres)">
          <!-- Error -->
          <?php if ($validation->getError('pass')) { ?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('pass'); ?>
          </div>
          <?php } ?>
        </div>



      </div>
      
      <div class="text-center">
        <button class="w-25 btn btn-danger btn-sm" type="reset">Cancelar</button>
        <button class="w-25 btn btn-primary btn-sm" type="submit">Ingresar</button>
      </div>


    </form>
  </div>

</div>