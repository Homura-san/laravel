<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <title>Document</title>
</head>
<body>
<h2>Criar cliente</h2>;
        <br>
        <form method='POST' action='<?= route('clients.save') ?>'>
          <div class="form-group">
          <input type='hidden' name='_token' value='<?=  csrf_token() ?> '>
             <!-- <input type='hidden' name='_method' value='PUT'> Como usar método put, delete, etc -->
             <input class="form-control" placeholder='insira seu nome'> <br>
             <input class="form-control" placeholder='insira sua idade'> <br>
             <button class="btn btn-success">Enviar</button>
          </div>
             
        </form>
        
        <br>
        <span class="badge badge-pill badge-primary">
        <a href="<?= route('clients.list') ?> "> Lista de Clientes</a>
        </span>
             
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 

