<?php 

    include "conexao.php";
    $conn = connectBd();

    try {
        
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO dados (nome_produto,marca, valor,quantidade)
            VALUES (:nome_produto, :marca, :valor, :quantidade)");
            $stmt->bindParam(':nome_produto', $produto);
            $stmt->bindParam(':marca', $marca);
            $stmt->bindParam(':valor', $valor);
            $stmt->bindParam(':quantidade', $quant);

            $produto       = $_POST['nome_produto'];
            $marca    = $_POST['marca'];
            $valor     = $_POST['valor'];
            $quant         = $_POST['quantidade'];
            $stmt->execute();
    
    
            echo "New records created successfully";
    }   catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
    }
    
    $conn = null;

    header('Location: cadastrados.php');
?>