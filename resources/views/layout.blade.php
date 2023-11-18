<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="#">
                @yield('titulo')
            </a>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                </ul>
                <span class="navbar-text">
                  Navbar text with an inline element
                </span>
              </div>
          </nav>
        
        <div class="row">
            <div class="col-md-12">
                @yield('conteudo')
            </div>
        </div>
    </div>
</body>
</html>