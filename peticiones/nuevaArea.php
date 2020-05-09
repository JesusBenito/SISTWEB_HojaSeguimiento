<?php

include "../conn.php";

$area = $_POST['area'];

$jsonRespuesta = array();


$query = "INSERT INTO `cat_area` (
      `area`
  ) VALUES (
      '{$area}'
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
