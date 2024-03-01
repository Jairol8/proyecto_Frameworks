<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Pedidoscontroller extends Controller
{
    Public function guardar(Request $req){
        return "saludos desde la funcion guardar";
    }

    Public function actualizar(Request $req){
        return "saludos desde la funcion actualizar";
    }

    Public function borrar($id){
        return "saludos desde la funcion borrar";
    }

    Public function listado(){
        return view('admin/pedidos/registro_pedidos');
    }

    Public function show($id){
        return "saludos desde la funcion select";
    }  
    
    Public function editar($id){
        return "saludos desde la funcion editar";
    }

    Public function formulario(){
        return "saludos desde la funcion formulario";
    }
}
