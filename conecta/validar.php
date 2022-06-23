<?php
    session_start();

    if(isset($_SESSION['usuario']))
    {
        if(isset($_REQUEST['txtNome']) == false)
        {
            header("Location: login.php");
        }
        
    }
    else
    {
        exit(); 
    }

    if(isset($_REQUEST['txtNome']) == false)
    {
        if(!isset($_SESSION['usuario']))
        {
        header("Location: index.php");
        }
        else
        {
            exit();
        }
    }
    
    if($_REQUEST['txtNome'] == "admin" && $_REQUEST['txtSenha'] == "nimda")
    {
        $_SESSION['usuario'] = "Administrador";
        header("Location: index.php");
    }
?>