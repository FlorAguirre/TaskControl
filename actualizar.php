<?php 
include("./bd/con_db.php");
$id = $_GET["id"];
$usuarios = "SELECT * FROM datos WHERE id = '$id'";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/programmers.css">
    <link rel="stylesheet" href="./css/styles.css">

    <title>Actualizar</title>
</head>

<body>
    <header>
        <div class="header">
            <h1>TaskControl</h1>
        </div>
        <nav class='nav'>
            <ul>
                <a href="./index.php">
                    <li>Home</li>
                </a>
                <a href="./views/programmers.php">
                    <li>Programmers</li>
                </a>
                <a href="">
                    <li>Proyects</li>
                </a>
                <a href="">
                    <li>Task</li>
                </a>
            </ul>
        </nav>
    </header>

    <form class='container-table container-table--edit ' action="procesar_actualizar.php" method="POST">

        <div class="table__title table__title--edit">Datos de usuario</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Apellido</div>
        <div class="table__header">Especialidades </div>
        <div class="table__header"> Comentarios</div>
        <div class="table__header"> Operación</div>


        <?php $resultado = mysqli_query($conex,$usuarios); 
        while($row = mysqli_fetch_assoc($resultado)){?>

        <input type="hidden" class="table__item" value="<?php echo $row['id'];?>" name="id">
        <input type="text" class="table__input" value="<?php echo $row['nombre'];?>" name="nombre">
        <input type="text" class="table__input" value="<?php echo $row['apellido'];?>" name="apellido">
        <input type="text" class="table__input" value="<?php echo $row['especialidad'];?>" name="especialidad">
        <input type="text" class="table__input" value="<?php echo $row['comentarios'];?>" name="comentarios">
        <?php } mysqli_free_result($resultado);?>

       <input type="submit" value="Actualizar" class="container__submit">
    </form>
</body>

</html>