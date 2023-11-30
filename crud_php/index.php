<?php
require_once('crud_funcionario.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ver funcionarios</h1>

<table>
    <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>IDADE</th>
    <td>
    <a href='editarFuncionario.php?$linha[id]'>editar</a>
    <a href='destroy.php?$linha[id]'>exclui</a>
    </td>
    </tr>
    <?php
    $select = $conexao->query("SELECT * FROM funcionarios");
    while($linha = $select->fetch(PDO::FETCH_ASSOC)) {
        echo " <tr>
        <th>$linha[id]</th>
        <th>$linha[nome]</th>
        <th>$linha[idade]</th>
        <td>
        <a href='editarFuncionario.php?id=$linha[id]'>editar</a>
        <a href='destroy.php?id=$linha[id]'>exclui</a>
        </td>
        </tr>";
    }
    ?>
</table>

    <a href="inserirFuncionario.php">Ir para inserir funcionario</a>
</body>
</html>