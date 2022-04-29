<html>
    <head>
        <title>Academia - @yield('titulo')</title> <!-- (El primero es el nombre de la aplicacion el segundo el yield de cada vista) · -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"> {{--Ponemos el navbar --}}
            <a href="/cursos" class="navbar-brand"><img src="/logo/logo p1.png" width="30" height="30" alt=""></a> {{-- Esto lo copiamos del bobtstrapt y ponemos la ruta donde esta nuestro logo--}}
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Nuestros Cursos <span class="sr-only">(current)</span></a>
                    </li>
                   <li class="nav-item active">
                        <a  class="nav-link" href="#">Docentes <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a  href= "/cursos/create" class="nav-link" href="#">Crear Curso <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a  href= "/nosotros" class="nav-link" href="#">Sobre Nostros <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <br>
        <br>
        <div class="container">
            <br>
            @yield('contenido')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </body>
</html>
