<?php
    include("include/db.php");
    $id=$_GET["id"]
    $sql="select * from personas where id=$id";
    $persona=DB::query($sql);
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <form action="guardar_persona.php" method="post">
        <div>
            <h3>Editar Usuario</h3>
        </div>
        <div class="form-group">
            <label for="">Nombre</label><br>
            <input type="text" name="nombre">
        </div>

        <div class="form-group">
            <label for="">Email</label><br>
            <input type="text" name="email">
        </div>

        <div>
            <br>
            <button type="submit">Guardar</button>
        </div>
    </form>
    <form action="index.php"><button type="submit">Incio</button></form>
</body>
</html>