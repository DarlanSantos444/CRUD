<?php

    include "conexao.php";
    $conn = connectBd();

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM dados WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $id = $_GET['id'];
        $stmt->execute();

    foreach($stmt->fetchAll() as $k=>$v) {

        $id         = $v['id'];
        $produto    = $v['nome_produto'];
        $marca      = $v['marca'];
        $valor      = $v['valor'];
        $quant      = $v['quantidade'];
    }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>

<?php include('header.php'); ?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: 2em;">
                        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-university"></i> Informações de <?php echo $produto; ?></h1>
                    </div>

                    <div class="row">
                        
                        <div class="col-xl col-lg"> 
                                    
                            <div class="card mb-4 py-3 border-left-primary shadow">
                                <div class="card-body">
                                    <h5><i class="fas fa-key icon"></i></h5>
                                    <p><strong>Indentificação: </strong><?php echo $id; ?></p>
                                    <p><i class="fas fa-user icon"></i></p>
                                    <p><strong>Nome: </strong><?php echo $produto; ?></p>
                                    <p><strong>Marca: </strong><?php echo $marca; ?></p>
                                    <p><strong>Valor: </strong><?php echo $valor; ?></p>
                                    <p><strong>Quantidade: </strong><?php echo $quant; ?></p>
                                </div>
                            </div> 
                                    
                            
                        </div>


                    </div>
                    <!-- div row-->                                                 
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

<?php include "_includes/footer.php"; ?>