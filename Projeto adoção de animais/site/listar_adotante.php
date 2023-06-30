<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.html"> <ion-icon name="paw-outline" size ="large" style="color: lightgreen;"></ion-icon></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link dropdown-toggle" href="listar_veterinario.php" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Veterinários
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="listar_veterinario.php">Veterinários</a></li>
              <li><a class="dropdown-item" href="veterinarios.html">Cadastro de Veterinário</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="animais.php" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
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
        <div class="row">
            <?php
            require_once 'conexao.php';

            $sql = 'SELECT * FROM tb_adotante';

            $resultados = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultados) > 0) {
                while ($linha = mysqli_fetch_array($resultados)) {
                    $nome = $linha['nome'];
                    $celular = $linha['celular'];

                    echo "<div class='col-sm'>";
                    echo "<h3>$nome</h3>";
                    echo "<p>$celular</p>";
                    echo "</div>";
                }
            } else {
                echo "sem resultados";
            }
            ?>
            <br><br><a href="./veterinarios.html">Início</a>


            <script script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" > </script> 
    <script script  nomodule  src = "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js" > </script>
</body>

</html>