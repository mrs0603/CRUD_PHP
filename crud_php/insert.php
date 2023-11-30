<?php

require_once('crud_funcionario.php');
$nome=$_POST['nome'];
$idade=$_POST['idade'];

try{
$inserir=$conexao ->prepare("Insert into funcionarios (nome,idade) VALUES (:nome,:idade)");
$inserir->execute([
    
    ':nome' => $nome,
    ':idade' => $idade
]);
header('location:index.php');
}catch(exception $e){
echo $e;
}
 
?>