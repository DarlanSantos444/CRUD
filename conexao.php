<?php
    function connectBd(){
        $servername     = "sqlXXX.epizy.com";
        $username       = "epiz_26106940";
        $password       = "8dJBDvcI4g2pr0";
        $dbname         = "epiz_26106940_XXX";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexão Realizada com Sucesso!";
            return $conn;

        } catch(PDOException $e) {
            echo "Error! Conexão Falhou." . $e->getMessage();
        }
    }
?>