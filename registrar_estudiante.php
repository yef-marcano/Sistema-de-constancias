<?php
include('config/db.php');

if (isset($_POST['guardar'])) {
    
    $cedula_identidad = $_POST['cedula_identidad'];
    $fecha            = $_POST['fecha'];
    $nombres_alumnos  = $_POST['nombres_alumnos'];
    $apellidos        = $_POST['apellidos'];
    $grupo            = $_POST['grupo'];
    $etapa            = $_POST['etapa'];
    $seccion          = $_POST['seccion'];
    $sexo             = $_POST['sexo'];
    
      
    $sql1 = "INSERT INTO usuarios (cedula, nombres, apellidos) VALUES ('$cedula_identidad', '$nombres_alumnos', '$apellidos')";
      
    $sql = "INSERT INTO estudiantes (cedula, fecha, etapa, grupo, seccion, sexo) VALUES ('$cedula_identidad', '$fecha', '$etapa', '$grupo', '$seccion', '$sexo')";
    
    if ($connection->query($sql1) === TRUE & $connection->query($sql) === TRUE) {
        
        $estado = "Guardado con exito";
    
        
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
    
}


?>