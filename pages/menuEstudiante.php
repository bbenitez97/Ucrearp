<?php
	echo '<!DOCTYPE html>
<html>          
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="../bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="../bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

    <link href="../bootstrap/vendor/morrisjs/morris.css" rel="stylesheet">

    <link href="../bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            
</head>
<body>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: #0006A3">
        <div class="navbar-header">
            <a class="navbar-brand" href="electivasEstudiante.php" style="text-decoration: none; color: #fff;">UCREARP</a>
                
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button" style="background-color: #fff;">
                <span class="fa fa-bars"></span>
            </button>
        </div>
            <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">           
        <li class="dropdown rep">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
        <ul class="dropdown-menu dropdown-user">
            
            <li>
                <a href="confiEstudiante.php"><i class="fa fa-gear fa-fw"></i> Configuracion</a>
            </li>
            <li class="divider"></li>
            <li>
                <a  href="../">
                    <i class="fa fa-sign-out fa-fw"></i> Salir 
                </a>
            </li>
        </ul>
                    <!-- /.dropdown-user -->
            </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" id="pc">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav">
                        </li>
                        
                        
                        
                        <li>
                            <p class="cabe"><i class="fa fa-file-text fa-fw"></i>Lista Electivas<span class="fa arrow"></span></p>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="electivasEstudiante.php"><i class="fa fa-file-text fa-fw"></i> Lista por cupos</a>
                                </li>
                                <li>
                                    <a href="listaElecProfesor.php"><i class="fa fa-file-text fa-fw"></i>Lista por Profesor </a>
                                </li>
                                <li>
                                    <a href="listaElecCurso.php"><i class="fa fa-file-text fa-fw"></i>Lista por electivas </a>
                                </li>
                                <li>
                                    <a href="listaElecEstudiante.php"><i class="fa fa-file-text fa-fw"></i>Mis electivas </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                       
                       
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
            <div class="navbar-default sidebar" role="navigation" id="cel">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-cogs fa-fw"></i> Electivas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="electivasEstudiante.php"><i class="fa fa-file-text fa-fw"></i> Lista por cupos</a>
                                </li>
                                <li>
                                    <a href="listaElecProfesor.php"><i class="fa fa-file-text fa-fw"></i>Lista por Profesor </a>
                                </li>
                                <li>
                                    <a href="listaElecEstudiante.php"><i class="fa fa-file-text fa-fw"></i>Lista por Estudiante </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        </nav>

    <script src="../bootstrap/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bootstrap/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../bootstrap/dist/js/sb-admin-2.js"></script>
    
    
</body>
</html>';

?>