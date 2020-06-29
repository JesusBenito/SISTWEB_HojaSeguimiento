<?php
include "../conn.php";

$id_estatus = $_POST['id_estatus'];
$jsonRespuesta = array();

$query = "DELETE FROM `cat_estatus` WHERE id_estatus='$id_estatus'";

if( mysqli_query($conn, $query) ){
    $data['Respuesta'] = 'El estatus se ha eliminado';
    array_push($jsonRespuesta, $data);
}else{
    $data['Respuesta'] = 'ERROR';
    array_push($jsonRespuesta, $data);
}
echo json_encode($jsonRespuesta);
//mysqli_free_result($resultUsuarioNuevo);
mysqli_close($conn);
?>