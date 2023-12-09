<div class="container-fluid d-flex justify-content-center">
    <!--recuperamos datos con la función Flashdata para mostrarlos-->
    <?php if (session()->getFlashdata('success')): ?>
        <div class='text-center w-50 alert alert-success alert-dismissible fade show' role='alert'>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif ?>

</div>
<section class="container-fluid">

    <!--Carrusel de presentación-->
    <div id="carrusel_presentacion" class="carousel slide">
        <button class="carousel-control-prev" type="button" data-bs-target="#carrusel_presentacion"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carrusel_presentacion"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carrusel_presentacion" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carrusel_presentacion" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carrusel_presentacion" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="assets/img/propaganda1.gif" class="d-block w-100 img-fluid"
                    style="width: 100vh; height: 100hv; object-fit: contain;" autoplay>
            </div>
            <div class="carousel-item">
                <img src="assets/img/propaganda2.gif" class="d-block w-100 img-fluid"
                    style="width: 100vh; height: 100hv; object-fit: contain;" autoplay>
            </div>
            <div class="carousel-item">
                <img src="assets/img/propaganda3.gif" class="d-block w-100 img-fluid"
                    style="width: 100hv; height: 100hv; object-fit: contain;" autoplay>
            </div>
        </div>

    </div>

    <!--<div class="text-center">
        <h1>Kiosco Online los mejores productos al mejor precio</h1>
        <h2>Productos mas vendidos</h2>
        <div class="row p-2 align-items-center">
            <div class="col-4 m-2 card" style="width: 18rem;">
                <img class="img-fluid" src="assets/img/cerveza_heineken.png" class="card-img-top "
                    style="width: 100%; height: 175px; object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title">Cerveza Heineken 1L</h5>
                    <p class="card-text">
                        Una exelecte opcion para un buen buen rato.
                    </p>
                    <a href="<?php echo base_url('sitio_en_construccion');?>" class="btn btn-primary">Añadir a la
                        bolsa</a>
                </div>
            </div>
        </div>
        
    </div>-->

    <!--Carrusel de productos-->
    <h1>Kiosco Online los mejores productos al mejor precio</h1>
    <h2>Productos mas vendidos</h2>

    <div id="carrusel_productos_mas_vendidos" class="carousel slide" data-ride="carousel">
        <button class="carousel-control-prev bg-primary" type="button" data-bs-target="#carrusel_productos_mas_vendidos"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next bg-primary" type="button" data-bs-target="#carrusel_productos_mas_vendidos"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="cards-wrapper">
                    <div class="card col-12 col-sm-4">
                        <img src="assets/img/coca_cola_no_retornable.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">$750,00</h5>
                            <p class="card-text">Gaseosa Coca Cola sabor original 2.25 l.</p>
                            <a href="<?php echo base_url('catalogo');?>" class="btn btn-primary">Añadir a
                                la bolsa</a>
                        </div>
                    </div>
                    <div class="card col-12 col-sm-4">
                        <img src="assets/img/lays_clasica.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">$610,00</h5>
                            <p class="card-text">Papas fritas Lays clásicas bolsa 145 g.</p>
                            <a href="<?php echo base_url('catalogo');?>" class="btn btn-primary">Añadir a
                                la bolsa</a>
                        </div>
                    </div>
                    <div class="card col-12 col-sm-4">
                        <img src="assets/img/chetos.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">$675,00</h5>
                            <p class="card-text">Palitos de maíz super queso Cheetos 238 g.</p>
                            <a href="<?php echo base_url('catalogo');?>" class="btn btn-primary">Añadir a
                                la bolsa</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="cards-wrapper">
                    <div class="card col-12 col-sm-4">
                        <img src="assets/img/cerveza_heineken.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">$950,00</h5>
                            <p class="card-text">Cerveza rubia Heineken Retornable 1 l.</p>
                            <a href="<?php echo base_url('catalogo');?>" class="btn btn-primary">Añadir a
                                la bolsa</a>
                        </div>
                    </div>
                    <div class="card col-12 col-sm-4">
                        <img src="assets/img/fanta_no_retornable.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">$612,00</h5>
                            <p class="card-text">Gaseosa Fanta naranja 2.25 l.</p>
                            <a href="<?php echo base_url('catalogo');?>" class="btn btn-primary">Añadir a
                                la bolsa</a>
                        </div>
                    </div>
                    <div class="card col-12 col-sm-4">
                        <img src="assets/img/oreo.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">$310,00</h5>
                            <p class="card-text">Oreo rellenas con crema 110 g.</p>
                            <a href="<?php echo base_url('catalogo');?>" class="btn btn-primary">Añadir a
                                la bolsa</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="cards-wrapper">
                    <div class="card col-12 col-sm-4">
                        <img src="assets/img/aceite_natura.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">$775,00</h5>
                            <p class="card-text">Aceite de girasol Cocinero plus 1.5 l.</p>
                            <a href="<?php echo base_url('catalogo');?>" class="btn btn-primary">Añadir a la bolsa</a>
                        </div>
                    </div>
                    <div class="card col-12 col-sm-4">
                        <img src="assets/img/acite cocinero.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">$774,00</h5>
                            <p class="card-text">Aceite de girasol Cocinero plus 1.5 l.</p>
                            <a href="<?php echo base_url('catalogo');?>" class="btn btn-primary">Añadir a la bolsa</a>
                        </div>
                    </div>
                    <div class="card col-12 col-sm-4">
                        <img src="assets/img/galletita_salada.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">70,00</h5>
                            <p class="card-text">Galletitas crackers La Providencia 101 g.</p>
                            <a href="<?php echo base_url('catalogo');?>" class="btn btn-primary">Añadir a la bolsa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="text-center p-2">
        <a class="btn btn-primary" href="<?php echo base_url('catalogo');?>" role="button">Ver catalogo completo</a>
    </div>



</section>