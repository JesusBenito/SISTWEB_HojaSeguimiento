<?php
include "../conn.php";

$id_area = $_POST['id_area'];
$jsonRespuesta = array();

$query = "DELETE FROM `cat_area` WHERE id_area='$id_area'";

if( mysqli_query($conn, $query) ){
    $data['Respuesta'] = 'El area se ha eliminado';
    array_push($jsonRespuesta, $data);
}else{
    $data['Respuesta'] = 'ERROR';
    array_push($jsonRespuesta, $data);
}
echo json_encode($jsonRespuesta);
//mysqli_free_result($resultUsuarioNuevo);
mysqli_close($conn);
?>