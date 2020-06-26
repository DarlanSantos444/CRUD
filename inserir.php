<?php 
    
    include "conexao.php";
    $conn = conectBd();
    
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO dados (nome, marca, valor, quantidade)
        VALUES ('nome_produto', 'marca', 'valor', 'quantidade')";

        $conn->exec($sql);
        echo "New record created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
    $conn = null;
?>