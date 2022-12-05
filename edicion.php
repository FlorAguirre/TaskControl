<?php 
include("./bd/con_db.php");
$usuarios = "SELECT * FROM datos";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/programmers.css">
    <link rel="stylesheet" href="./css/styles.css">

    <title>Panel de Edición</title>
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

    <div class='container-table container-table--edit '>

        <div class="table__title table__title--edit">Datos de usuario</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Apellido</div>
        <div class="table__header">Especialidades </div>
        <div class="table__header"> Comentarios</div>
        <div class="table__header"> Operación</div>


        <?php $resultado = mysqli_query($conex,$usuarios); 
        while($row = mysqli_fetch_assoc($resultado)){?>

        <div class="table__item"><?php echo $row['nombre'];?></div>
        <div class="table__item"><?php echo $row['apellido'];?></div>
        <div class="table__item"><?php echo $row['especialidad'];?></div>
        <div class="table__item"><?php echo $row['comentarios'];?></div>
        <div class="table__item">
            <a href="./actualizar.php?id=<?php echo $row['id'];?>"class="table__item__link"><svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-edit" width="32" height="32" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                    <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                    <line x1="16" y1="5" x2="19" y2="8" />
                </svg></a> |
            
                <a href="./eliminar.php?id=<?php echo $row['id'];?>" class="table__item__link"><svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-circle-x" width="32" height="32" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="12" cy="12" r="9" />
                    <path d="M10 10l4 4m0 -4l-4 4" />
                </svg></a>
        </div>

        <?php } mysqli_free_result($resultado);?>
    </div>
</body>

</html>