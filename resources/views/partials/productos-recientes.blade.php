<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Productos recientes</h3>
    </div>

    @foreach($recientes as $producto)
        <ul class="list-group"> 
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $producto->descripcion }}
                <span class="badge badge-primary badge-pill"> ${{ $producto->precio_sin_iva }} </span>
            </li>
        </ul>
    @endforeach

    <br>

    <div class="box-footer text-center">
        <a href="{{ route('inicio') }}" class="btn btn-info btn-primary btn-sm active" role="button" aria-disabled="true">Ver todos los productos</a>
    </div>
</div>