<?php
session_start();
// check to see if the user is logged in
if ($_SESSION['sesionOK'] == 'exito'){
	// user is logged in
	
} else {
	// user is not logged in, send the user to the login page
	header('Location: ../');
}
?>