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
            <a class="nav-link" href="/indexServicos">Consultar</a>
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
        
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Telefone</th>
              <th scope="col">Origem</th>
              <th scope="col">Observação</th>
            </tr>
          </thead>
          
          <tbody>
            @foreach ($servicos as $servicos)
                
            
            <tr>
              <th scope="row">{{$servicos['Nome']}}</th>
              <td>{{$servicos['Telefone']}}</td>
              <td>{{$servicos['Origem']}}</td>
              <td>{{$servicos['Observacao']}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>

       

</body>
</html>