<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Clientecontroller extends Controller
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
            DB::table('cliente')->insert([
                'nombre_compañia' => $req->nombre_compañia,
                'region' => $req->region,
                'ciudad' => $req->ciudad,
                'codigo_postal' => $req->codigo_postal,
                'correo_electronico' => $req->correo_electronico,
                'telefono' => $req->telefono,
                'estatus' => 1
            ]);
            $cliente = DB::table('cliente')->get();
            return view("/admin/clientes/registro_cliente", ['cliente' => $cliente]);
            // return 'Saludos desde la funcion guardar';
        }
    }

    public function actualizar(Request $req)
    { {
            $req->validate->where('id_cliente', $req->id_cliente)->update([
                'nombre_compañia' => 'required',
                'region' => 'required',
                'ciudad' => ['required', 'integer'],
                'codigo_postal' => 'required',
                'correo_electronico' => ['required', 'max:255'],
                'telefono' => 'required|integer',
                // 'estatus' => 'required|integer',
            ]);

            // dd($req->all());
            DB::table('cliente')->insert([
                'nombre_compañia' => $req->nombre_compañia,
                'region' => $req->region,
                'ciudad' => $req->ciudad,
                'codigo_postal' => $req->codigo_postal,
                'correo_electronico' => $req->correo_electronico,
                'telefono' => $req->telefono,
                'estatus' => 1
            ]);
            $cliente = DB::table('cliente')->get();
            return view("/admin/clientes/registro_cliente", ['cliente' => $cliente]);
            // return 'Saludos desde la funcion guardar';
        }
    }




    public function borrar($id)
    {

        $cliente = DB::table('cliente')->where('id_cliente', $id)->first();
        $nuevoEstatus = $cliente->estatus == 1 ? 2 : 1;
        DB::table('cliente')->where('id_cliente', $id)->update(['estatus' => $nuevoEstatus]);
        $cliente = DB::table('cliente')->get();        // DB::table('piezas')->where('id_pieza', $id)->delete();
        return to_route('clientes.index', ['cliente' => $cliente]);
    }





    public function listado()
    {
        $clientes = DB::table('cliente')->get();
        return view('/admin/clientes/registro_cliente', ['clientes' => $clientes]);
    }

    public function show($id)
    {
        $clientes = DB::table('clientes')->where('id_cliente', $id)->first();
        //         // console.log("gia");
        if (!$clientes) {
            return 'No se encontró el cliente con el ID proporcionado.';
        }
        return view('selects.clientes_select', ['clientes' => $clientes]);
    }


    public function editar($id)
    {

        $clientes = DB::table('clientes')->where('id_cliente', $id)->first();
        if (!$clientes) {
            return 'No se encontró la cliente con el ID proporcionado.';
        }
        return view('clientes.create', ['clientes' => $clientes]);
    }

    public function create()
    {
        return view('admin.clientes.cliente');
    }


}
