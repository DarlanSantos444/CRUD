<?php include "_includes/header.php"; ?>

<!-- Content Wrapper -->
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: 2em;">
                        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-university"></i> Produtos</h1>
                    </div>

                    <div class="row">
                        
                        <div class="col-xl col-lg">
                            
                                
                                <!-- Card Body -->
                                
                                        <?php 
                                            

                                            
                                        ?>

                                        
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="text-align: center;"><i class="fas fa-user icon"></i></th>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Marca</th>
                                                <th scope="col">Valor</th>
                                                <th scope="col">Quantidade</th>
                                                <th scope="col" style="text-align: center;"><i class="fas fa-user-edit icon"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                    
                                                include "conexao.php";
                                                $conn = connectBd();

                                                try {
                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                    $stmt = $conn->prepare("SELECT * FROM dados");
                                                    $stmt->execute();

                                                
                                                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                foreach($stmt->fetchAll() as $k=>$v) {
                                                    //echo $v;
                                                    echo '<tr>';
                                                        echo '<td style="text-align: center;"><i class="fas fa-money-check-alt icon"></i></td>';
                                                        echo '<td>' .$v['id']. '</td>';
                                                        echo '<td>' .$v['nome_produto']. '</td>';
                                                        echo '<td>' .$v['marca']. '</td>';
                                                        echo '<td>' .$v['valor']. '</td>';
                                                        echo '<td>' .$v['quantidade']. '</td>';
                                                        echo '<td style="text-align: center;"> <a href="editar.php?id='.$v['id'].'"><i class="fas fa-edit"></i></a> <a href="vercadastro.php?id='.$v['id'].'"><i class="fas fa-folder"></i></a> <a  href="apagar.php?id='.$v['id'].'"><i class="fas fa-trash"></i></a></td>';
                                                    echo '</tr>';
                                                }
                                                } catch(PDOException $e) {
                                                    echo "Error: " . $e->getMessage();
                                                }
                                                $conn = null;
                                            
                                        ?>
                                            
                                        </tbody>
                                    </table>
                        </div>
                    </div>
                                                              
                </div>
        
            </div>
            </div>
<?php include "_includes/footer.php"; ?>