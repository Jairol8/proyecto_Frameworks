@extends('/admin/plantilla/appadmin')

@section('titulo', 'REGISTROS DE LOS EMPLEADOS')

@section('contenido')

<div class="container">
    <div class="row justify-content-center">
        <a href="/administrador/empleado/create" class="btn btn-primary mt-2">Nuevo Empleado</a>
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
                        <th scope="row">1</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href={{route('empleados.edit')}}>Editar</a></td>
                        <td><a href={{route('empleados.delete')}}>Borrar</a></td>
                    </tr>
                   
                
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection