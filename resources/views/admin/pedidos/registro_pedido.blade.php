@extends('/admin/plantilla/appadmin')

@section('titulo', 'REGISTRO DE PEDIDOS')

@section('contenido')

<div class="container">
    <div class="row justify-content-center">
        <a href="/administrador/pedido/create" class="btn btn-primary">Nuevo Pedido</a>
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id_pedido</th>
                        <th scope="col">id_cliente</th>
                        <th scope="col">id_empleado</th>
                        <th scope="col">Datos de la orden</th>
                        <th scope="col">fecha de la orden</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">4</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href={{route('pedidos.edit')}}>Editar</a></td>
                        <td><a href={{route('pedidos.delete')}}>Borrar</a></td>
                    </tr>
                    
                   
                
                </tbody>
            </table>
        </div>
    </div>
</div>




@endsection
