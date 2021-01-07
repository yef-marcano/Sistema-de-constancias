<?php
session_start();

include('config/db.php');

$var = 2;
$row = '';

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>SDCT - Yeferson Marcano</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="assets/img/ula.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.yefersonmarcano.com" class="simple-text">
                    SDCT
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>Estudiantes</p>
                    </a>
                </li>
                <li class="active">
                    <a href="constancias.php">
                        <i class="pe-7s-id"></i>
                        <p>Constancias</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Constancias</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-book"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="logout.php">
                               Cerrar sesion
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Buscar constancias</h4>
                            </div>
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Cedula de identidad</label>
                                                <input type="number" class="form-control" name="cedula_id" id="cedula_id" maxlength="11" placeholder="Ingrese cedula de identidad" value="">
                                                <?php //if($var==0){echo "Cédula Incorrecta Ingrese otra cédula";}?>
                                            </div>
                                        </div>
                                    </div>  


                                    <button type="button" name="buscarcedula" id="buscarcedula" class="btn btn-info btn-fill pull-right">Buscar</button>
                                    <p class="error"></p>
                                    <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    
            </div>
        </div> 

        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Datos</h4>
                            </div>
                            <div class="content">
                                <form action="constancia_imprimir.php" method="post" target="_blank"> 
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Cedula </label>
                                                <input type="text" class="form-control" id="cedula_identidad" name="cedula_identidad" placeholder="Ingrese cedula de identidad" value="" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Fecha de Nacimiento </label>
                                                <input type="text" class="form-control" id="fecha" name="fecha"  placeholder="Ingrese cedula de identidad" value="" readonly>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombre </label>
                                                <input type="text" class="form-control"  id="nombres_alumnos" name="nombres_alumnos" placeholder="Ingrese cedula de identidad" value="" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Apellido </label>
                                                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese cedula de identidad" value="" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Grupo </label>
                                                <input type="text" class="form-control" id="grupo" name="grupo" placeholder="Ingrese cedula de identidad" value="" readonly>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Etapa </label>
                                                <input type="text" class="form-control" id="etapa" name="etapa" placeholder="Ingrese cedula de identidad" value="" readonly>
                                            </div>
                                        </div>

                                    </div>  

                                    <button type="submit"  class="btn btn-info btn-fill pull-right" >Generar Constancia</button>
                                    </form>
                                    <div class="clearfix"></div>
                                
                            </div>
                        </div>
                    </div>
                    
            </div>
        </div> 
        </div>   


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Inicio
                            </a>
                        </li>

                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.yefersonmarcano.com">Yeferson Marcano</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>
    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>-->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>


	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>

    <!--  Buscar Cedula    -->
<script>
$(document).ready(function(){
 $('#buscarcedula').click(function(){
  var id= $('#cedula_id').val();
  if(id != '')
  {
   $.ajax({
    url:"buscarcedula.php",
    method:"POST",
    data:{id:id},
    dataType:"JSON",
    success:function(data)
    {
     //alert("llegue");
     document.getElementById("cedula_identidad").value = data.cedula_identidad;
     document.getElementById("nombres_alumnos").value = data.nombres_alumnos;
     document.getElementById("apellidos").value = data.apellidos;
     document.getElementById("fecha").value = data.fecha;
     document.getElementById("grupo").value = data.grupo;
     document.getElementById("etapa").value = data.etapa;
    }
   })
  }else{
   alert("Please Select Employee");
   //$('#employee_details').css("display", "none");
  }
 });
});
</script>
