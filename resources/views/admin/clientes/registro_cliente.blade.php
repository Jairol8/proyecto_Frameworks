@extends('/admin/plantilla/appadmin')

@section('titulo', 'REGISTROS DE LOS CLIENTES')

@section('contenido')


    <div class="container">
        <a href="/administrador/cliente/create" class="btn btn-primary">Nuevo Registro</a>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID_Empleado</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">Codigo postal</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Municipio</th>
                            <th scope="col">Telefono de Emergencia</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                        @foreach ($clientes as $cliente)
                            <th scope="row">1</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href={{route('clientes.edit',['id' => $cliente->id_cliente])}}>Editar</a></td>
                            <td><a href={{route('clientes.delete')}}>Borrar</a></td>
                        <td>
                            <form action="{{ route("clientes.delete", ['id' => $cliente->id_cliente]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">{{ $cliente->estatus != 2 ? "
                                Desactivar" : "Activar" }}</button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                        <tr>
                            <th scope="row">2</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>




                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
