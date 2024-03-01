@extends('/admin/plantilla/appadmin')

@section('titulo', 'REGISTROS DE DETALLE DEL LA ORDEN')

@section('contenido')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID_orden</th>
                        <th scope="col">ID_producto</th>
                        <th scope="col">Unidades Ordenadas</th>
                        <th scope="col">Precio por Unidad</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Descuento</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Producto 1</td>
                        <td>10</td>
                        <td>$10.99</td>
                        <td>1</td>
                        <td>5%</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Producto 2</td>
                        <td>20</td>
                        <td>$20.49</td>
                        <td>2</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Producto 3</td>
                        <td>15</td>
                        <td>$15.79</td>
                        <td>3</td>
                        <td>15%</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Producto 4</td>
                        <td>8</td>
                        <td>$8.99</td>
                        <td>4</td>
                        <td>20%</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Producto 5</td>
                        <td>12</td>
                        <td>$12.99</td>
                        <td>5</td>
                        <td>25%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>




@endsection
