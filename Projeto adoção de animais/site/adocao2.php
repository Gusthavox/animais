<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Document</title>
</head>

<body class="bg-success p-2 text-dark bg-opacity-10">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.html"> <ion-icon name="paw-outline" size="large" style="color: lightgreen;"></ion-icon></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
          </li>

          <li class="nav-item">
            <a class="nav-link" href="info.html">Informações</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="listar_veterinario.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Veterinários
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="listar_veterinario.php">Veterinários</a></li>
              <li><a class="dropdown-item" href="veterinarios.html">Cadastro de Veterinário</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="animais.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Animais
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="animais.php">Animais</a></li>
              <li><a class="dropdown-item" href="cadastro_animais.html">Cadastro de animais</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <h2>Cadastro do adotante</h2> <br><br>
    <form action="adocao.php">
      <input type="hidden" name="id_animal" value="<?php echo $_GET['id'] ?>">
      <input type="hidden" name="nome_animal" value="<?php echo $_GET['nome_animal'] ?>">

      <div class="form-floating">
        <input class="form-control" name="nome" type="text" id="nome" placeholder="Nome aqui..."> <br><br>
        <label for="nome">Nome</label>
      </div>

      <div class="form-floating">
        <input class="form-control" name="idade" placeholder="Idade" type="text" id="idade"> <br><br>
        <label for="idade">idade</label>
      </div>


      <div class="form-floating">
        <input class="form-control" name="endereco" placeholder="Endereço" type="text" id="endereco"> <br><br>
        <label for="endereco">Endereço</label>
      </div>

      <div class="form-floating">
        <input class="form-control" name="cpf" placeholder="CPF" type="text" id="cpf"> <br><br>
        <label for="cpf">CPF</label>
      </div>

      <div class="form-floating">
        <input class="form-control" name="celular" placeholder="Celular" type="text" id="celular"> <br><br>
        <label for="celular">Celular</label>
      </div>
      <button class="btn btn-success">Cadastrar</button>
  </div> <br><br>
  </form>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"> </script>
  <script script nomodule src="https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js"> </script>

</body>

</html>