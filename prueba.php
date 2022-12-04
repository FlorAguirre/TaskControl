if (strlen($_POST['name']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['especialidad']) >= 1 && strlen($_POST['comentarios']) >= 1)


else {
        ?>
        <h3 style="color:white">Por favor complete los campos</h3>
        <?php
    }