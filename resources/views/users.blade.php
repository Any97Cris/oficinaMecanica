<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Inicial</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <!--Favicon-->
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light mb-5">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Página Inicial</a>
              </li>              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/create">Cadastrar</a>
              </li>              
            </ul>
          </div>
        </div>
      </nav>
    
    <div class="container-fluid mb-5 centralizarSearch">
        <input type="text" placeholder="Pesquisar..." class="form-control search me-1"/>     
        <button class="btn btn-dark">Pesquisar</button>   
    </div>

    <div class="container bg-light fundoDivPrincipal">
        <h3 class="text-center mb-5">Serviços do Dia</h3>
        <table class="table">
            <thead>
                <th scope="col" width="10%">Data</th>
                <th scope="col" width="20%">Nome</th>
                <th scope="col" width="10%">Contato</th>
                <th scope="col" width="50%">Serviço</th>                
                <th scope="col" width="10%">Ações</th>                
            </thead>
        </table>
    </div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>