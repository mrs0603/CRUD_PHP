<?php
require_once('crud_funcionario.php');
$id=$_GET['id'];

try{
    $excluir=$conexao->query("DELETE FROM funcionarios where id=$id");
    header('location:index.php');

}catch(exception $e){
    echo $e;
}
?>