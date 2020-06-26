<?php

    include "conexao.php";
    $conn = connectBd();

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM dados WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $id       = $_GET['id'];
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
                        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-edit"></i> Editar Cadastro</h1>
                    </div>

                    <div class="row">
                        
                        <div class="col-xl col-lg">
                            <div class="card mb-4">
                                
                                <!-- Card Body -->
                                <div class="card-body">
                                        
                                        <form class="user"  method="POST" id="form_conta" name="form_conta" action="update_dados.php?id=<?php echo $id;?>">

                                            <div class="form-group row">
                                                <div class="col-sm mb-3 mb-sm-0">
                                                    <input type="text" class="form-control form-control-user" id="id" name="id" require disabled value="<?php echo $id;?>">
                                                </div>
                                                <div class="col-sm mb-3 mb-sm-0">
                                                    <input type="text" class="form-control form-control-user" id="nome_produto" name="nome_produto" required value="<?php echo $produto;?>">
                                                </div>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control form-control-user" id="marca" name="marca" required value="<?php echo $marca;?>" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="number" class="form-control form-control-user" id="valor" name="valor" required value="<?php echo $valor;?>" disabled>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control form-control-user" id="quantidade" name="quantidade" required value="<?php echo $quant;?>" disabled>
                                                </div>
                                            </div>


                                            <button class="btn btn-primary btn-icon-split shadow" style="border-radius: 10em;" type="Submit">
                                                <span class="text">Salvar</span>
                                            </button>

                                        </form>
                                        
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- div row-->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

<?php include('footer.php'); ?>
