<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarea</title>
</head>
<body>
<!--  Creación de un formulario con los campos descripción y estado para que llene el usuario  -->
<form action="action.php" method="POST">
    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion" cols="30" rows="10"></textarea>
    <br>
    <label for="estado">Seleccione un estado</label>
    <select name="opciones">
        <option value="Pendiente">Pendiente</option>
        <option value="Completada">Completada</option>
    </select>
    <input type="submit" value="Enviar">


    <!--  Creación de un formulario para que el usuario tenga que buscar una tarea  -->
    <form action="action.php" method="POST">
        <label for="buscar">ID de la tarea:</label>
        <input type="number" name="buscar" id="buscar">
        <button type="submit">Buscar</button>
    </form>
</form>
</body>
</html>

<?php

