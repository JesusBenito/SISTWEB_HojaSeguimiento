<?php

include "../conn.php";

$estatus = $_POST['estatus'];

$jsonRespuesta = array();


//
$query = "INSERT INTO `cat_estatus` (
      `estatus`
  ) VALUES (
      '{$estatus}'
  );
  ";

if (mysqli_query($conn, $query)) {
    $data['Respuesta'] = 'Estatus Registrado';
    array_push($jsonRespuesta, $data);
} else {
    $data['Respuesta'] = 'ERROR';
    array_push($jsonRespuesta, $data);
}

echo json_encode($jsonRespuesta);
//mysqli_free_result($resultUsuarioNuevo);
mysqli_close($conn);


?>
