<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AgendaSenai</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <h1><img src="img/senai.png" alt="Logo da Agenda"style= width:15%;></h1>
        </header>

<?php
session_start();
require 'classes/usuario.class.php';
if(!empty($_POST['email'])){
    $email = addslashes($_POST['email']);
    $senha = md5($_POST['senha']);

    $usuario = new Usuarios();
    if($usuario->fazerLogin($email, $senha)){
        header("Location: index.php");
        exit;
    }
    else{
        echo"Usuário e/ou senha estão INCORRETOS!";
    }
  }

?>
<h1>LOGIN</h1>
<fieldset>
    <form method="post">
        Email: <br>
        <input type="email" name="email"><br><br>
        Senha: <br>
        <input type="password" name="senha"><br><br>
        <input type="submit" value="Entrar">
    </form>
</fieldset>