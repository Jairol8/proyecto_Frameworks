<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Productocontroller extends Controller
{
    public function guardar(Request $req)
    { {
            // $req->validate([
            //     'nombre_compañia' =>'required',
            //     'region' =>'required',
            //     'ciudad' => ['required','integer'],
            //     'codigo_postal' => 'required',
            //     'correo_electronico' => ['required','max:255'],
            //     'telefono' => 'required|integer',
            //     // 'estatus' => 'required|integer',
            // ]);

            // dd($req->all());
            DB::table('producto')->insert([
                'nombre_producto' => $req->nombre_producto,
                'precio' => $req->region,
                'unidades' => $req->ciudad,
                'unidades_disponibles' => $req->unidades_disponibles,
                'unidades_ordenadas' => $req->unidades_ordenadas,
                'id_categoria	' => $req->id_categoria	,
                'estatus' => 1
            ]);
            $producto = DB::table('producto')->get();
            return view("/admin/productos/registro_productos", ['producto' => $producto]);
            // return 'Saludos desde la funcion guardar';
        }
    }

    public function actualizar(Request $req)
    { {
            $req->validate->where('id_producto', $req->id_producto)->update([
                'nombre_producto' => 'required',
                'precio' => 'required',
                'unidades' => ['required', 'integer'],
                'unidades_disponibles' => 'required',
                'unidades_ordenadas' => ['required', 'max:255'],
                'id_categoria	' => 'required|integer',
                // 'estatus' => 'required|integer',
            ]);

            // dd($req->all());
            DB::table('producto')->insert([
                'nombre_producto' => $req->nombre_compañia,
                'precio' => $req->region,
                'unidades' => $req->ciudad,
                'unidades_disponibles' => $req->unidades_disponibles,
                'unidades_ordenadas' => $req->unidades_ordenadas,
                'id_categoria	' => $req->id_categoria	,
                'estatus' => 1
            ]);
            $producto = DB::table('producto')->get();
            return view("/admin/productos/registro_productos", ['producto' => $producto]);
            // return 'Saludos desde la funcion guardar';
        }
    }




    public function borrar($id)
    {

        $producto= DB::table('producto')->where('id_producto', $id)->first();
        $nuevoEstatus = $producto->estatus == 1 ? 2 : 1;
        DB::table('producto')->where('id_producto', $id)->update(['estatus' => $nuevoEstatus]);
        $producto = DB::table('producto')->get();        // DB::table('piezas')->where('id_pieza', $id)->delete();
        return to_route('productos.index', ['producto' => $producto]);
    }





    public function listado()
    {
        $productos = DB::table('producto')->get();
        return view('/admin/productos/registro_productos', ['productos' => $productos]);
    }

    public function show($id)
    {
        $productos = DB::table('productos')->where('id_producto', $id)->first();
        //         // console.log("gia");
        if (!$productos) {
            return 'No se encontró el cliente con el ID proporcionado.';
        }
        return view('selects.productos_select', ['productos' => $productos]);
    }


    public function editar($id)
    {

        $productos = DB::table('productos')->where('id_producto', $id)->first();
        if (!$productos) {
            return 'No se encontró la cliente con el ID proporcionado.';
        }
        return view('productos.create', ['productos' => $productos]);
    }

    public function create()
    {
        return view('admin.productos.producto');
    }


}
