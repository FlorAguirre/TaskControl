<?php

$inc = include("con_db.php");
if($inc){
    $consulta = "SELECT * FROM datos";
    $resultado = mysqli_query($conex, $consulta);
    if($resultado){
        while($row = $resultado-> fetch_array()){
            $id = $row['id'];
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $especialidad = $row['especialidad'];
            $comentarios = $row['comentarios'];
            ?> 
            <div>
                <h2><?php echo $nombre; ?></h2>
                <div>
                    <p>
                        <b>ID: </b> <?php echo $id;?><br>
                        <b>Nombre: </b><?php echo $nombre;?> <br>
                        <b>Apellido: </b> <?php echo $apellido;?><br>
                        <b>Especialidad: </b> <?php echo $especialidad;?><br>
                        <b>Comentarios: </b> <?php echo $comentarios;?><br>
                    </p>
                </div>

            </div>
            
            <?php
        }
    }
}

?>