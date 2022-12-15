<?php require 'inc/header.inc.php';?>

<h1>ADICIONAR USUARIO</h1>
 

<form method="post" action="adicionar_usuario_submit.php">
    Nome: 
    <input type="text" name="nome"><br><br>
  
    Email: 
    <input type="email" name="email"><br><br>
    
    Senha: 
    <input type="password" name="senha"><br><br>
    
    <legend>PERMISSÕES:</legend>
    <br>
     
    Permissoes: 
    <input type="text" name="permissoes"><br><br>
    

    <input type="submit" name="btCadastrar" value="Adicionar">
</form>  

<?php require 'inc/footer.inc.php';?>

