<?php 
include('./db.php');

if ($_POST['enviado']){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $nota = $_POST['nota'];
    
    $query = "INSERT INTO alumnos (nombre, apellido, nota) VALUES('$nombre', '$apellido', '$nota')";

    $resultado = mysqli_query($con, $query);
    
    if($resultado == 1){
        $_SESSION['mensaje'] = 'tarea guardada';
        $_SESSION['color'] = 'success';
        header('Location: index.php');
    }else{
        echo 'Fallo';
    }
}
?>