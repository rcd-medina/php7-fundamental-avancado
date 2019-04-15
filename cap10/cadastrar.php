
<?php

require_once("estados.php");

?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Cadastro de Pessoas</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Cadastro de Pessoas</a>

<!--
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 -->

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="listar.php">Listar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="cadastrar.php">Cadastrar</a>
      </li>
    <!--
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
    -->
  </div>
</nav>

<main role="main" class="container">

  <div class="starter-template">
      
      <form style="text-align: left" action="salvar.php" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome da pessoa" value=""/>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
              <label for="idade">Idade</label>
              <input class="form-control" type="idade" name="idade" id="idade" placeholder="Idade da pessoa" value=""/>
            </div>

            <div class="form-group col-md-8">
              <label for="telefone">Telefone</label>
              <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Telefone da pessoa" value=""/>
            </div>
        </div>

        <div class="form-group">
          <label for="endereco">Endereço</label>
          <input class="form-control" type="text" name="endereco" id="endereco" placeholder="Endereço da pessoa" value=""/>
        </div>

        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="cidade">Cidade</label>
            <input class="form-control" type="text" name="cidade" id="cidade" placeholder="Cidade da pessoa" value=""/>
          </div>

          <div class="form-group col-md-4">
            <label for="estado">Estado</label>
            <select class="form-control" name="estado" id="estado">
<?php
            foreach ($estados as $i => $uf) {
              echo "<option value=\"$i\">$uf</option>";
            }
?>
            </select>
          </div>
        </div>
        <br>
        <br>
        <button class="btn btn-primary" type="submit">Enviar</button>
        <button class="btn btn-warning" type="reset">Limpar</button>
      </form>
      <!--
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      -->
  </div>

</main><!-- /.container -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!--
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    -->
    
    <!--
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    -->
</body>
</html>
