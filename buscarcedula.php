<?php

include('config/db.php');

$id = $_POST["id"];

//fetch.php
if(isset($id))
{
 $query = "SELECT * FROM usuarios u join estudiantes e on(u.cedula=e.cedula) where u.cedula= $id";
 $result = mysqli_query($connection, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["cedula_identidad"] = $row["cedula"];
  $data["nombres_alumnos"] = $row["nombres"];
  $data["apellidos"] = $row["apellidos"];
  $data["fecha"] = $row["fecha"];
  $data["grupo"] = $row["grupo"];
  $data["etapa"] = $row["etapa"];
 }

 echo json_encode($data);
}

?>
