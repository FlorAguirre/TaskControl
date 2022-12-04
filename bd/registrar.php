<?php
include("con_db.php");

if($conex){
    echo '<h1 style="color:white">Todo ok</h1>';
}



if (isset($_POST['registrar'])){
    
        $name = trim($_POST['name']);
        $apellido = trim($_POST['apellido']);
        $especialidad = trim($_POST['especialidad']);
        $comentarios = trim($_POST['comentarios']);
        $consulta = "INSERT INTO datos(nombre,apellido,especialidad,comentarios) VALUES ('$name','$apellido','$especialidad','$comentarios')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            ?>
            <h3 style="color:white" >Te has inscripto correctamente</h3>
            <?php
        } else{
            ?>
            <h3 style="color:white">Ups, ha ocurrido un error</h3>
            <?php
        }

 
        
}


if (isset($_POST['registrar1'])){
    
    $name = trim($_POST['name']);
    $apellido = trim($_POST['apellido']);
    $tarea = trim($_POST['tarea']);
    $proyecto = trim($_POST['proyecto']);
    $tiempo_de_entrega = trim($_POST['tiempo_de_entrega']);
    $comentarios = trim($_POST['comentarios']);
    $consulta = "INSERT INTO tareas(nombre,apellido,tarea, proyecto,tiempo_de_entrega,comentarios) VALUES ('$name','$apellido','$tarea','$proyecto','$tiempo_de_entrega','$comentarios')";
    $resultado = mysqli_query($conex, $consulta);
    if($resultado){
        ?>
        <h3 style="color:white" >Te has inscripto correctamente</h3>
        <?php
    } else{
        ?>
        <h3 style="color:white">Ups, ha ocurrido un error</h3>
        <?php
    }


    
}





?>

