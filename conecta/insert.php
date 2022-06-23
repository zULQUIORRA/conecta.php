<?php
require("conecta.php");


$sqlInsert = "insert into tb_usuario
    (nome_us, email)
    values('victor','victor@etec.com'),
    ('thales','thales@etec.com')
    ('jao','jaolindao@etec.com')";

    $resp = mysqli_query($con,$sqlInsert);

    if ($resp) {
        echo "cadastro feito com sucesso";
        mysqli_close($con);
    
    }
    else {
        echo mysqli_connect_error();
    }

?>