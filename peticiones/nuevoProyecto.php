<?php
include_once '../conn.php';
if (isset($_POST)) {
    $query = "INSERT INTO 
    cat_proyectos
    (tipo_proyecto,
    nombre_proyecto, 
    fecha_entrega, 
    id_estatus, 
    id_colaborador,
    status_proyecto)
    VALUES(
    '{$_POST['tipo_proyecto']}',    
    '{$_POST['nombre_proyecto']}',
    '{$_POST['fecha_entrega']}',
    '{$_POST['estatus']}',
    '{$_POST['colaborador']}',
    1)";
    $result = mysqli_query($conn, $query);
    if ($result) {
		$log['register']="Se registro correctamente";
		// print("<script>alert('Se registro correctamente');location = 'index_default.html'</script>");

        mysqli_close($conn);	
    } else {
		$log['register']="Error weeeeeeeeeeeeeeeeeeee".mysqli_error($conn);
        echo "Error: " . mysqli_error($conn);
        mysqli_close($conn);
    }
}

print_r(json_encode($log));
?>