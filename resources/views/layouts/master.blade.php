<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 

</head>
<body>

<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-5">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('fooldal')}}">Fő oldal</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="{{route('felveteloldal')}}">Feltöltés</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('listaoldal')}}" >Lista</a>
        </li>
      </ul>
    </div>
  </nav>

    @yield('content')


    <footer class="container-fluid bg-dark text-white mt-6 mt-5">
        <div class="row col12">
            <div class="p-5">lábléc</div>
        </div>
    </footer>

</body>
</html>