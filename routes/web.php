<?php
use App\Http\Controllers\Clientecontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::view('p1','admin/plantilla/appadmin');

// Route::view('/productos','admin/productos/producto');
Route::view('/categoria','admin/categorias/categoria');
// Route::view('/cliente','admin/clientes/cliente');
Route::view('/detalle_orden','admin/detalles_orden/detalle_orden');
// Route::view('/empleados','admin/empleados/empleado');
// Route::view('/pedido','admin/pedidos/pedido');

// registros

// Route::view('/cliente_registro','admin/clientes/registro_cliente');
// Route::view('/productos_registro','admin/productos/registro_productos');
// Route::view('/pedidos_registro','admin/pedidos/registro_pedido');
// Route::view('/empleado_registro','admin/empleados/registro_empleado');
Route::view('/detalle_orden_registro','admin/detalles_orden/registro_detalles_orden');











//controlador de Clientes 

Route::get('/cliente',[Clientecontroller::class,'listado'])->name('clientes.index');
Route::get('/cliente/{id}',[Clientecontroller::class,'show'])->name('clientes.show');
Route::get('/administrador/cliente/create',[Clientecontroller::class,'create'])->name('clientes.create');
Route::get('/cliente/{id}/editar',[Clientecontroller::class,'editar'])->name('clientes.edit');
Route::post('/cliente/insertar',[Clientecontroller::class,'guardar'])->name('clientes.store');
Route::put('/clientes/{id}',[Clientecontroller::class,'actualizar'])->name('clientes.update');
Route::delete('/cliente/{id}',[Clientecontroller::class,'borrar'])->name('clientes.delete');


//Controlador de productos 

Route::get('/productos',[Productocontroller::class,'listado'])->name('productos.index');
Route::get('/producto/{id}',[Productocontroller::class,'show'])->name('productos.show');
Route::get('/administrador/productos/create',[Productocontroller::class,'create'])->name('productos.create');
Route::get('/producto/{id}/editar',[Productocontroller::class,'editar'])->name('productos.edit');
Route::post('/producto/insertar',[Productocontroller::class,'guardar'])->name('productos.store');
Route::put('/productos/{id}',[Productocontroller::class,'actualizar'])->name('productos.update');
Route::delete('/producto/{id}',[Productocontroller::class,'borrar'])->name('productos.delete');

//Controlador de Empleados

Route::get('/empleado',[Empleadoscontroller::class,'listado'])->name('empleados.index');
Route::get('/empleado/{id}',[Empleadoscontroller::class,'show'])->name('empleados.show');
Route::get('/administrador/empleado/create',[Empleadoscontroller::class,'create'])->name('empleados.create');
Route::get('/empleado/{id}/editar',[Empleadoscontroller::class,'editar'])->name('empleados.edit');
Route::post('/empleado/insertar',[Empleadoscontroller::class,'guardar'])->name('empleados.store');
Route::put('/empleados/{id}',[Empleadoscontroller::class,'actualizar'])->name('empleados.update');
Route::delete('/empleado/{id}',[Empleadoscontroller::class,'borrar'])->name('empleados.delete');

//Controlador de Pedidos 

Route::get('/pedido',[Pedidoscontroller::class,'listado'])->name('pedidos.index');
Route::get('/pedido/{id}',[Pedidoscontroller::class,'show'])->name('pedidos.show');
Route::get('/administrador/pedido/create',[Pedidoscontroller::class,'create'])->name('empleados.create');
Route::get('/pedido/{id}/editar',[Pedidoscontroller::class,'editar'])->name('pedidos.edit');
Route::post('/pedido/insertar',[Pedidoscontroller::class,'guardar'])->name('pedidos.store');
Route::put('/pedidos/{id}',[Pedidoscontroller::class,'actualizar'])->name('pedidos.update');
Route::delete('/pedido/{id}',[Pedidoscontroller::class,'borrar'])->name('pedidos.delete');





// Route::get('/producto',[Productocontroller::class,'listado'])->name('productos.index');
// Route::get('/admin/productos/{id}',[Productocontroller::class,'show'])->name('productos.show');
// Route::get('/admin/productos/formulario',[Productocontroller::class,'create'])->name('productos.create');
// Route::get('/admin/productos/{id}/editar',[Productocontroller::class,'editar'])->name('productos.edit');
// Route::post('/productos/insertar',[Productocontroller::class,'guardar'])->name('productos.store');
// Route::put('/productos/{id}',[Productocontroller::class,'actualizar'])->name('productos.update');
// Route::delete('admin/productos/{id}',[Productocontroller::class,'borrar'])->name('productos.delete');



// Route::get('/admin/empleados',[Empleadoscontroller::class,'listado'])->name('empleados.index');
// Route::get('/admin/empleados/{id}',[Empleadoscontroller::class,'show'])->name('empleados.show');
// Route::get('/admin/empleados/formulario',[Empleadoscontroller::class,'create'])->name('empleados.create');
// Route::get('/admin/empleados/{id}/editar',[Empleadoscontroller::class,'editar'])->name('empleados.edit');
// Route::post('/empleados/insertar',[Empleadoscontroller::class,'guardar'])->name('empleados.store');
// Route::put('/empleados/{id}',[Empleadoscontroller::class,'actualizar'])->name('empleados.update');
// Route::delete('admin/empleados/{id}',[Empleadoscontroller::class,'borrar'])->name('empleados.delete');

//Controlador de Pedidos 

// Route::get('/admin/pedidos ',[Pedidoscontroller::class,'listado'])->name('pedidos.index');
// Route::get('/admin/pedidos/{id}',[Pedidoscontroller::class,'show'])->name('pedidos.show');
// Route::get('/admin/pedidos/formulario',[Pedidoscontroller::class,'create'])->name('pedidos.create');
// Route::get('/admin/pedidos/{id}/editar',[Pedidoscontroller::class,'editar'])->name('pedidos.edit');
// Route::post('/pedidos/insertar',[Pedidoscontroller::class,'guardar'])->name('pedidos.store');
// Route::put('/pedidos/{id}',[Pedidoscontroller::class,'actualizar'])->name('pedidos.update');
// Route::delete('admin/pedidos/{id}',[Pedidoscontroller::class,'borrar'])->name('pedidos.delete');




