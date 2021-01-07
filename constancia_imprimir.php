<?php 
session_start();

/*$cedula_identidad = '';
$fecha = '';
$nombres_alumnos = '';
$apellidos = '';
$grupo = '';*/

$cedula_identidad=$_POST['cedula_identidad'];
$fecha=$_POST['fecha'];
$nombres_alumnos=$_POST['nombres_alumnos'];
$apellidos=$_POST['apellidos'];
$grupo=$_POST['grupo'];
$etapa=$_POST['etapa'];



?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Constancia</title>
	<link rel="stylesheet" href="assets/css/constancia_imprimir.css">
</head>
<body>
	<section>
		<div><img src="assets/img/logo.jpg" alt="logo"></div>
		<p id="center" style="font: 11pt sans-serif">
		<strong>
			REPÚBLICA BOLIVARIANA DE VENEZUELA
			<br>MINISTERIO DEL PODER POPULAR PARA LA EDUCACIÒN 
			<br>CEI SIMONCITO “SÁNCHEZ CARRERO”
			<br>CÓDIGO 18004108970
			<br>PREGONERO ESTADO TÀCHIRA
		</strong>
		</p>
		<div><img src="assets/img/simoncito.jpg" alt="Simoncito"></div>
	</section>
	<h3>CONSTANCIA DE  ESTUDIO</h3>
	<p style="font: 14pt serif">
		Quién suscribe <strong>Msc. Carmen Silbia Pernia</strong> 
		titular de la Cédula de Identidad, C.I <strong>Nº 10.741.172</strong>
		Directora  del <strong>C.E.I  Simoncito Sánchez Carrero”</strong>,
		ubicado en Pregonero, Municipio Uribante,Estado Táchira.
	</p>
	<h3>HACE CONSTAR</h3>
	<p style="font: 14pt sans-serif">Que el niño (a): <strong><?php echo $nombres_alumnos.'  '.$apellidos; ?></strong> Titular de la Cédula Escolar
	Nº. V- <strong><?php echo $cedula_identidad; ?></strong> está Inscrito (a) en esta Institución y cursa el Grupo  
	<strong>“<?php echo $grupo;?>”</strong> de la Etapa <strong>“ <?php echo $etapa; ?> ”</strong> del Nivel de Educación Inicial, en el Año Escolar 
	2015 – 2016  en el   C.E.I SIMONCITO “SÀNCHEZ CARRERO."
	</p>
	<p style="font: 14pt sans-serif">
		Constancia, que se expide a solicitud de parte interesada <?php
		$mes = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
		$mes_num=date("m");
	echo "en Pregonero a los " . date('d') . " días del Mes de " . $mes[(int)$mes_num]. " de " . date("Y");
	?>
	</p>
	<p id="center" style="font: 14pt serif">
		<strong>
		Atentamente
		<br><br><br>________________________________
		<br>Msc . Carmen Silbia Pernia 
		<br>Directora
		</strong>
	</p>
	<p id="center" style="font: 10pt serif">
	<strong>
	“2015:Año Bicentenario de la Carta de Jamaica”  “2015:”220 De Grito Libertario de José Leonardo
	Chirinos”“2015: “100 años del Nacimiento de Cesar Rengifo”
	Direcciòn Calle 0 entre Carrera 3 y 4 Pregonero Município Uribante Estado Táchira
	Tlf:   0277-7471028
	</strong>
	</p>
	<script>window.print();</script>
</body>
</html>
