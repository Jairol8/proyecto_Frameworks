@extends('/admin/plantilla/appadmin')

@section('titulo', 'REGISTROS DEL PRDUCTO')

@section('contenido')

    <div class="container">
        <div class="row justify-content-center">
            <a href="/administrador/productos/create" class="btn btn-primary mt-2">Nuevo Productos</a>
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID_Producto</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio del Producto</th>
                            <th scope="col">Unidades Ordenadas</th>
                            <th scope="col">Seleccionar Catálogo</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href={{route('productos.edit')}}>Editar</a></td>
                            <td><a href={{route('productos.delete')}}>Borrar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
