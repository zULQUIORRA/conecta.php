<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto pw2 - pagina inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-black navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Pagina Inicial</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="lista.php">Lista</a>
      </li>
      <li class="nav-item">
        <?php if(isset($_SESSION['usuario'])){?>  
          <a class="nav-link" href="cadastro.php">Cadastro</a>
        <?php } else { ?>
          <a class="nav-link active" href="cadastro.php">Cadastro</a>
        <?php } ?>
    </li>
    </ul>
  <?php if(isset($_SESSION['usuario'])){?>
    <form action="logout.php" class="d-flex">
      <input type="submit" value="Sair" class="btn btn-outline-info" />
    </form>
  <?php }else { ?>
    <form action="login.php" class="d-flex">
      <input type="submit" value="Entrar" class="btn btn-outline-info" />
    </form>
  <?php } ?>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col">
            <form action="salvar.php" method="POST">
                  <div> 
                    <label for="txtNome">Nome: </label>
                    <input type="text" name="txtNome" id="txtNome" placeholder="Nome" class="form-control" required/> 
                  </div>
                  <div> 
                    <label for="txtEmail">Email: </label>
                    <input type="email" name="txtEmail" id="txtEmail" placeholder="Email" class="form-control" required/> 
                  </div>
                  <div> 
                    <label for="txtCPF">CPF: </label>
                    <input type="text" name="txtCPF" id="txtCPF" placeholder="CPF" class="form-control" required/> 
                  </div>
                  <div> 
                    <label for="txtRG">RG: </label>
                    <input type="text" name="txtRG" id="txtRG" placeholder="RG" class="form-control" required/> 
                  </div>
                  <div>
                    <input type="submit" value="Salvar" class="btn btn-primary"/> 
                  </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</body>
</html>