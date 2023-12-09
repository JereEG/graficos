<div class="container-fluid d-flex justify-content-center">
    <div class="p-4 ">
        <h2 class="text-center">CRUD de productos</h2>
        <div class="text-center p-2">
            
            <button class="w-25 btn btn-primary btn-sm" onclick="location.href='<?php echo base_url('crud'); ?>'">Volver al menu anterior</button>
            
            <!--<button class="w-25 btn btn-danger btn-sm" onclick="location.href='<?php echo base_url('/'); ?>'">Eliminar producto</button>-->

        </div>
        <div class="row p-2">
            

            <?php foreach($productos as $producto ):?>
                <?php if($producto['eliminado'] == "SI"):?>
                <div class="col-12 col-sm-4">
                    <div class="card">
                        <img src="assets\uploads\<?= $producto['imagen']?>" class="card-img-top" >
                        <div class="card-body">
                            <p class="card-text"><?php echo $producto['descripcion_prod']?></p>
                            <p class="card-title">Precio: $<?php echo $producto['precio']?></p>
                            <p class="card-title">Precio de venta: $<?php echo $producto['precio_venta']?></p>
                            <p class="card-title">Stock: <?php echo $producto['stock']?></p>
                            <p class="card-title">Stock mínimo: <?php echo $producto['stock_min']?></p>
                            <p class="card-title">Eliminado: <?php echo $producto['eliminado']?></p>

                            <a href="<?php echo base_url();?>produ-restaurar/<?php echo $producto['id_producto'];?>" class="btn btn-danger">
                                Restaurar
                            </a>
                        </div>
                    </div>
                </div>
                <?php endif;?>                
            <?php endforeach;?>
        </div>

    </div>

</div>