@extends('layouts/main')
@section('contenido')

    <div class="container">
        <div class="title">
            Creacion de Vistas, Controladores y Rutas
        </div>
        <div class="subtitle">
            Las vistas o views
        </div>
        <div class="definicion">
            <p>
                Las vistas "views" las podemos encontrar en la carpeta recursos "resources", la carpeta de recursos tambien
                conocida como DEV,
                es donde esta todo en desarrollo y lo que puede ver quien esta trabajando el proyecto.
                ubicamos las vistas en resources/views, dentro de la carpeta podemos crear nuestra plantilla tipo blade;
                Blade es un motor de plantillas simple y a la vez poderoso proporcionado por Laravel. <br>
                Sobre la arpeta views, damos click derecho, en las opciones damos click en "Nuevo archivo",
                le damos un nombre con las extensiones .blade.php ejemplo: miProyecto.blade.php.
            </p>
        </div>
        <img src="{{asset('/img/58.png')}}">
        <div class="definicion">
            <p>
                Ya creada la plantilla, podemos empezar a hacer todo lo visual, trabajando todo html y php en conjunto.
            </p>
        </div>
        <img src="{{asset('/img/59.png')}}">
        <div class="subtitle">
            <br>
            Controladores o controllers
        </div>
        <div class="definicion">
            <p>
                Los controntroladores "controllers" hacen que la pagina sea funcional, esta lo podemos encontrar en la
                carpeta app
                que es el cerebro del codigo, tambien podremos encontrar los modelos "models" y los controladores
                "controllers" que esta ubicado en
                app/Http/Controllers.
                <br>Para crear un controlador, de nuevo abrimos nuestra terminal y tecleamos el comando "php artisan
                make:controller nombre-controlador",
                en "nombre-cotrolador" puede llevar un nombre que puedas ubicarlo bien, porque lo utilizaremos para llamarlo
                en otros lados o en las rutas. <br>
                Ejemplo en la siguiente imagen.
            </p>
        </div>
        <img src="{{asset('/img/61.png')}}">
        <div class="definicion">
            <p>
                Ya creado el controlador, que esta ubicada en app/Http/Controllers, mi plantilla llamado miProyecto.php, lo
                abrimos y podremos trabajar en la plantilla,
                sobre todo lo principal es crear nuestra funcion para que pueda mostrar la vista llamada
                miProyecto.blade.php de la siguiente manera <br>
                public function index(){return view('nombre-plantilla');} <br>
                tambien aveces no es necesario tener el mismo nombre, pero es mejor para no crear confuciones y ubicar
                facilmente con cual estas trabajando en conjunto. <br>
                Ejemplo en la siguiente imagen.
            </p>
        </div>
        <img src="{{asset('/img/64.png')}}">
        <div class="subtitle">
            <br>
            Rutas o routes
        </div>
        <div class="definicion">
            <p>
                Las rutas se encuentran en la carpeta routes junto al archivo llamado web.php, ubicamos routes/web.php <br>
                Al abrir la plantilla, podemos agregar mas rutas de manera sencilla, con <br>
                "Route::get('/', function (){return view('nombre-plantilla');}) " <br>
                Como nosotros estamos trabajando controladores, se usara "Route::get('/',
                [nombre-controlador::class,'nombre-metodo']);",
                el nombre del controlador y el nombre de la clase estan ubicados en la plantilla controllers que creamos
                anteriormente.
                Ejemplo de la ruta sencilla en la siguyiente imagen:
            </p>
        </div>
        <img src="{{asset('/img/65.png')}}">
        <div class="definicion">
            <p>
                Ya finalizado podemos checar en el navegador que la vista se muestre.
            </p>
        </div>
        <img src="{{asset('/img/67.png')}}">
    </div>

@endsection
