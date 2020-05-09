<?php
include "../conn.php";

$nombre = $_POST['nombre'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$telefono = $_POST['telefono'];
$numero_usuario= $_POST['numero_usuario'];
$correo= $_POST['correo'];
$fecha_nacimiento= $_POST['fecha_nacimiento'];
$area = $_POST['area'];
$direccion = $_POST['direccion'];


$jsonRespuesta = array();


    //
    $query = "INSERT INTO `colaboradores` (
      `nombre`,
      `apellido_paterno`,
      `apellido_materno`,
      `telefono`,
      `numero_colaborador`,
      `correo`,
      `fecha_nacimiento`,
      `direccion`,
      `id_area`
  ) VALUES (
      '{$nombre}',
      '{$ap_paterno}',
      '{$ap_materno}',
      '{$telefono}',
      '{$numero_usuario}',
      '{$correo}',
      '{$fecha_nacimiento}',
      '{$direccion}',
      '{$area}'
  );
  ";

if( mysqli_query($conn, $query) ){
    $data['Respuesta'] = 'Colaborador Registrado';
    array_push($jsonRespuesta, $data);
}else{
    $data['Respuesta'] = 'ERROR';
    array_push($jsonRespuesta, $data);
}

echo json_encode($jsonRespuesta);
//mysqli_free_result($resultUsuarioNuevo);
mysqli_close($conn);
?>