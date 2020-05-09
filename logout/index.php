<?php 
/*
* Cerrar sesión
* @author Edgar*/
session_start();
session_destroy();
header("Location: ../");
?>