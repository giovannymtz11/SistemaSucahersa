<div id="bajasChart"></div>
<!-- ApexCharts JS -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var data = @json($data);
        var categories = data.map(item => item.fecha);
        var bajasData = data.map(item => item.bajas);

        var options = {
            chart: {
                type: 'line',
                height: 350
            },
            series: [{
                name: 'Bajas',
                data: bajasData
            }],
            xaxis: {
                categories: categories,
                title: {
                    text: 'Fecha'
                },
                labels: {
                    formatter: function(value) {
                        return new Date(value).toLocaleDateString('es-ES', {
                            month: 'short',
                            year: 'numeric'
                        });
                    }
                }
            },
            yaxis: {
                title: {
                    text: 'Bajas'
                }
            },
            title: {
                text: 'Gráfico de Bajas',
                align: 'center'
            }
        };

        var chart = new ApexCharts(document.querySelector("#bajasChart"), options);
        chart.render();
    });
</script>