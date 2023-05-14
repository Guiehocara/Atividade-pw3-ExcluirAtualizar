<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Serviços</title>
    @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
</head>
<body>

  <!-- Navbar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: lightblue;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema Web</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/consulta">Consultar</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--Navbar-->
<br>
<!-- Form -->
<div style="width: 80%;  
    display: block;
    margin-left: auto;
    margin-right: auto">
<form action="/atualizar" method="post">
  @csrf
  <h3> <b>Atualizar Agendamento<b> </h3>
  
  <br> 
  <div class="mb-3">
<h2> id : {{$servicos['id']}} </h2>
  <input type="" class="form-control" id="exampleFormControlInput1" placeholder="" name="Id" value="{{$servicos['id']}}" hidden>
  
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nome:</label>
  <input type="" class="form-control" id="exampleFormControlInput1" placeholder="" name="Nome" value="{{$servicos['Nome']}}">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Telefone:</label>
  <input type="" class="form-control" id="exampleFormControlInput1" placeholder="" name="Telefone" value="{{$servicos['Telefone']}}">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Origem:</label>
  <select class="form-select" aria-label="Default select example" name="Origem">
  <option selected value="Celular">Celular</option>
  <option value="Telefone Fixo">Telefone Fixo</option>
  <option value="Email">Email</option>
</select>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Data de Contato:</label>
  <input class="form-control" type="date"  id="exampleFormControlTextarea1" rows="1" name="DataContato" value="{{ $servicos['DataContato']}} "></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Observação:</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Observacao" value="{{$servicos['Observacao']}}"></textarea>
</div>
<br>
<button type="submit" class="btn btn-primary">Enviar</button>

</form>
    </div>
<!-- Form -->
</body>
</html>