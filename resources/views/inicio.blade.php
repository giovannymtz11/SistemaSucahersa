@extends('layouts.app')

@section('title', 'Sistema Suministros')

@section('content')
<div class="container">
    <h1>
        Tablero
        <small>Panel de Control</small>
    </h1>
    @if($usuario)
        <p>Bienvenido, {{ $usuario->nombre }}</p>
    @else
        <p>Bienvenido, Invitado</p>
    @endif
    <br>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="info-box bg-yellow">
                        <span class="info-box-icon"><i class="ion ion-social-usd"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Bajas</span>
                            <span class="info-box-number">${{ number_format($totalBajas, 2) }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="info-box bg-red">
                        <span class="info-box-icon"><i class="ion ion-clipboard"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Categorías</span>
                            <span class="info-box-number">{{ $categorias->count() }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="ion ion-ios-cart"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Sucursales</span>
                            <span class="info-box-number">{{ $sucursales->count() }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="info-box bg-blue">
                        <span class="info-box-icon"><i class="ion ion-pie-graph"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Entradas de suministros</span>
                            <span class="info-box-number">{{ $productos->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            @include('partials.graficoBajas', ['data' => $data])
        </div>
        <br>
        <br>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            @include('partials.productos-mas-bajas', ['data' => $data])
        </div>
        <div class="col-lg-6 col-md-12">
            @include('partials.productos-recientes', ['productos' => $productos])
        </div>
    </div>
</div>
@endsection
