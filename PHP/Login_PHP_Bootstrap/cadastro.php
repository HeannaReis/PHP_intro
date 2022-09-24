<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
  <title>Bem vindo !!!</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <h1>Tela Usuário</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav" id="nav-menu">
            <a class="btn btn-outline-primary bt-sm" href="login.php">Sair</a>
          </div>
        </div>
      </div>
    </nav>
    <main class="container-fluid p-3 mb-5">
      <section class="section-page">
        <h2>Usuário</h2>
        <form>
          <div>
            <div class="form-group">
              <label for="nome">Nome Completo</label>
              <input type="text" class="form-control" id="nome" placeholder="Nome">
            </div>
          </div>
          <div class="row">
            <div class="form-group col">
              <label for="peso">Peso Atual</label>
              <input type="number" class="form-control" id="Peso" min="1" placeholder="Kg">
            </div>
            <div class="form-group col">
              <label for="tipo">Sexo</label>
              <select id="tipo" class="form-control">
                <option selected>Selecione um tipo...</option>
                <option value="bebida">Masculino</option>
                <option value="comida">Feminino</option>
                <option value="bebida">Outros</option>
              </select>
            </div>
          </div>

         <div class="row">
            <div class="form-group col">
              <label for="preco">Data Nascimento</label>
              <input type="date" class="form-control" id="Validade" min="1" placeholder="Adicione a Validade do produto">
            </div>

          <div class="form-group">
            <label for="descricao">O que está sentindo ???</label>
            <textarea class="form-control" id="descricao" rows="3" placeholder="Adicione o modo de preparo..."></textarea>
          </div>
          <div class="my-2">
            <button type="submit" class="btn btn-warning text-white">Cadastrar</button>
          </div>
        </form>
      </section>

    </main>
    <footer class="footer d-flex flex-column justify-content-center fixed-bottom">
      <div class="align-self-center" id="footer-menu">
        <a class="nav-link p-0 text-white align-self-sm-center" href="cardapio.php">Cardápio</a>
      </div>
      <div class="align-self-center text-white">
        <h4>Formulário &copy; 2021</h4>
      </div>
    </footer>
  </header>
  <main>
</body>

</html>