<?php 
include("../bd/con_db.php");
$usuarios = "SELECT * FROM datos";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/programmers.css">
    <link rel="stylesheet" href="../css/styles.css">
    
    <title>Programmers</title>
</head>
<body>
<header>
        <div class="header">
            <h1>TaskControl</h1>
        </div>
        <nav class='nav'>
            <ul>
                <a href="../index.php"><li>Home</li></a>
                <a href="./programmers.php"><li>Programmers</li></a>
                <a href=""><li>Proyects</li></a>
                <a href=""><li>Task</li></a>
            </ul>
        </nav>
    </header>

    <div class='container-table'>
        <div class="table__title">Datos de usuario <a href="../edicion.php"></a></div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Apellido</div>
        <div class="table__header">Especialidades </div>
        <div class="table__header"> Comentarios</div>
        
        <?php $resultado = mysqli_query($conex,$usuarios); 
        while($row = mysqli_fetch_assoc($resultado)){?>

        <div class="table__item"><?php echo $row['nombre'];?></div>
        <div class="table__item"><?php echo $row['apellido'];?></div>
        <div class="table__item"><?php echo $row['especialidad'];?></div>
        <div class="table__item"><?php echo $row['comentarios'];?></div>

        <?php } mysqli_free_result($resultado);?>
    </div>
</body>
</html>