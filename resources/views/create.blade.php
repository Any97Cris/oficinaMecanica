<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Cliente</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <!--Favicon-->
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
</head>
<body>

    <div class="container bg-light fundoDivPrincipal mt-5 p-4">
        <form action="/create/cliente" method="POST">
        <h3>Cadastro de Cliente</h3>
        <div class="form-group mt-5 mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control" required placeholder="Nome do Cliente">
        </div style="display:flex;">
        
        <div class="form-group mt-2 mb-3">
            <label class="form-label">Contato</label>
            <input type="text" class="form-control" name="contact" id="contact" required placeholder="Número para contato">
        </div>

        <select class="form-select mb-5" aria-label="Default select example" required>
            <option selected>Qual o tipo de Contato</option>
            <option value="1">Empresa</option>
            <option value="2">Residencial</option>
            <option value="3">Pessoal</option>
          </select>
        
        <label>Informçãoes do Carro</label>
        <div class="form-group">
            <label class="form-label">Modelo</label>
            <input type="text" class="form-control" name="modelo" id="modelo" required placeholder="Digite o modelo do Carro...."/>
        </div>
        <div class="form-group">
            <label class="form-label">Placa</label>
            <input type="text" class="form-control" name="placa" id="placa" required placeholder="Digite o placa do Carro...."/>
        </div>
        <div class="form-group mb-5">
            <label class="form-label">Marca</label>
            <input type="text" class="form-control" name="marca" id="marca" required placeholder="Digite o marca do Carro...."/>
        </div>

        <label>Serviço - Pintura do Veículo</label>
        <div class="form-group mb-5">
            <label class="form-label">Cor</label>
            <input type="text" class="form-control" name="cor" id="cor" required placeholder="Digite a cor para pintura..."/>
        </div>
        <div class="text-center">
            <a href="/users" class="btn btn-warning">Página Inicial</a>
            <input type="submit" class="btn btn-success">
        </div>
    </form>
    </div>
    

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>