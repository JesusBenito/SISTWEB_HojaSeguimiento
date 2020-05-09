<?php

include "../conn.php";

$id_colaborador = $_POST['id_colaborador'];
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

$query = "UPDATE colaboradores
SET
`nombre` = '{$nombre}',
`apellido_paterno` = '{$ap_paterno}',
`apellido_materno` = '{$ap_materno}',
`telefono` = '{$telefono}',
`numero_colaborador` = '{$numero_usuario}',
`correo` = '{$correo}',
`fecha_nacimiento` = '{$fecha_nacimiento}',
`area` = '{$area}'
`direccion` = '{$direccion}'
WHERE `id_colaborador` = '{$id_colaborador}';
";

if( mysqli_query($conn, $query) ){
    $data['Respuesta'] = 'OK';
    array_push($jsonRespuesta, $data);
}else{
    $data['Respuesta'] = 'ERROR';
    array_push($jsonRespuesta, $data);
}
echo json_encode($jsonRespuesta);
//mysqli_free_result($resultUsuarioNuevo);
mysqli_close($conn);
?>