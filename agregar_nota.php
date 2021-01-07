<?php


include('config/db.php');

if (isset($_POST['eliminar_nota'])) {
    
    $eliminar_nota = $_POST['eliminar_nota'];
    
    
    $sql1 = "UPDATE notas SET estado= 1 WHERE id_notas= $eliminar_nota";
    
    
    if ($connection->query($sql1) === TRUE) {
        
        $estado = "Nota eliminada con exito";
        
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
    
}

if (isset($_POST['guardar'])) {
    
    $nota = $_POST['nota'];
    
    $sql = "INSERT INTO notas (nota) VALUES ('$nota')";
    
    if ($connection->query($sql) === TRUE) {
        
        $estado = "Guardado con exito";
        
        
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
    
}


?>