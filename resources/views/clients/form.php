

<h2>Criar cliente</h2>;
        <br>
        <form method='POST' action='<?= route('clients.save') ?>'>
             <input type='hidden' name='_token' value='<?=  csrf_token() ?> '>
             <!-- <input type='hidden' name='_method' value='PUT'> Como usar método put, delete, etc -->
             <input placeholder='insira seu nome'> <br>
             <input placeholder='insira sua idade'> <br>
             <button>Enviar</button>
        </form>
        
        <br>
        <a href="<?= route('clients.list') ?> "> Lista de Clientes</a>