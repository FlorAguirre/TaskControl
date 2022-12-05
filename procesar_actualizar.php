<?php
include("./bd/con_db.php");

$id = $_POST['id'];
$name = $_POST['nombre'];
$apellido = $_POST['apellido'];
$especialidad = $_POST['especialidad'];
$comentarios = $_POST['comentarios'];

//Actualizar los datos

$actualizar ="UPDATE datos SET nombre ='$name', apellido = '$apellido', especialidad = '$especialidad', comentarios = '$comentarios' WHERE id = '$id'";

$resultado = mysqli_query($conex,$actualizar);

if($resultado){
    echo"<script>alert('Se han actualizado los cambios correctamente, actualice la p\u00E1gina para ver los cambios');window.location='/edicion.php';</script>";
}else {
    echo"<script>alert('No se puedo actualizar los datos');window.history.go(-1);</script>";
}



?>
