@extends('layouts.app')

@section('title', 'Administrar Usuarios')

@section('content')
<div class="container">
    <section class="content-header">
        <h1>Administrar usuarios</h1>
    </section>

    <section class="content">
        <div class="box">
            <nav class="navbar">
                <div class="box-header with-border d-flex justify-content-between align-items-center w-100">
                    <button class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#modalAgregarUsuario">
                        Agregar usuario
                    </button>
                    <form class="form-inline ml-auto" method="GET" action="{{ route('usuarios') }}">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" name="search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </div>
            </nav>
            <div class="box-body">
                <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Foto</th>
                            <th>Perfil</th>
                            <th>Estado</th>
                            <th>Último login</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $usuario->usuario }}</td>
                            <td>
                                @if($usuario->foto)
                                <img src="{{ $usuario->foto }}" class="img-thumbnail" width="40px">
                                @else
                                <img src="{{ asset('default.svg') }}" class="img-thumbnail" width="40px">
                                @endif
                            </td>
                            <td>{{ $usuario->perfil }}</td>
                            <td>
                                <button class="btn {{ $usuario->estado ? 'btn-success' : 'btn-danger' }} btnActivar" data-id="{{ $usuario->id }}" data-estado="{{ $usuario->estado }}">
                                    {{ $usuario->estado ? 'Activado' : 'Desactivado' }}
                                </button>
                            </td>
                            <td>{{ $usuario->ultimo_login }}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-warning btnEditarUsuario" data-id="{{ $usuario->id }}" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btnEliminarUsuario" data-id="{{ $usuario->id }}" data-foto="{{ $usuario->foto }}" data-usuario="{{ $usuario->usuario }}"><i class="fa fa-times"></i></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<!-- Modal Agregar Usuario -->
<div class="modal fade" id="modalAgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="modalAgregarUsuarioLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background:#F9C15F; color:white">
                <h5 class="modal-title" id="modalAgregarUsuarioLabel">Agregar usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('usuarios.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <div class="mb-3">
                        <label for="perfil" class="form-label">Perfil</label>
                        <select class="form-select" id="perfil" name="perfil" required>
                            <option value="Administrador">Administrador</option>
                            <option value="Gestor">Gestor</option>
                            <option value="Consultor">Consultor</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar usuario</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Modal Editar Usuario -->
<div id="modalEditarUsuario" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" action="" id="formEditarUsuario" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header" style="background:#FF5733; color:white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Editar usuario</h4>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <!-- Entrada para el nombre -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control input-lg" id="editarNombre" name="nombre" required>
                            </div>
                        </div>
                        <!-- Entrada para el usuario -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="text" class="form-control input-lg" id="editarUsuario" name="usuario" readonly>
                            </div>
                        </div>
                        <!-- Entrada para la contraseña -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control input-lg" name="password" placeholder="Escriba la nueva contraseña">
                                <input type="hidden" id="passwordActual" name="passwordActual">
                            </div>
                        </div>
                        <!-- Entrada para seleccionar su perfil -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <select class="form-control input-lg" name="perfil" required>
                                    <option value="" id="editarPerfil"></option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Gestor">Gestor</option>
                                    <option value="Consultor">Consultor</option>
                                </select>
                            </div>
                        </div>
                        <!-- Entrada para subir fotografía -->
                        <div class="form-group">
                            <div class="panel">SUBIR FOTO</div>
                            <input type="file" class="nuevaFoto" name="foto">
                            <p class="help-block">Peso máximo de la foto 2 MB</p>
                            <img src="{{ asset('default.svg') }}" class="img-thumbnail previsualizar" width="100px" id="editarFoto">
                            <input type="hidden" name="fotoActual" id="fotoActual">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<!-- Editar usuario modal -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('.btnEditarUsuario').on('click', function() {
            var idUsuario = $(this).data('id');
            var nombre = $(this).closest('tr').find('td').eq(0).text();
            var usuario = $(this).closest('tr').find('td').eq(1).text();
            var perfil = $(this).closest('tr').find('td').eq(3).text();
            var foto = $(this).data('foto');

            $('#editarNombre').val(nombre);
            $('#editarUsuario').val(usuario);
            $('#editarPerfil').val(perfil);
            $('#fotoActual').val(foto);

            $('#formEditarUsuario').attr('action', '/usuarios/' + idUsuario);
        });
    });
</script>

<!--Cambiar de estado -->
<script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.btnActivar').forEach(button => {
                button.addEventListener('click', function() {
                    let idUsuario = this.getAttribute('data-id');
                    let estadoUsuario = this.getAttribute('data-estado') == 1 ? 0 : 1;

                    fetch(`/usuarios/${idUsuario}/estado`, {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({ estado: estadoUsuario })
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            this.classList.toggle('btn-success', estadoUsuario == 1);
                            this.classList.toggle('btn-danger', estadoUsuario == 0);
                            this.textContent = estadoUsuario == 1 ? 'Activado' : 'Desactivado';
                            this.setAttribute('data-estado', estadoUsuario);
                        } else {
                            alert('Error al actualizar el estado del usuario.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Error al intentar actualizar el estado del usuario.');
                    });
                });
            });
        });
    </script>