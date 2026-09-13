<?php
//Recibo los datos del formulario
$descripcion = $_POST['descripcion'];
$opciones = $_POST['opciones'];


//muestro los datos
echo "Has agregado: la tarea con: ".$descripcion."<br>". "y has elegido la opcion: ".$opciones;


//creamos el array ascoativo para almacenar la información de la tarea
$tareas = [
    "descripcion" => $descripcion,
    "opciones" => $opciones
];

//vamos a mostrar los datos
echo "Tarea: ".$tarea["descripcion"]."<br>";
echo "<br>";
echo "Estado: ".$tarea["opciones"]."<br>";



if (isset($_POST["buscar"])) {
    $idBuscado = $_POST["buscar"];

    $resultado = buscarTarea($tareas, $idBuscado);
}


function buscarTarea($tareas,$idBuscado){
    foreach ($tareas as $tarea){
        if($tarea["id"] == $idBuscado){
            return $tarea["descripcion"];
        }
    }
}


if (isset($_POST["eliminar"])) {

    $idBuscado = $_POST["eliminar"];

    $eliminada = eliminarTarea($tareas, $idBuscado);

    if ($eliminada) {
        echo "Tarea eliminada correctamente";
    } else {
        echo "No existe una tarea con ese ID";
    }
}


//se crea una función para eliminar una tarea por su índice
function eliminarTarea(&$tareas, $idBuscado) {

    foreach ($tareas as $indice => $tarea) {

        if ($tarea["id"] == $idBuscado) {
            unset($tareas[$indice]);
            return true;
        }
    }

    return false;
}