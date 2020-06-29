<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="box">
    <form >
        <h1>Control de Actividades</h1>
        <div class="logo">
            <img src="images/VLIM_ti1.png" alt="Logo Vlim">
        </div>
        <div class="campo">
            <label for="id_usurio">Usuario</label>
            <input type="text" id="usuario" name="usuario" required>
        </div>
        <div class="campo">
            <label for="pass">Contraseña</label>
            <input type="password" id="pass" name="pass" required>
        </div>
        <div class="campo">
            <button class="btn" type="submit" id="iniciarSesion">
                Iniciar Sesión
            </button>
        </div>
    </form>
</div>



<!-- jQuery -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/tether.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
<!-- Own scripts -->
<script src="assets/js/main.js"></script>
</body>
</html>
