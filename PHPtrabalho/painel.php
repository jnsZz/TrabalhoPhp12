<?php
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>   
    <header>
    <nav class="navbar navbar-dark bg-secondary">
        <a href="logout.php">
            <button class="btn btn-danger">Sair</button>
        </a>
                <h2 class="texto-branco-head">Olá,
                    <?php
                    echo $_SESSION['nome'];
                    echo " ". $_SESSION['sobrenome'];
                    ?>
                </h2>
      </nav>
</header>
    <h1 class="text-center mt-4">Cadastro de Estudantes!</h1>
        <a href="CRUD/student-create.php">
              <div class="text-center mt-4">
                <button class="btn btn-success">Cadastrar Estudantes</button>
            </div>
        </a>
        <a href="CRUD/index.php">
              <div class="text-center mt-4">
                <button class="btn btn-warning">Estudantes Cadastrados</button>
            </div>
        </a>

</body>

</html>