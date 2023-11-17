<div class="form-group">
  <label for="name" class="col-sm-2 control-label">Nome</label>
  <input type="text" class="form-control" id="name" value="{{ @$client->name }}">
</div>

<div class="form-group">
  <label for="mail" class="col-sm-2 control-label">Email</label>
  <input type="email" class="form-control" id="mail" value="{{ @$client->email }}">
</div>

<div class="form-group">
  <label for="age" class="col-sm-2 control-label">Idade</label>
  <input type="number" class="form-control" id="age" value="{{ @$client->age }}">
</div>

<button class="btn btn-success">Salvar</button>