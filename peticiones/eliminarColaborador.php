<?php
include "../conn.php";

$id_colaborador = $_POST['id_colaborador'];
$jsonRespuesta = array();

$query = "DELETE FROM `colaboradores` WHERE id_colaborador='$id_colaborador'";

if( mysqli_query($conn, $query) ){
    $data['Respuesta'] = 'El colaborador ha eliminado';
    array_push($jsonRespuesta, $data);
}else{
    $data['Respuesta'] = 'ERROR';
    array_push($jsonRespuesta, $data);
}
echo json_encode($jsonRespuesta);
//mysqli_free_result($resultUsuarioNuevo);
mysqli_close($conn);
?>