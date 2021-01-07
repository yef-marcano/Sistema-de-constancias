<?php 


include('config/db.php');

$estado = '';
include('registrar_estudiante.php');


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
    <link href="assets/css/ymspecial.css" rel="stylesheet" />

    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

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
                <a href="http://www.creative-tim.com" class="simple-text">
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
                <li class="active">
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>Estudiantes</p>
                    </a>
                </li>
                <li>
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
                    <a class="navbar-brand" href="#">Estudiantes</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
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
                                <h4 class="title">Agregar estudiantes</h4>
                            </div>
                            <div class="content" >
                                <form action="" method="post"> 
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Cedula </label>
                                                <input type="number" class="form-control" id="cedula_identidad" name="cedula_identidad" placeholder="Ingrese cedula de identidad" value="" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Fecha de Nacimiento </label>
                                                <input type="date" class="form-control" id="fecha" name="fecha"  placeholder="Ingrese fecha de nacimiento" value="" required="" >
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombre </label>
                                                <input type="text" class="form-control"  id="nombres_alumnos" name="nombres_alumnos" placeholder="Ingrese cedula de identidad" value="" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Apellido </label>
                                                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese cedula de identidad" value="" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Grupo </label>
                                                <select type="text" class="form-control" id="grupo" name="grupo" placeholder="Ingrese cedula de identidad"  required="">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Etapa </label>
                                                <select type="text" class="form-control" id="etapa" name="etapa" placeholder="Ingrese cedula de identidad"  required="">
                                                <option value="Maternal">Maternal</option>
                                                <option value="Pre-escolar">Pre-escolar</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Seccion </label>
                                                <select type="text" class="form-control" id="seccion" name="seccion" placeholder="Ingrese cedula de identidad"  required="">
                                                <option value="F">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Sexo </label>
                                                <select type="text" class="form-control" id="sexo" name="sexo" placeholder="Ingrese cedula de identidad"  required="">
                                                <option value="F">Masculino</option>
                                                <option value="M">Femenino</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>      
                                    <button type="submit" name="guardar" id="guardar" class="btn btn-info btn-fill pull-right" >Guardar Estudiante</button>
                                    </form>
                                    <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                </div>  



                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Lista de estudiantes</h4>
                                <p class="category">Estudiantes de la institucion</p>
                            </div>
                            <div class="content table-responsive table-full-width" >
                                <table class="table table-hover table-striped content"  id="tabla">
                                    <thead>
                                        <th>Cedula</th>
                                        <th>Nombre y Apellido</th>
                                        <th>Fecha</th>
                                        <th>Etapa</th>
                                        <th>Grupo</th>
                                        <th>Seccion</th>
                                        <th>Sexo</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = $connection->query("SELECT * FROM usuarios u join estudiantes e on(u.cedula=e.cedula) ");
                                        while($row = $query->fetch_array()){
                                            echo "<tr>";
                                            echo "<td>".$row['cedula']."</td>";
                                            echo "<td>".$row['nombres'].' '.$row['apellidos']."</td>";
                                            echo "<td>".$row['fecha']."</td>";
                                            echo "<td>".$row['etapa']."</td>";
                                            echo "<td>".$row['grupo']."</td>";
                                            echo "<td>".$row['seccion']."</td>";
                                            echo "<td>".$row['sexo']."</td>";
                                            echo "</tr>";
                                        } 
                                        ?>
                                    </tbody>
                                </table>

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
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>




	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
<script>
    $(document).ready(function () {
  $('#tabla').DataTable();
});


  $(function() {
    $( "#fecha" ).datepicker();
  });

</script>

<?php if (empty($estado)){ ?>
<?php }else{ ?>

    <script type="text/javascript">
        $(document).ready(function(){

            //demo.initChartist();

            $.notify({
                icon: 'pe-7s-check',
                message: "<?php echo $estado; ?>"

            },{
                type: 'success',
                color: '#fff',
                timer: 4000
            });

        });
    </script>
<?php } ?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>
