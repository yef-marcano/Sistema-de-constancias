<?php 
session_start();

$email = $_SESSION["id"];

$nota = '';

include('config/db.php');

include('agregar_nota.php');

include('graficas.php');

$result = "SELECT * FROM notas WHERE fecha_actual IN (SELECT max(fecha_actual) FROM notas)";

    $resultsd1 = mysqli_query($connection, $result);
     while ($row = mysqli_fetch_assoc($resultsd1))
    {
    $ultimo_registro= $row['fecha_actual'];
    }
// Contador de notas rapidas
$resultContar = "SELECT count(*) from notas where estado = 0";

    $contadordenotas = mysqli_query($connection, $resultContar);
     while ($row = mysqli_fetch_assoc($contadordenotas))
    {
    $totaldenotasactivas= $row['count(*)'];
    }


?>
<script type="text/javascript">
    //porcentaje
    var totalgrupoa = '<?php echo $totaldeestudiantes_secciongrupoa;?>'
    var totalgrupob = '<?php echo $totaldeestudiantes_secciongrupob;?>'
    var totalgrupoc = '<?php echo $totaldeestudiantes_secciongrupoc;?>'
    //numeros
    var totalgrupoap = '<?php echo $totaldeestudiantes_secciongrupoa."%";?>'
    var totalgrupobp = '<?php echo $totaldeestudiantes_secciongrupob."%";?>'
    var totalgrupocp = '<?php echo $totaldeestudiantes_secciongrupoc."%";?>'
</script>

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


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


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
                <a href="http://www.yefersonmarcano.com" class="simple-text">
                    SDCT
                </a>
            </div>

            <ul class="nav">
                <li class="active">
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <p>Bienvenido <?php echo $email; ?></p>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <p>Cerrar Sesion</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Estudiantes por grupos</h4>
                                <p class="category">Estadistica de estudiantes registrados por grupo</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> A
                                        <i class="fa fa-circle text-danger"></i> B
                                        <i class="fa fa-circle text-warning"></i> C
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> El total de estudiantes es <?php echo $totaldeestudiantes; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Notas</h4>
                                <p class="category">Agrega notas rapidas</p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">

                                        <?php
                                        $query = $connection->query("SELECT * FROM notas where estado = 0 ");
                                        ?>


                                    <table class="table">
                                      <form action="" method="post" onclick="submit" on>
                                        <tbody>

                                            <?php 

                                        while($row = $query->fetch_array()){
                                            echo "<tr>";
                                            echo "<td style='width: 10%;''><button type='submit' name='eliminar_nota' name='eliminar_nota' rel='tooltip' class='btn btn-danger btn-simple btn-xs' data-original-title='Eliminar' value='".$row['id_notas']."'> <i class='fa fa-times'></i></button></td>"."<td>".$row['nota']."</td></td>";
                                            echo "</tr>";
                                        }
                                             ?>


                                        </tbody>
                                     </form>
                                    </table>

                                    <table class="table">
                                        <tbody>
                                             <tr>
                                                 <td>
                                                    <form action="" method="post">
                                                     <input type="text" class="form-control" name="nota" id="nota" maxlength="50" placeholder="Escribe tus notas" value="" required="" min="10">
                                                 </td>
                                                 <td class="">
                                                    <button type="submit" name="guardar" id="guardar" class="btn btn-info btn-fill pull-right">Guardar nota</button>
                                                 </td>
                                                     </form>    
                                             
                                                 </td>
                                             </tr>
                                        </tbody>

                                    </table>


                                </div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Ultima nota agregada el - <?php echo $ultimo_registro; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">

                   
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

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/grafica_dashboard.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

        });

    </script>


<?php if (empty($estado)){ ?>
<?php }else{ ?>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

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

<?php
if ($totaldenotasactivas <= 4) {
?>
<script>
document.getElementById("guardar").disabled = false;
</script>

<?php } else { ?>   

<script>
document.getElementById("guardar").disabled = true;
</script>

<?php } ?> 
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>
