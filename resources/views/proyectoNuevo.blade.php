@extends('layouts/main')
@section('contenido')

    <div class="container">
        <div class="title">
            Crear un nuevo proyecto de laravel
        </div>
        <div class="definicion">
            <p>
                Laravel. <br>
                Es un framework para desarrollar aplicaciones de PHP 5 - 8 de manera ordenada y elegante, evitando crear el
                flujo de manera deshorientada.
            </p>
        </div>
        <div class="subtitle">
            Vamos a crear un nuevo proyecto de laravel con composer.
        </div>
        <div class="definicion">
            <p>
                Abrimos la carpeta o ubicamos la carpeta donde crearemos nuestro proyecto de laravel, dentro de la carpeta,
                damos click derecho y seleccionamos la opción "Abrir terminal".
            </p>
        </div>
        <img src="{{asset('/img/48.png')}}">
        <div class="definicion">
            <p>
                Ya teniendo la terminal abierta, escribirmos el comando "composer create-project laravel/laravel=8.*
                nombre-del-proyecto",
                el asterisco que tiene despues de "laravel=", es para poder instalar sin preocupamos de poner la version
                detalladamente,
                en "nombre-del-proyecto" escribimos como se llamara nuestro proyecto a crear, tendremos un ejemplo en la
                siguiente imagen.
            </p>
        </div>
        <img src="{{asset('/img/50.png')}}">
        <div class="definicion">
            <p>
                Despues de poner el comando y darle enter, aparecera detalladamente informacion sobre descargas e
                instalacion,
                solo hay que esperar que termine de que composer realice todo su proceso, al final tendremos nuestro
                proyecto listi,
                para poder trabajar en ella.
            </p>
        </div>
        <img src="{{asset('/img/52.png')}}">
        <div class="definicion">
            <p>
                Abrimos nuestro proyecto que se creo con un editor de codigo, levantaremos el servidor para poder abrirlo en
                el navegador web,
                para levantar el servidor, abrimos una terminal en opciones -> terminal -> Nuevo terminal y escribiremos en
                la terminal "php artisan serve",
                nos aparecera un servidor "http://127.0.0.1:8000", podemos dar clic a lo que esta dentro de la parentecis o
                lo podemos escribir manualmente en la pagina web.
            </p>
        </div>
        <img src="{{asset('/img/60.png')}}">
        <img src="{{asset('/img/56.png')}}">
        <div class="definicion">
            <p>
                En la pagina web, podemos comprobar que nuestro proyecto con laravel funciona correctamente.
            </p>
        </div>
        <img src="{{asset('/img/57.png')}}">
    </div>

@endsection
