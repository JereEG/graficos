<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="container-fluid justify-content-center">
    <h1 class="text-center">Gráficos</h1>
    <canvas id="myChart" width="400" height="400"></canvas>
</div>

<script>
    $(document).ready(function () {
        $.ajax({
            url: "<?php echo base_url('graficar') ?>",
            type: 'POST',
            dataType: 'text',
            success: function (data) {
                console.log("Respuesta exitosa:", data);

                var categoria = [];
                var total = [];

                for (var i in data) {
                    categoria.push(data[i].CategoryName);
                    total.push(data[i].total);
                    console.log(data[i].CategoryName);
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
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
</script>