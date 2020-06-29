<?php

include "../conn.php";


$numero_usuario= $_POST['numero_usuario'];
$pass = $_POST['pass'];

$jsonRespuesta = array();

$query = "UPDATE colaboradores
SET
`numero_colaborador` = '{$numero_usuario}',
`pass` = '{$pass}'
WHERE `numero_usuario` = '{$numero_usuario}';
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