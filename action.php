<?php
//Recibo los datos del formulario
$descripcion = $_POST['descripcion'];
$opciones = $_POST['opciones'];


//muestro los datos
echo "Has agregado: la tarea con: ".$descripcion."<br>". "y has elegido la opcion: ".$opciones;