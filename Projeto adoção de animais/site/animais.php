<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Document</title>
</head>

<body  class="bg-success p-2 text-dark bg-opacity-10">
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



<br><br>
  <div class="mt-5 container">

    <h1>Animais disponíveis:</h1>
    <br>
          <div class="row bg-success p-2 bg-opacity-25 border-success-subtle">
            <div class="row bg-success p-2 bg-opacity-25 border-success-subtle" style="margin-left: 0px;">

              




  
  <div class='mt-5 container'>
      <div class='row row-cols-3'>
<?php




require_once 'conexao.php';

$sql = 'SELECT * FROM tb_animal';

$resultados = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultados) > 0) {
    while ($linha = mysqli_fetch_array($resultados)) {
        $nome_animal = $linha['nome_animal'];
        $especie = $linha['especie'];
        $raca = $linha['raca'];
        $id = $linha['id_animal'];


      
    
       echo "<div class='col-sm'>";

       echo "<div class='card mb-3 ' style='weight: 900px'>";
       echo "<img src='img/gtranzinza.jpg' class='card-img-top'>";
       echo  "<div class='card-body'>";
       echo  "<h5 class='card-title'>$nome_animal</h5>";
       echo "<p class='card-text'>$especie</p>";
       echo"<p class='card-text'>$raca</p>";
       echo "<a href='adocao2.php?id=$id&nome_animal=$nome_animal'name='botao' class='btn btn-success'>Adote!</a>";
       echo"</div>";
       echo"</div>";
       echo"</div>";

        }
    }
 else {
    echo "sem resultados";
}

?>
</div>
</div>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
    <script script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" > </script> 
    <script script  nomodule  src = "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js" > </script>

  </body>

</html>