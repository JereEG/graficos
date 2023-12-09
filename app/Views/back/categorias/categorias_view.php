<div class="container-fluid justify-content-center">

    <div class="text-center">
        <h4>CRUD de Categorías</h4>
    </div>
    <div class="text-center p-2">
    
        <button class="w-25 btn btn-primary btn-sm" onclick="location.href='<?php echo base_url('categoria_form'); ?>'">Agregar
            nueva categoría</button>
        <button class="w-25 btn btn-primary btn-sm"
            onclick="location.href='<?php echo base_url('categoria_eliminados'); ?>'">Ver categorías eliminadas</button>
    
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

    
            <div class="text-center p-4">
                <table class="table table-bordered table-hover table-striped table-striped ml-3">
                    <tr>
                        <td>ID</td>
                        <td>Nombre de categoría</td>
                        <td>Eliminado</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                    </tr>
                    <?php foreach ($categorias as $categoria) : ?>
                        <tr>
                        <?php if ($categoria['categoria_eliminada'] == "NO") : ?>
                            <td><?= $categoria['id_categoria'] ?></td>
                            <td><?= $categoria['nombre_categoria'] ?></td>
                            <td><?= $categoria['categoria_eliminada'] ?></td>
                            <td>
                                    <a href="<?php echo base_url();?>vista_editar_categoria/<?php echo $categoria['id_categoria'];?>" class="btn btn-primary">
                                        <img class="img-fluid" src="assets\img\pencil-square.svg" class="bi" width="24" height="24">
                                    </a>
                            </td>
                            <td>
                                 <a href="<?php echo base_url();?>eliminar_categoria/<?php echo $categoria['id_categoria'];?>" class="btn btn-danger">
                                    <img class="img-fluid" src="assets\img\trash-fill.svg" class="bi" width="24" height="24">
                                </a>                               
                            </td>
                        <?php endif ?>
                        </tr>
                    <?php endforeach ?>
                    
                    


                </table>

            </div>
</div>