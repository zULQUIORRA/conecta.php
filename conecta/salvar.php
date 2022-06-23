<?php
require("conecta.php");


$sqlInsert = "insert into tb_usuario
    (nome_us, email)
    values('victor','victor@etec.com'),
    ('thales','thales@etec.com')
    ('jao','jaolindao@etec.com')";

    extract($_POST);
    $txtNome="cae";
   $txtEmail="cae@gmail.com";
    
    $sqlInsert = "INSERT INTO tb_usuario(nome_us, email) VALUES('$txtNome','$email')";

    $resp = mysqli_query($con,$sqlInsert);

    if ($resp) 
    {
        header("Location: lista.php");
    }
    else 
    {
        echo mysqli_connect_error();
    }

?>