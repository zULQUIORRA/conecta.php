<?php
require ("conecta.php");

if(!isset($_REQUEST['id']))
{
    echo "usuario nao identificado";
    exit();
}
$nome = "neusa";
$email = "neusa@gmail.com";
$sqlUpdate = "UPDATE tb_usuario 
                SET nome_us = '$nome', 
                    email_us = '$email' 
                    CPF = '$CPF'
                    RG = '$RG'
                WHERE id_us = $id";
mysqli_query($con, $sqlUpdate);
mysqli_close($con);
?>