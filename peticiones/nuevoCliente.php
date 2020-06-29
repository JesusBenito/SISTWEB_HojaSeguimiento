<?php

include "../conn.php";

$cliente = $_POST['cliente'];

$jsonRespuesta = array();


$query = "INSERT INTO `cat_clientes` (
      `nombre_cliente`
  ) VALUES (
      '{$cliente}'
  );
  ";

if (mysqli_query($conn, $query)) {
    $data['Respuesta'] = 'Cliente Registrado';
    array_push($jsonRespuesta, $data);
} else {
    $data['Respuesta'] = 'ERROR';
    array_push($jsonRespuesta, $data);
}

echo json_encode($jsonRespuesta);
//mysqli_free_result($resultUsuarioNuevo);
mysqli_close($conn);


?>
