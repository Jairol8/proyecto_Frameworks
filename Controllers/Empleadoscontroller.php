<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Empleadoscontroller extends Controller
{
    Public function guardar(Request $req){
        {
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
            DB::table('empleado')->insert([
                'nombre' => $req->nombre,
                'apellidos' => $req->apellidos,
                'fecha_nacimiento' => $req->fecha_nacimiento,
                'codigo_postal' => $req->codigo_postal,
                'municipio' => $req->municipio,
                'telefono_emergencia' => $req->telefono_emergencia,
                'estatus' => 1
            ]);
            $empleado = DB::table('cliente')->get();
            return view("/admin/empleados/registro_empleado", ['empleado'=> $empleado]);
            // return 'Saludos desde la funcion guardar';
        }
    }





    Public function actualizar(Request $req){
        {
            $req->validate->where('id_empleado', $req->id_empleado)->update([
                'nombre' =>'required',
                'apellidos' =>'required',
                'fecha_nacimiento' => ['required','integer'],
                'codigo_postal' => 'required',
                'municipio' => ['required','max:255'],
                'telefono_emergencia' => 'required|integer',
                // 'estatus' => 'required|integer',
            ]);
    
            // dd($req->all());
            DB::table('empleado')->insert([
                'nombre' => $req->nombre,
                'apellidos' => $req->apellidos,
                'fecha_nacimiento' => $req->fecha_nacimiento,
                'codigo_postal' => $req->codigo_postal,
                'municipio' => $req->municipio,
                'telefono_emergencia' => $req->telefono_emergencia,
                'estatus' => 1
            ]);
            $empleado = DB::table('empelado')->get();
            return view("/admin/empleados/registro_empleado", ['empleado'=> $empleado]);
            // return 'Saludos desde la funcion guardar';
        }
    }







    Public function borrar($id){
        $empleado = DB::table('empleado')->where('id_empleado', $id)->first();
         $nuevoEstatus = $empleado->estatus == 1 ? 2 : 1;
        DB::table('emplwado')->where('id_empleado', $id)->update(['estatus' => $nuevoEstatus   ]);
         $empleado = DB::table('empleado')->get();        // DB::table('piezas')->where('id_pieza', $id)->delete();
         return to_route('empleados.index', ['empleado'=> $empoleado]);
    }












    Public function listado(){
        $empleado=DB::table('empleado')->get();
        return view('/admin/empleados/registro_empleado');
    }










    Public function show($id){
        $empleado = DB::table('empleado')->where('id_empleado', $id)->first();
//         // console.log("gia");
         if (!$epleados) {
             return 'No se encontró el empleado con el ID proporcionado.';
         }
         return view('selects.empleados_select', ['empleados' => $empleados]);
    }    








    Public function editar($id){
        
        $empleados = DB::table('empleado')->where('id_empleado', $id)->first();
         if (!$empleados) {
            return 'No se encontró la empleado con el ID proporcionado.';
         }
         return view('empleados.create', ['empleados' => $empleados]);
    }






    Public function create(){
        return view('/admin/empleados/empleado');
    }
}
