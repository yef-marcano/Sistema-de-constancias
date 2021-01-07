<?php
//include connect.php page for database connection
include('config/db.php');

$estado = '';

if(!isset($_SESSION["id"]))
{
//session_start();
}else{

header('Location: dashboard.php');
}

//if submit is not blanked i.e. it is clicked.
/*if (isset($_REQUEST['submit'])) {
    
    if ($_POST['email'] == "" || $_POST['password'] == "") {
        
        echo "Field must be filled";
        
    } else {
        
        $sqlogin = "select * from user where email= '" . $_POST['email'] . "' &&  password ='" . $_POST['password'] . "'";
        $result = mysqli_query($connection, $sqlogin) or exit("Sql Error" . mysqli_error());
        
        $num_rows = mysqli_num_rows($result);
        
        if ($num_rows > 0) {
            
            $_SESSION["id"] = $_POST['email'];
            
            header('Location: dashboard.php');
            //OR just simply print a message.
            //Echo "You have logged in successfully";  
        } else {

            $estado = 'Los datos incorrectos';
            //var_dump($num_rows);
            //echo "username or password incorrect";
        }
    }
}*/

 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["name"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username =  $_POST["name"];
           $email =  $_POST["email"];  
           $password =   $_POST["password"];  
           $password2 = password_hash($password, PASSWORD_DEFAULT);  
           $query = "INSERT INTO user(name, email, password) VALUES('$username','$email', '$password2')";  
           if(mysqli_query($connection, $query))  
           {  
                //echo '<script>alert("Registration Done")</script>'; 
                $estado = "Registro con exito";
           }  
      }  
 }  

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Iniciar sesion</title>

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
        <!-- Navbar -->
    
        <!-- End Navbar -->
        <div class="full-page  section-image" data-color="orange" data-image="assets/img/ula.jpg" ;>
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">

                <div class="container">


                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <form class="form" method="POST" action="" role="form">
                            <div class="card card-login content">
                                <div class="card-header ">
                                    <h3 class="header text-center">Registrarse en SDCT</h3>
                                </div>
                                <div class="card-body content">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" placeholder="Ingresa su nombre" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Correo Electronico</label>
                                            <input type="email" placeholder="Ingresa el Electronico" name="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input type="password" placeholder="Contraseña" name="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto content text-center">
                                    <button type="submit" name="register" id="register" class="btn btn-success btn-wd">Registrarme</button>
                                </div>

                                <div class="card-footer mr-auto content text-center">
                                    <a href="index.php"><button type="button" name="" id="" class="btn btn-warning btn-wd">Iniciar sesion</button></a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="full-page-background" style="background-image: url(assets/img/ula.jpg) "></div>
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
    <script src="assets/js/demo.js"></script>

<?php if (empty($estado)){ ?>
<?php }else{ ?>

    <script type="text/javascript">
        $(document).ready(function(){
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
