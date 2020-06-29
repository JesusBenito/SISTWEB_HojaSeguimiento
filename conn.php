<?php

//$host      = '67.227.236.164:3306';   /* o localhost  */
// $host      = 'www.vlimcard.com:3306';

//$host      = '67.227.236.164:3306';
//$user      = 'vlimcard_adtiemp';
//$pass      = '*sJT?nclgnTP';
//$dbname    = 'vlimcard_control_tiemposT';

$user      = 'root';
$pass      = '';
$host = 'localhost';
$dbname    = 'vlimcard_control_tiemposT';

$conn = new mysqli($host,$user,$pass,$dbname );
mysqli_query($conn,"SET CHARACTER SET 'utf8'");
mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");
if ($conn->connect_errno){

    echo "Error, no ha podido conectar a la base de datos: " . $dbname;
    exit();
}

?>