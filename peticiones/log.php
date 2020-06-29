<?php

if (isset($_POST['us']) && isset($_POST['pw'])) {
    include_once '../conn.php';

    $sql = $conn->query("SELECT numero_colaborador, pass FROM colaboradores WHERE
     numero_colaborador = '{$_POST['us']}' AND pass = '{$_POST['pw']}' AND id_area='1'");
    
    if(mysqli_num_rows($sql) == 0) {
        echo 'fracaso';
    } else {
        
        echo 'exito';
        $_SESSION['sesionOK'] = 'exito';
       
    }
   

} else {
    echo 'ERROR';
}
mysqli_close($conn);

?>