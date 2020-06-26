<?php 

    include "conexao.php";
    $conn = connectBd();

    try {
        
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            // prepare sql and bind parameters
            $stmt = $conn->prepare("UPDATE dados SET nome_produto=:nome_produto, marca=:marca, valor=:valor WHERE id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nome_produto', $produto);
            $stmt->bindParam(':marca', $marca);
            $stmt->bindParam(':valor', $valor);
        
            $id                = $_GET['id'];
            $produto       = $_POST['nome_produto'];
            $marca        = $_POST['marca'];
            $valor        = $_POST['valor'];
            $stmt->execute();
    
    
            echo "Cadastro atualizado com sucesso!";
    }   catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
    }
    
    $conn = null;

    header('Location: vercadastro.php');
?>