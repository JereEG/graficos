<div class="container-fluid d-flex justify-content-center">
    <div class="p-4 ">
        <h2 class="text-center">Productos</h2>
        <div class="text-center p-2">
            
           
        </div>
        <div class="row p-2">
            
       

            <?php foreach($productos as $producto ):?>
                <?php if($producto['eliminado'] == "NO" && $producto['stock'] > $producto['stock_min']):?>
                    
                        <div class="col-12 col-sm-4 p-2">
                            <form action="<?php echo base_url();?>carrito_agregar/<?php echo $producto['id_producto'];?>" method="post" >
                            <div class="card">
                                <img src="assets\uploads\<?= $producto['imagen']?>" class="card-img-top" >
                                <div class="card-body">
                                    <p class="card-text"><?php echo $producto['descripcion_prod']?></p>
                                    <p class="card-title">Precio: $<?php echo $producto['precio']?></p>
                                    <p class="card-title">Stock: <?php echo $producto['stock']?></p>
                                <button type="submit" class="btn btn-primary">
                                    Agregar al carrito 
                                    <img class="img-fluid" src="assets\img\carrito.svg" class="bi" width="24" height="24">
                                </button>
                                
                                </div>
                            </div>
                            </form>
                        </div>
                    
                <?php endif;?>                
            <?php endforeach;?>
        </div>

    </div>

</div>