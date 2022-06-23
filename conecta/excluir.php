<?php
require("conecta.php");

$id = 5;
if(isset($_POST['id']))
{
    $id = $_POST['id'];
}
else
{
    echo "<br>informe o id a ser apagado";
    echo "<br>exemplo";
    $link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id=3';
    echo '<a href="'. $link.'">'.$link.'</a>';
    exit();
}
$sqlDelete = "DELETE FROM tb_usuario WHERE id_us = $id";

$resposta = mysqli_query($con,$sqlDelete);
header("Location: lista.php");

?>