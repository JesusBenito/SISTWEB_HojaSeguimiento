<?php

include "../conn.php";

$nombre_area = $_POST['nombre_area'];

$jsonRespuesta = array();


$query = "INSERT INTO `cat_area` (
      `area`
  ) VALUES (
      '{$nombre_area}'
  );
  ";

if (mysqli_query($conn, $query)) {
    $data['Respuesta'] = 'Area Registrada   ';
    array_push($jsonRespuesta, $data);
} else {
    $data['Respuesta'] = 'ERROR';
    array_push($jsonRespuesta, $data);
}

echo json_encode($jsonRespuesta);
//mysqli_free_result($resultUsuarioNuevo);
mysqli_close($conn);


?>
