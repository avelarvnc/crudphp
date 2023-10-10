<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD em PHP</title>
</head>
<body>

<h1>Loja</h1>

<?php

    include_once("../conn.php");

    $sql = 'CALL pi_Produto(?, ?, ?)';
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(1, $_GET["nome"], PDO::PARAM_STR);
    $stmt->bindParam(2, $_GET["valor"], PDO::PARAM_STR);
    $stmt->bindParam(3, $_GET["categoria"], PDO::PARAM_STR);

    $stmt->execute();

    echo "Cadastro realizado com sucesso";

?>
<br><br>
<a href="..\..\index.html">Voltar ao início</a>
    
</body>
</html>
