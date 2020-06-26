<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CRUD</title>
  <?php
    include "_includes/header.php";
    ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php
    include "_includes/leftnav.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Cadastrar Produtos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Cadastro</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>



    <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: 2em;">
                        <h1 class="h3 mb-0 text-gray-800"></i>Adicionar Produto</h1>
                    </div>

                    <div class="row">
                        
                        <div class="col-xl col-lg">
                            <div class="card mb-4">
                                
                                <!-- Card Body -->
                                <div class="card-body">
                                        
                                        <form class="user" action="dados_user.php" method="POST" id="form_loja" name="form_loja">

                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="nome_produto">Nome do Produto</label>
                                                    <input type="text" class="form-control form-control-user" id="nome_produto" name="nome_produto" placeholder="Nome do Produto" require>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="marca">Marca</label>
                                                    <input type="text" class="form-control form-control-user" id="marca" name="marca" placeholder="Marca" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="valor">Valor</label>
                                                    <input type="number" class="form-control form-control-user" id="valor" name="valor" placeholder="valor" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">Quantidade</label>
                                                    <input type="number" class="form-control form-control-user" id="quantidade" name="quantidade" placeholder="Quantidade" required>
                                                </div>
                                            </div>

                                            <button class="btn btn-primary btn-icon-split shadow" style="border-radius: 10em;" type="Submit">
                                                <span class="text">Adicionar Produto</span>
                                            </button>
                      
                                            <button class="btn btn-danger" style="border-radius: 10em;" type="Reset">
                                                <span class="text">Limpar</span>
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
  <?php
    include "_includes/footer.php";
  ?>


</body>
</html>