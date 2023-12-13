<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="container-fluid justify-content-center">
    <h1 class="text-center">Gráficos</h1>

    <div class="d-flex justify-content-center mb-3">
        <canvas id="myChart" width="400" height="400"></canvas>
    </div>


    <div class="d-flex justify-content-center">
        <canvas id="ChartClientesPorPais" width="400" height="400"></canvas>
    </div>
</div>


<script>
    //Primer grafico solicitado en el practico
    $(document).ready(function () {
        $.ajax({
            url: "<?php echo base_url('graficar') ?>",
            type: 'POST',
            dataType: 'json',
            success: function (data) {
                console.log("Respuesta exitosa:", data);

                var categoria = [];
                var total = [];

                for (var i in data) {
                    categoria.push(data[i].CategoryName);
                    total.push(data[i].total);
                }

                graficar(categoria, total);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log("Error en la solicitud AJAX:");
                console.log(xhr.status + '\n' + ajaxOptions + '\n' + thrownError);
                console.log(xhr); // Imprimir la respuesta completa 
            }
        });
    });
    //Segundo grafico solicitado en el practico
    $(document).ready(function () {
    $.ajax({
        url: "<?php echo base_url('graficarClientes') ?>", // Cambia la URL según tu ruta de servidor
        type: 'POST',
        dataType: 'json',
        success: function (data) {
            console.log("Respuesta exitosa del Grafico2:", data);

            var paises = [];
            var cantidadClientes = [];

            for (var i in data) {
                paises.push(data[i].Country);
                cantidadClientes.push(data[i].CustomerCount);
            }
            
            graficarSegundo( paises, cantidadClientes);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log("Error en la solicitud AJAX:");
            console.log(xhr.status + '\n' + ajaxOptions + '\n' + thrownError);
            console.log(xhr); // Imprimir la respuesta completa 
        }
    });
});

function graficarSegundo( labels, datos ) {
    const ctxClientes = document.getElementById('ChartClientesPorPais');
    const clientesChart = new Chart(ctxClientes, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Cantidad de clientes por país',
                data: datos,
                backgroundColor: [
                   'rgba(0, 156, 123, 0.8)',
                    'rgba(201, 93, 20, 0.8)',
                    'rgba(0, 149, 169, 0.8)',
                    'rgba(180, 63, 63, 0.8)',
                ],
           
                borderWidth: 1
            }]
        },
        options: {
            indexAxis: 'y', // y hace que sea horizontal

            responsive: false, // Evita que el tamaño se ajuste automáticamente
            maintainAspectRatio: true, // Permite un tamaño personalizado

            aspectRatio: 1, // Proporción deseada (ajusta según tus necesidades)
            animation: true,
            
            elements: {
                bar: {
                    borderWidth: 2,
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Cantidad de clientes por país',
                    font: {
                        size: 30
                    }
                },
                legend: {
                    display: true,
                    position: 'bottom',
                    labels: {
                        font: {
                            size: 14
                        }
                    }
                },
                backgroundColor: 'rgba(0, 0, 0, 0.5)',

            },
            scales: {
                x: {
                    beginAtZero: true
                }
            }
        }
    });
}

  
    function graficar(categoria, total) {
        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: categoria,
                datasets: [{
                    label: 'Total de stock por categoría',
                    data: total,
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 0.1)',
                        'rgba(255, 206, 86, 0.1)',
                        'rgba(75, 192, 192, 0.1)',
                        'rgba(153, 102, 255, 0.1)',
                        'rgba(255, 159, 64, 0.1)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                animation: true,
                responsive: false, // Evita que el tamaño se ajuste automáticamente
                maintainAspectRatio: true, // Permite un tamaño personalizado

                aspectRatio: 1, // Proporción deseada (ajusta según tus necesidades)

                  plugins: {

                title: {
                    display: true,
                    text: 'Cantidad de productos por categoría',
                    font: {
                        size: 30
                    }
                },
                legend: {
                    display: true,
                    position: 'bottom',
                    labels: {
                        font: {
                            size: 14
                        }
                    }
                },
                 customCanvasBackgroundColor: {
                          color: 'lightGreen',
                      }
            },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                

            },
             
        });
    }
</script>