<?php
include "../conn.php";

$id_proyecto = $_POST['id_proyecto'];
$jsonRespuesta = array();

$query = "DELETE FROM `cat_proyectos` WHERE id_proyecto='$id_proyecto'";

if( mysqli_query($conn, $query) ){
    $data['Respuesta'] = 'El proyecto se ha eliminado';
    array_push($jsonRespuesta, $data);
}else{
    $data['Respuesta'] = 'ERROR';
    array_push($jsonRespuesta, $data);
}
echo json_encode($jsonRespuesta);
//mysqli_free_result($resultUsuarioNuevo);
mysqli_close($conn);
?>