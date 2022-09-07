@extends('layouts/main')
@section('contenido')

    <div class="container">
        <div class="title">
            Imagenes
        </div>
        <div class="definicion">
            <p>
                Aprenderemos a agregar las imaganes que pueden ser importantes para la creacion 
                de nuestro proyecto, estas imagenes se deben agregar en la carpeta public.
                Tenemos que crear nuestra carpeta img, de esta manera debe quedar public/img/imagen.jpg
                Sobre la carpeta public, damos click derecho, en las opciones damos click en nueva carpeta y lo nombramos img
            </p>
        </div>
        <img src="{{asset('/img/68.png')}}">
        <div class="definicion">
            <p>
                Ya despues de tener la carpeta creada, buscamos las imagenes que queremos agregar, ya sean descargadas
                o las que tengas guardadas, seleccionamos o seleccionamos varias imagenes que queramos agregar, click derecho 
                para mas opciones y copeamos las imagenes, nos situamos en la carpeta del proyecto Ejercicio/public/img/ 
                dentro de la carpeta img, pegamos las imagenes que seleccionamos.
            </p>
        </div>
        <img src="{{asset('/img/69.png')}}">
        <img src="{{asset('/img/70.png')}}">
    </div>  
    
@endsection