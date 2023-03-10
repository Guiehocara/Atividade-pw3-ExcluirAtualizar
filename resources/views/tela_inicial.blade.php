<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        
        
        
        
        ]);
</head>
<body>
    <div class="container">
    <h1> Login </h1>
    </div>
<div class="container">
<form action="" method="post">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email adress</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
        <button type="button" class="btn btn-primary">Enviar</button>
    </div>
  </form>
</div>
</body>
</html>