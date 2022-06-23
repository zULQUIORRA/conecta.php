<?php
require("conecta.php");

$sqlSelect = "SELECT * FROM tb_usuario";
$respostas = mysqli_query($con, $sqlSelect);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>primeiro nome</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php while($coluna = mysqli_fetch_assoc($respostas)){?>
        <tr>
            <td><?php echo $coluna['nome_us']?></td>
            <td><?php echo $coluna['email']?></td>
            <td><?php echo $coluna['CPF']?></td>
            <td><?php echo $coluna['RG']?></td>
            <td>
              <form action="excluir.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $coluna['id_us']?>" />
                <input type="submit" value="Excluir" class="btn btn-danger"/> 
              </form>
            </td>
        </tr>
    <?php }?>
    </tbody>
</table>
</body>
</html>