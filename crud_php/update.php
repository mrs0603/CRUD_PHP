<?php

require_once("conexao.php");
if(!isset($_GET['id'])){
    header("location:index.php");
}
$id=$_GET['id'];
$nome=$_GET['nome'];
$nome=$_GET['idade'];


try{
    $update->$conexao->prepare("UPDATE usuarios SET nome=:nome, idade=: WHERE id=$id");
    $update->execute([
        ':nome' => $nome,
        ':idade' => $idade
    ]);
    header('location:index.php');
}
catch(exception $e){
    echo $e;
    }
?>