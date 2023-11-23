<div class="form-group">
  <label for="name" class="col-sm-2 control-label">Nome</label>
  <input type="text" class="form-control" name="name" id="name" value="{{ @$client->name }}">
</div>

<div class="form-group">
  <label for="mail" class="col-sm-2 control-label">Email</label>
  <input type="email" class="form-control" name="email" id="email" value="{{ @$client->email }}">
</div>

<div class="form-group">
  <label for="age" class="col-sm-2 control-label">Idade</label>
  <input type="number" class="form-control" name="age" id="age" value="{{ @$client->age }}">
</div>

<div class="form-group">
  <label for="photo" class="col-sm-2 control-label">Foto</label>
  <input type="file" class="form-control" name="photo" id="photo">
</div>

<button class="btn btn-success">Salvar</button>