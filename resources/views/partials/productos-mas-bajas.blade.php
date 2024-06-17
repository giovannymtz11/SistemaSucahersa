<div class="container" >
    <h3>Productos con más bajas</h3>
    <div class="row">
        <div class="col-md-7">
            <div class="chart-responsive">
                <div id="pieChart"></div>
            </div>
        </div>
        <div class="col-md-5">
            <ul class="chart-legend clearfix">
                @foreach($sumaProductos->take(10) as $index => $producto)
                <li>{{ $producto->descripcion }}
                    <span class="pull-right text-{{ $colores[$index % count($colores)] }}">
                        <i class="fa fa-angle-down"></i> {{ ceil($producto->bajas * 100 / $totalBajasProductos) }}%
                    </span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="box-footer no-padding">
        <ul class="nav nav-pills nav-stacked">
        </ul>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var options = {
            chart: {
                type: 'pie',
                height: 350
            },
            series: {!! json_encode($sumaProductos->pluck('bajas')) !!},
            labels: {!! json_encode($sumaProductos->pluck('descripcion')) !!},
            colors: {!! json_encode(array_slice($colores, 0, $sumaProductos->count())) !!},
            legend: {
                show: false
            },
            tooltip: {
                y: {
                    formatter: function(value) {
                        return value + " bajas";
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#pieChart"), options);
        chart.render();
    });
</script>
