<?php
// require("conecta.php");
// include("conecta.php");
// require_once("conecta.php");


//"example.com", "user", "password", "database"
define("servidor","localhost");
define("usuario", "root");
define("senha","");
define("banco","modular");

$con = mysqli_connect(servidor, usuario, senha, banco);

    if(!$con){
        echo "<br>nao conectou".mysqli_error();
        exit();
    }

    else {
        echo"<br>conectou";
    }
?>