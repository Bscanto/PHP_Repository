<?php 

    //variaveis para o menu
    $pag = @$_GET["pag"];
    $menu1 = "mecanicos";
    $menu2 = "recepcionistas";
    $menu3 = "menu3";
    $menu4 = "menu4";
    $menu5 = "menu5";
    $menu6 = "menu6";

 ?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Bruno Canto">
        

        <title>Painel Administrativo</title>

        <!-- Fontes personalizadas para este modelo-->
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Estilos personalizados para ese modelo-->
        <link href="../css/sb-admin-2.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        
        <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        
         
    <link rel="icon" href="../img/logo-favicon.ico" type="image/x-icon">

    </head>

    <body id="page-top">

        <!--Wrapper da página-->
        <div id="wrapper">

            <!-- Barra Lateral -->
            <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Marca da barra lateral -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

                    <div class="sidebar-brand-text mx-3">Administrador</div>
                </a>

                <!-- Divisor -->
                <hr class="sidebar-divider my-0">



                <!-- Divisor -->
                <hr class="sidebar-divider">

                <!-- Cabeçalho -->
                <div class="sidebar-heading">
                    Cadastros
                </div>



                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-users"></i>
                      <span>Pessoas</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">PESSOAS:</h6>
                            <a class="collapse-item" href="index.php?pag=<?php echo $menu1 ?>">Mecanicos</a>
                            <a class="collapse-item" href="index.php?pag=<?php echo $menu2 ?>">Recepcionista</a>

                        </div>
                    </div>
                </li>

                <!-- Item de navegação - Menu de colapso de utilitários -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-home"></i>
                        <span>Opções XX</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Dados XX:</h6>
                            <a class="collapse-item" href="index.php?pag=<?php echo $menu3 ?>">Menu 3</a>
                            <a class="collapse-item" href="index.php?pag=<?php echo $menu4 ?>">Menu 4</a>
                            <a class="collapse-item" href="index.php?pag=<?php echo $menu5 ?>">Menu 5</a>

                        </div>
                    </div>
                </li>

                <!-- Divisor -->
                <hr class="sidebar-divider">

                <!-- Cabeçalho -->
                <div class="sidebar-heading">
                    Consultas
                </div>



                <!-- Item de navegação - gráficos -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pag=<?php echo $menu6 ?>">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Menu 6</span></a>
                </li>

                <!-- Item de Navegação- Tabelas -->
              

                <!-- Divisor -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Alternador da barra lateral (barra lateral) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- Fim da barra lateral -->

            <!-- Wrapper de conteúdo -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Conteúdo principal -->
                <div id="content">

                    <!-- Barra Superior -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Alternar barra lateral (barra superior) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <img  src="../img/logo2.png" width="70">



                        <!-- Barra superior intermediária -->
                        <ul class="navbar-nav ml-auto">



                            <!-- Item de navegação - Informações do usuário -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nome do usuario</span>
                                    <img class="img-profile rounded-circle" src="../img/sem-foto.jpg">

                                </a>
                                <!-- Menu suspenso - Informações do usuário -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#ModalPerfil">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-primary"></i>
                                        Editar Perfil
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../logout.php">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
                                        Sair
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- Fim da barra superior -->

                    <!-- Conteúdo da página inicial -->
                    <div class="container-fluid">

                        <?php if (@$pag == null) { 
                        @include_once("home.php"); 
                        
                        } else if (@$pag==$menu1) {
                        @include_once(@$menu1.".php");
                        
                        } else if (@$pag==$menu2) {
                        @include_once(@$menu2.".php");

                         } else if (@$pag==$menu3) {
                        include_once(@$menu3.".php");

                        } else if (@$pag==$menu4) {
                        @include_once(@$menu4.".php");

                        } else if (@$pag==$menu5) {
                        @include_once(@$menu5.".php");

                        } else if (@$pag==$menu6) {
                        @include_once(@$menu6.".php");

                       
                        
                        } else {
                        @include_once("home.php");
                        }
                        ?>
                        
                        

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- Fim do conteúdo principal -->



            </div>
            <!-- Fim do wrapper de conteúdo -->

        </div>
        <!-- Wrapper de fim de página -->

        <!-- Role até o botão superior -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>




        <!--  Modal Perfil-->
        <div class="modal fade" id="ModalPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>



                    <form id="form-perfil" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label >Nome</label>
                                        <input value="<?php echo $nome ?>" type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                                    </div>

                                    <div class="form-group">
                                        <label >CPF</label>
                                        <input value="<?php echo $cpf ?>" type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
                                    </div>

                                    <div class="form-group">
                                        <label >Email</label>
                                        <input value="<?php echo $email ?>" type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <label >Senha</label>
                                        <input value="" type="password" class="form-control" id="text" name="senha" placeholder="Senha">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="col-md-12 form-group">
                                        <label>Foto</label>
                                        <input value="<?php echo $img ?>" type="file" class="form-control-file" id="imagem" name="imagem" onchange="carregarImg();">

                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <img src="../img/profiles/<?php echo $img ?>" alt="Carregue sua Imagem" id="target" width="100%">
                                    </div>
                                </div>
                            </div> 



                            <small>
                                <div id="mensagem" class="mr-4">

                                </div>
                            </small>



                        </div>
                        <div class="modal-footer">



                            <input value="<?php echo $idUsuario ?>" type="hidden" name="txtid" id="txtid">
                            <input value="<?php echo $cpf ?>" type="hidden" name="antigo" id="antigo">

                            <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" name="btn-salvar-perfil" id="btn-salvar-perfil" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>


        <!-- Plug-in principal JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Scripts personalizados para todas as páginas -->
        <script src="../js/sb-admin-2.min.js"></script>

        <!-- Plug-ins de nível de página -->
        <script src="../vendor/chart.js/Chart.min.js"></script>

        <!-- Scripts personalizados em nível de página -->
        <script src="../js/demo/chart-area-demo.js"></script>
        <script src="../js/demo/chart-pie-demo.js"></script>

        <!-- Plug-ins de nível de página -->
        <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Scripts personalizados em nível de página -->
        <script src="../js/demo/datatables-demo.js"></script>

        <!-- Scripts para Mascara -->
        <script src="../js/mascaras.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        

    </body>

</html>



