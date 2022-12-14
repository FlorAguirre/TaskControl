<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
    <title>TaskControl</title>
</head>

<body>
    <header>
        <div class="header">
            <h1>TaskControl</h1>
        </div>
        <nav class='nav'>
            <ul>
                <a href=""><li>Home</li></a>
                <a href="./views/programmers.php"><li>Programmers</li></a>
                <a href=""><li>Proyects</li></a>
                <a href=""><li>Task</li></a>
            </ul>
        </nav>
    </header>


    <div class="botones">
        <button class="boton boton1" onClick="mostrarFormulario()">Formulario de Registro</button>
        <button class="boton boton2" onClick="mostrarFormulario2()">Formulario de Tareas</button>
    </div>


    <form id="Formulario" action="" method="POST" style="display:none;">
        <div class="fieldset">
            <fieldset class="tituloFieldset2">Formulario de Registro</fieldset>
            <svg xmlns="http://www.w3.org/2000/svg" class=" iconoFieldset icon icon-tabler icon-tabler-x" width="32"
                height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
                stroke-linejoin="round" onClick="ocultarFormulario()">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </div>
        <hr>

        <div class="nombreApellido">
            <div class="nombre">
                <label for="" class="nombreLabel">Nombre</label>
                <input class="nombreInput" type="text" name='name' autocomplete="off" required>
            </div>
            <div class="apellido">
                <label for="" class="apellidoLabel"">Apellido</label>
            <input class="nombreInput" type=" text" name='apellido' autocomplete="off" required>
            </div>
        </div>

        <div class="opciones">
            <label for="" class="especialidad">Especialidad</label>
            <select name="especialidad" id="" class="select">
                <option value="" class="option">-- Seleccionar --</option>
                <option name="especialidad" value="Front-End">Front-End</option>
                <option name="especialidad" value="Back-End">Back-End</option>
                <option name="especialidad" value="Full-Stack">Full-Stack</option>
            </select>
        </div>

        <div class="comentarios">
            <label for="" class="comentariosLabel">Comentarios - Habilidades</label>
            <textarea class="texto" name="comentarios" id="" cols="40" rows="10" autocomplete="off" required></textarea>
        </div>

        <div class="submit">
            <input type="submit" name='registrar' class="botonSubmit">Submit
        </div>
    </form>
  

    <form id="Formulario2" action="" method="post" style="display: none;">
        <div class="fieldset">
            <fieldset class="tituloFieldset">Formulario de Tareas</fieldset>
            <svg xmlns="http://www.w3.org/2000/svg" class=" iconoFieldset icon icon-tabler icon-tabler-x" width="32"
                height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
                stroke-linejoin="round" onClick="ocultarFormulario2()">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </div>
        <hr>


        <div class="nombreApellido">
            <div class="nombre">
                <label for="" class="nombreLabel">Nombre</label>
                <input class ="input" type=" text" name="name">
            </div>
            <div class="apellido">
                <label for="" class="apellidoLabel"">Apellido</label>
            <input class ="input" type=" text" name="apellido">
            </div>
        </div>

        <div class="proyectoTarea">
            <div class="tarea">
                <label for="" class="nombreLabel tareaLabel">Tarea</label>
        <input class ="tareaInput" type=" text" name="tarea">
            </div>
            <div class="proyecto">
                <label for="" class="apellidoLabel"">Proyecto</label>
        <input class ="input" type=" text" name="proyecto">
            </div>
        </div>
        <div class="date">
            <label for="" class="dateLabel">Tiempo de Entrega</label>
            <input class="dateInput" type="date" name="tiempo_de_entrega">
        </div>



        <div class="comentarios">
            <label for="" class="comentariosLabel">Comentarios</label>
            <textarea class="texto" name="comentarios" id="" cols="40" rows="10"></textarea>
        </div>

        <div class="submit">
            <input type="submit" name='registrar1' class="botonSubmit">Submit
        </div>
    </form>

     <?php
    include("./bd/registrar.php");
    ?>

    <script src="./js/script.js"></script>
   
</body>

</html>