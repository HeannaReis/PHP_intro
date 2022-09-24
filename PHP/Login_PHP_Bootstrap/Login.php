<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> Login </title>    
</head>


<body>
<div class="container text-center">
<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#LoginModal">
  Acessar
</button>
</div>
<form action="autenticador.php" method="post">
<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LoginModelLabel">Área Restrita</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="login-usuario-form">
          <div class="mb-3">
            <label for="usuario" class="col-form-label">Usuário:</label>
            <input type="text" name="usuario" class="form-control" placeholder="digite seu Usuário aqui..." required>
          </div>
          <div class="mb-3">
            <label for="senha" class="col-form-label">Senha:</label>
            <input type="password" name="senha" class="form-control" placeholder="Sua Senha aqui..." required>
          </div>
          <label>
             <input type="checkbox" checked="checked" name="remember"> Lembre de Mim
          </label>
          <div class="mb-3">
           <input type="submit" class="btn btn-outline-primary bt-sm" id="login-usuario-btn" value="Acessar">
          </div>

        </form>
        </form>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>