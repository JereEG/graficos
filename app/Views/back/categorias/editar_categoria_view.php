
<div class="container-fluid p-4 ">

    <a class="btn btn-primary" href="<?php echo base_url('/crud_categorias') ?>"><h5>Volver</h5></a>
    <div class="text-center">
        <h4 class="">Editar Categoría</h4>
    </div>
    

    <!-- Validación -->
    <div>
        <!--recuperamos datos con la función Flashdata para mostrarlos-->
        <?= csrf_field(); ?>

        <?php if (session()->getFlashdata('success')) {
            echo "
      <div class='mt-3 mb-3 ms-3 me-3 h4 text-center alert alert-success alert-dismissible'>
      <button type='button' class='btn-close' data-bs-dismiss='alert'></button>" . session()->getFlashdata('success') . "
        </div>";
        } ?>
    </div>

    <?php $validation = \Config\Services::validation(); ?>
    
    

    <div class="d-flex justify-content-center">
        <!-- Inicio del formulario -->
        <form method="post" action="<?php echo base_url('/editar_categoria/' . $categoria['id_categoria']);?>" enctype="multipart/form-data">
            
            <div class="row g-3 p-4 ">

                <div class="col-12">
                    <label for="exampleFormControlInput1" class="form-label">Nombre de la categoría</label>
                    <input required name="nombre-categoria" type="text" class="form-control" value="<?php echo $categoria['nombre_categoria'];?>" placeholder="Bebida">
                    <!-- Error -->
                    
                    <?php if ($validation->getError('nombre-categoria')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('nombre-categoria'); ?>
                        </div>
                    <?php } ?>
                </div>

               
                
            
            <div class="text-center row-12">
                <button class="w-25 btn btn-danger btn-sm" type="reset">Reiniciar</button>
                <button class="w-25 btn btn-primary btn-sm" type="submit">Guardar</button>
            </div>


        </form>
    </div>
</div>