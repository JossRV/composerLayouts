@extends('layouts/main')
@section('contenido')

    <div class="container">
        <div class="title">
            Conociendo composer
        </div>
        <div class="definicion">
            <p>
                Composer es un sistema de gestión de paquetes para programar en PHP el cual provee los formatos 
                estándar necesarios para manejar dependencias y librerías de PHP. 
                Fue desarrollado por Nils Adermann y Jordi Boggiano quienes continúan dirigiendo el proyecto.
            </p>
        </div>
        <div class="subtitle">
            Es hora de iniciar con la descarga y la instalacion de composer
        </div>
        <div class="definicion">
            <p>
                Primero buscaremos en el navegador "composer", y seleccionamos la opcion "Download" que esta marcada en morado, 
                lo que necesitamos es descargarlo para asi posteriormente instalarlo.
            </p>
        </div>
        <img src="{{asset('/img/43.png')}}">
        <div class="definicion">
            <p>
                Ya estando en la pagina web para descargar composer, le damos click en la opción "Composer-Setup.exe".
            </p>
        </div>
        <img src="{{asset('/img/44.png')}}">
        <div class="definicion">
            <p>
                Ubicamos la carpeta donde queremos que se descargue, esperamos que la descarga termine.
            </p>
        </div>
        <img src="{{asset('/img/45.png')}}">
        <div class="definicion">
            <p>
                Ya que este lista la descarga, abrimos el .exe para iniciar la instalacion del composer,
                seleccionamos la instalacion que nos recomienda composer y esperamos que termine de instalarse.
            </p>
        </div>
        <img src="{{asset('/img/46.png')}}">
        <div class="definicion">
            <p>
                Ya terminada la instalación, comprobamos que composer este instalada en nuestra computadora, en ello abrimos la terminal
                y escribimos el comando "composer", y nos mostrara como la siguiente imagen con toda la informacion para saber si lo tenemos instalado.
            </p>
        </div>
        <img src="{{asset('/img/47.png')}}">
    </div>

@endsection