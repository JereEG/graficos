<div class="container-fluid d justify-content-center">
    <a class="btn btn-primary" href="<?php echo base_url('/crud_categorias') ?>"><h5>Volver</h5></a>
    <div class="text-center">
        <h4>CRUD de Categorías</h4>
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
                        <?php if ($categoria['categoria_eliminada'] == "SI") : ?>
                            <td><?= $categoria['id_categoria'] ?></td>
                            <td><?= $categoria['nombre_categoria'] ?></td>
                            <td><?= $categoria['categoria_eliminada'] ?></td>
                            <td>
                                    <a href="<?php echo base_url();?>vista_editar_categoria/<?php echo $categoria['id_categoria'];?>" class="btn btn-primary">
                                        <img class="img-fluid" src="assets\img\pencil-square.svg" class="bi" width="24" height="24">
                                    </a>
                            </td>
                            <td>
                                 
                                <a href="<?php echo base_url(); ?>eliminar_categoria/<?php echo $categoria['id_categoria']; ?>" class="btn btn-danger">
                                            Restaurar
                                </a>
                            </td>
                        <?php endif ?>
                        </tr>
                    <?php endforeach ?>
                    
                    


                </table>

            </div>
</div>