<?php

if (isset($_POST['us']) && isset($_POST['pw'])) {
    include_once '../conn.php';

    $sql = $conn->query("SELECT numero_colaborador FROM colaboradores WHERE numero_colaborador = '{$_POST['us']}' AND pwd = '{$_POST['pw']}'");
    
    if(mysqli_num_rows($sql) == 0) {
        echo 'fracaso';
    } else {
        echo 'exito';
        $_SESSION['sesionOK'] = 'exito';
        foreach ($sql as $data) {
            $nombre = $data['nombre'];
            $ap = $data['apellido_paterno'];
            $area = $data['area'];
            $_SESSION['nombre'] = $nombre .' '. $ap;
            $_SESSION['area'] = $area;
        }
    }
} else {
    echo 'ERROR';
}
mysqli_close($conn);

?>