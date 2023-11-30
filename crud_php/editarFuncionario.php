<?php
require_once("crud_funcionario.php");
if(!isset($_GET['id'])){
    header("location:index.php");
}
$id=$_GET['id']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="editarFuncionario.php?id=<?$id?>" method="post">
   
    <?php
    $select = $conexao->query("SELECT nome,idade FROM FUNCIONARIOS WHERE id=$id");
    while($linha = $select->fetch(PDO::FETCH_ASSOC)) {
        echo "
        <label for='nome'>Nome</label>
        <input type='text' name='nome' value=$linha[nome]/> 
        <label for='idade'>Idade</label>
        <input type='text' name='idade' value=$linha[idade]/> 
        <button type='subimit'>Editar dados</button>";
    }
    ?>
    </form> 
</body>
</html>