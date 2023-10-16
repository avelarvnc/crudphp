<?php

    include_once("db/conn.php");

    $sql = 'SELECT * FROM Produto';
    $stmt = $conn->query($sql);

    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='card-produto'>";
        echo "<h2>{$linha['nome']}</h2>";
        echo "<img src='assets/image/{$linha['imagem']}' />";
        echo "</div>";
    }

    $stmt->execute();

?>