@extends('layouts/main')
@section('contenido')

    <div class="container">
        <div class="title">
            Enviar informacion mediante vistas
        </div>
        <div class="definicion">
            <p>
                En el controlador que creamos, dentro de la clase, crearemos un metodo, dentro del metodo escribirmos toda la informacion, ya sea arreglos
                o traer la informacion de la base de datos, ya teniendo la informacion y lista en una cadena, lo enviamos a la vista usando "compact()"<br>
                return view('miProyecto',compact('nombre-variable')) <br>
                Ejemplo en la siguiente imagen:
            </p>
        </div>
        <img src="{{asset('/img/71.png')}}">
        <div class="definicion">
            <p>
                Nos vamos a la palntilla donde vamos a traer los datos, ahi mismo llamamos la variable por interpolacion <br> "{ {$cadena} }", <br>
                si agregastes texto html junto a tu cadena, lo mejor seria imprimirlo con un echo llamando la variable o <br> "< ? = (variable) ?>", <br>
                en mi caso como use html en la cadena, usare el "echo", Ejemplo en la siguiente imagen:
            </p>
        </div>
        <img src="{{asset('/img/72.png')}}">
        <div class="definicion">
            <p>
                Revisamos la pagina web, debemos encontrar la informacion que agreamos y concatenamos desde el controlador.
            </p>
        </div>
        <img src="{{asset('/img/73.png')}}">
    </div>
    
@endsection