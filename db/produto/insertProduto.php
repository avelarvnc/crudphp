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

    $sql = 'CALL pi_Produto2(?, ?, ?, ?)';
    $stmt = $conn->prepare($sql);

    $nome = $_REQUEST["nome"];
    $valor = $_REQUEST["valor"];
    $categoria = $_REQUEST["categoria"];

    
    $dir = '../../assets/image';
    
    $ext = strtolower(substr($_FILES['foto']['name'],-4));
    $foto = $nome . $ext;
    move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$foto);

    echo 'extensão ' . $ext;

    $path = $dir . '/' . $foto;

    $stmt->bindParam(1, $nome, PDO::PARAM_STR);
    $stmt->bindParam(2, $valor, PDO::PARAM_STR);
    $stmt->bindParam(3, $categoria, PDO::PARAM_STR);
    $stmt->bindParam(4, $path, PDO::PARAM_STR);

    $stmt->execute();

    echo "Cadastro realizado com sucesso";

?>
<br><br>
<a href="..\..\index.html">Voltar ao início</a>
    
</body>
</html>
