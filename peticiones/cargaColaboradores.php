<?php
include '../conn.php';

$id_colaborador = $_POST['id_colaborador'];
$query = "SELECT * FROM
  colaboradores WHERE id_colaborador= $id_colaborador";

$resultado = $conn->query($query);

$datos = new stdClass();

if($resultado->num_rows > 0){

    $fila = $resultado->fetch_array();

    $datos->nombre = $fila['nombre'];
    $datos->apellido_p = $fila['apellido_paterno'];
    $datos->apellido_m = $fila['apellido_materno'];
    $datos->edad = $fila['telefono'];
    $datos->numero_colaborador = $fila['numero_colaborador'];
    $datos->correo = $fila['correo'];
    $datos->fecha_nacimiento = $fila['fecha_nacimiento'];
    $datos->id_area = $fila['id_area'];
    $datos->direccion = $fila['direccion'];

}

echo json_encode($datos);

$conn->close();

?>