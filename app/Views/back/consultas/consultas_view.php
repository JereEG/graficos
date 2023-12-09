<div class="container-fluid justify-content-center">

    <div class="text-center">
        <h4>Consultas</h4>
    </div>
    <div class="text-center p-2">

        <button class="w-25 btn btn-primary btn-sm"
            onclick="location.href='<?php echo base_url('ver_consultas_respondidas'); ?>'">Ver consultas respondidas</button>

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
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped table-striped ml-3">
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Email</td>
                    <td>Numero Telefónico</td>
                    <td>Consulta</td>
                    <td>Respondido</td>
                    <td>Responder</td>
                </tr>
                <?php foreach ($consultas as $consulta): ?>
                    <tr>
                        <?php if ($consulta['respondido'] == "NO"): ?>
                            <td>
                                <?= $consulta['id_consulta'] ?>
                            </td>
                            <td>
                                <?= $consulta['nombre'] ?>
                            </td>
                            <td>
                                <?= $consulta['apellido'] ?>
                            </td>
                            <td>
                                <?= $consulta['email'] ?>
                            </td>
                            <td>
                                <?= $consulta['numero_telefonico'] ?>
                            </td>
                            <td>
                                <?= $consulta['consulta'] ?>
                            </td>
                            <td>

                                <?= $consulta['respondido'] ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url(); ?>responder_consulta/<?php echo $consulta['id_consulta']; ?>"
                                    class="btn btn-danger">
                                    Responder
                                </a>
                            </td>
                        <?php endif ?>
                    </tr>
                <?php endforeach ?>




            </table>
        </div>


    </div>
</div>