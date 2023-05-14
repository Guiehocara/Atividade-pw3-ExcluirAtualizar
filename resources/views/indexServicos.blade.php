<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Serviços</title>
  </head>
  <body>
  
    <!-- Navbar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: lightblue; position: fixed; width: 100%;">
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
  
    @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
        <br>
        <br>

        <br>
        <table class="table">
          <thead>
            <tr>
            <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Telefone</th>
              <th scope="col">Origem</th>
              <th scope="col">Data de Contato</th>
              <th scope="col">Observação</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          
          <tbody>
            
             @foreach
            
            <tr>
              <th scope="row">{{$servicos['id']}}</th>
              <td>{{$servicos['Nome']}}</td>
              <td>{{$servicos['Telefone']}}</td>
              <td>{{$servicos['Origem']}}</td>
              <td>{{$servicos['DataContato']}}</td>
              <td>{{$servicos['Observacao']}}</td>
              <td>

              <a href="/atualizar?id={{$servicos['id']}}">
              <button type="button" class="btn btn-primary" style="margin-left:10px; margin-bottom: 10px;" name="Id" value="{{$servicos['id']}}">
              Atualizar
              </a>
             

              <a href="/excluir?id={{$servicos['id']}}">
               <button type="button" class="btn btn-primary"  style="margin-left:10px; margin-bottom: 10px;" name="Id" value="{{$servicos['id']}}">
               Excluir
               </button>
              </a>

               </td>
            </tr>
            @endforeach
          </tbody>
        </table>

       

</body>
</html>