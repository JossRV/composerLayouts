<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio extends Controller
{
    // funcion para retornar la vista composer junto con el titulo de la pagina
    public function composer(){
        $titulo = 'Composer';
        return view('composer', compact('titulo'));
    }
    // funcion para retornar la vista proyectoNuevo junto con el titulo de la pagina
    public function nuevoProject(){
        $titulo = 'Nuevo Proyecto';
        return view('proyectoNuevo',compact('titulo'));
    }
    // funcion para retornar la vista parametros junto con el titulo de la pagina
    public function parametros(){
        $titulo = 'Parametros';
        return view('parametros',compact('titulo'));
    }
    // funcion para retornar la vista imagenes junto con el titulo de la pagina
    public function imagenes(){
        $titulo = 'Imagenes';
        return view('imagenes',compact('titulo'));
    }
    // funcion para retornar la vista enviaInfo junto con el titulo de la pagina
    public function enviaInfo(){
        $titulo = 'Enviar información';
        return view('enviaInfo',compact('titulo'));
    }
    // funcion para retornar la vista vrc junto con el titulo de la pagina
    public function vrc(){
        $titulo = 'vista, rutas, controlador';
        return view('vrc',compact('titulo'));
    }

}
