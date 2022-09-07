@extends('layouts/main')
@section('contenido')

    <div class="container">
        <div class="title">
            Parametros
        </div>
        <div class="definicion">
            <p>
                Un parametro es, prácticamente, una variable cuyo valor debe ser o bien proporcionado por el programa principal 
                al procedimiento o ser devuelto desde el procedimiento hasta el programa principal.
            </p>
        </div>
        <div class="subtitle">
            Parametros de entrada y de salida
        </div>
        <div class="definicion">
            <p>
                Los parámetro de entrada son parámetros cuyos valores deben ser proporcionados por el programa principal, 
                y los parámetros de salida son parámetros cuyos valores se calcularán en el procedimiento y se deben 
                devolver al programa principal para su proceso posterior, estas usan un return.
            </p>
        </div>
        <div class="subtitle">
            Argumentos
        </div>
        <div class="definicion">
            <p>
                Los parametros y argumentos, van de la mano, pero hay una diferencia minima que los distingue. <br>
                El parametro actua como una varibale local, el argumento es el valor, por eso uno puede confundirse, porque van de la mano
                cuando creamos una variable, esta va a llevar su valor.
                En laravel podemos usar los parametros de esta forma:
            </p>
        </div>
        <img src="{{asset('/img/74.png')}}">
        <div class="definicion">
            <p>
                En nuestro controlador, creamos una funcion, esta lleva parentesis, dentro de la parentesis puede llevar una variable o no, 
                esa parte se llama parametro, eso indica que el metodo va a recibir un valor. <br>
                En la siguiente imagen, va a ver como usarse en las rutas.
            </p>
        </div>
        <img src="{{asset('/img/75.png')}}">
        <div class="definicion">
            <p>
                En la plantilla web.php creamos la ruta, pero despues de la diagonal incluiremos el parametro con llaves, 
                estoy pidiendo el valor para que pueda funcionar correctamente mi pagina web. <br> Despues de crear la ruta, 
                nos vamos a la pagina web, en la barra que esta en la parte superior, despues de la ip del proyecto, 
                agregamos una "/" para posteriormente escribir un valor para el parametro que me estan pidiendo. <br>
                Quedaria de esta forma "http://127.0.0.1:8000/valor-parametro", dependiendo el valor que le quieras dar al parametro, 
                funcionara correctamente, se los muestro en el siguiente ejemplo:
            </p>
        </div>
        <img src="{{asset('/img/77.png')}}">
    </div>
    
@endsection