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
        <div class="col-md-12">
        @yield('titulo')
        </div>
        <div class="row">
            <div class="col-md-9">
                @yield('conteudo')
            </div>
            <div class="col-md-3">
                @section('barra-lateral')
                    <h3>Barra Lateral</h3>
                @show
                
            </div>
        </div>
    </div>
</body>
</html>