<?php
include("../head.php")
?>

<div class="container-fluid">
    <!-- .row -->
    <div class="row bg-title" style="background:url(../plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
        <div class="col-lg-12">
            <h4 class="page-title">Proyectos</h4>
        </div>
        <div class="col-sm-6 col-md-6 col-xs-12">
            <ol class="breadcrumb pull-left">
                <li><a href="../index.php">Dashboard</a></li>
                <li class="active">Proyectos</li>
            </ol>
        </div>

        <!-- /.col-lg-12 -->
    </div>
    <!--row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="d-flex justify-content-between">
                    <h3 class="box-title m-b-0">Proyectos</h3>
                </div>

                <!-- Modal para agregar un nuevo usuario-->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header" style="padding:35px 50px;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <font4>Nuevo Proyecto</font4>
                            </div>
                            <div class="modal-body" style="padding:40px 50px;">
                                <form class="user" id="form">

                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            Tipo de Proyecto
                                            <input type="text" class="form-control" id="tipo_proyecto" placeholder="Ingresa el tipo de Proyeycto ..." required="" data-error="Por favor, ingresa el tipo de Proyecto.">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            Nombre del Proyecto
                                            <input type="text" class="form-control" id="nombre_proyecto" placeholder="Ingresa el Nombre del Proyeycto ..." required="" data-error="Por favor, ingresa el Nombre del Proyecto.">
                                        </div>
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            Fecha de Entrega
                                            <input type="date" class="form-control" id="fecha_entrega" placeholder="" required="" data-error="Por favor, ingresa la fecha de entrega.">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            Estatus
                                            <select class="form-control" data-placeholder="Choose a Category" tabindex="1" id="estatus">
                                                <?php
                                                include "../conn.php";
                                                $queryBuscaPerfil = "SELECT * FROM `cat_estatus` ORDER BY estatus ASC";
                                                $resultPerfil = mysqli_query($conn, $queryBuscaPerfil);
                                                if ($resultPerfil) {
                                                    $num_rows = mysqli_num_rows($resultPerfil);
                                                    if ($num_rows > 0) {
                                                        while ($row = mysqli_fetch_array($resultPerfil)) {
                                                            echo '<option value="' . $row['id_estatus'] . '"> ' . $row['estatus'] . ' </option>';
                                                        }
                                                    } else {
                                                        echo "No hay registros";
                                                    }
                                                } else {
                                                    echo "Error: " . mysqli_error($conn);
                                                }
                                                mysqli_free_result($resultPerfil);
                                                mysqli_close($conn);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            Colaborador
                                            <select class="form-control" data-placeholder="Choose a Category" tabindex="1" id="colaborador">
                                                <?php
                                                include "../conn.php";
                                                $queryBuscaPerfil = "SELECT * FROM `colaboradores`";
                                                $resultPerfil = mysqli_query($conn, $queryBuscaPerfil);
                                                if ($resultPerfil) {
                                                    $num_rows = mysqli_num_rows($resultPerfil);
                                                    if ($num_rows > 0) {
                                                        while ($row = mysqli_fetch_array($resultPerfil)) {
                                                            echo '<option value="' . $row['id_colaborador'] . '"> ' . $row['nombre'] . ' </option>';
                                                        }
                                                    } else {
                                                        echo "No hay registros";
                                                    }
                                                } else {
                                                    echo "Error: " . mysqli_error($conn);
                                                }
                                                mysqli_free_result($resultPerfil);
                                                mysqli_close($conn);
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div align="center">
                                        <button class="fcbtn btn btn-success btn-outline btn-1b" id="guardarProyecto">
                                            GUARDAR
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="ModalModificar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <form method="post" action="eliminar.php" class="form-horizontal" enctype="multipart/form-data" role="form">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modificar Proyecto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                Tipo de Proyecto
                                                <input type="text" class="form-control" id="tipo_proyecto" placeholder="Ingresa el tipo de Proyeycto ..." required="" data-error="Por favor, ingresa el tipo de Proyecto.">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                Nombre del Proyecto
                                                <input type="text" class="form-control" id="nombre_proyecto" placeholder="Ingresa el Nombre del Proyeycto ..." required="" data-error="Por favor, ingresa el Nombre del Proyecto.">
                                            </div>
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                Fecha de Entrega
                                                <input type="date" class="form-control" id="fecha_entrega" placeholder="" required="" data-error="Por favor, ingresa la fecha de entrega.">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                Estatus
                                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1" id="estatus">
                                                    <?php
                                                    include "../conn.php";
                                                    $queryBuscaPerfil = "SELECT * FROM `cat_estatus` ORDER BY estatus ASC";
                                                    $resultPerfil = mysqli_query($conn, $queryBuscaPerfil);
                                                    if ($resultPerfil) {
                                                        $num_rows = mysqli_num_rows($resultPerfil);
                                                        if ($num_rows > 0) {
                                                            while ($row = mysqli_fetch_array($resultPerfil)) {
                                                                echo '<option value="' . $row['id_estatus'] . '"> ' . $row['estatus'] . ' </option>';
                                                            }
                                                        } else {
                                                            echo "No hay registros";
                                                        }
                                                    } else {
                                                        echo "Error: " . mysqli_error($conn);
                                                    }
                                                    mysqli_free_result($resultPerfil);
                                                    mysqli_close($conn);
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                Colaborador
                                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1" id="colaborador">
                                                    <?php
                                                    include "../conn.php";
                                                    $queryBuscaPerfil = "SELECT * FROM `colaboradores`";
                                                    $resultPerfil = mysqli_query($conn, $queryBuscaPerfil);
                                                    if ($resultPerfil) {
                                                        $num_rows = mysqli_num_rows($resultPerfil);
                                                        if ($num_rows > 0) {
                                                            while ($row = mysqli_fetch_array($resultPerfil)) {
                                                                echo '<option value="' . $row['id_colaborador'] . '"> ' . $row['nombre'] . ' </option>';
                                                            }
                                                        } else {
                                                            echo "No hay registros";
                                                        }
                                                    } else {
                                                        echo "Error: " . mysqli_error($conn);
                                                    }
                                                    mysqli_free_result($resultPerfil);
                                                    mysqli_close($conn);
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id="guardar_garantia_ampliacion" name="guardar_garantia_ampliacion" class="btn btn-success">Guardar</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Tabla de todos los proyectos -->
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre del Colaborador</th>
                                <th>Actividad</th>
                                <th>Fecha de Inicio</th>
                                <th>Fecha de terminacion</th>
                                <th>Hora</th>
                                <th>Estatus<th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("../conn.php");
                            $queryEstatus = "SELECT
                                            `cat_proyectos`.*,
                                            `cat_estatus`.*,
                                            `colaboradores`.* 
                                             FROM
                                            `cat_proyectos`,
                                            `cat_estatus`,
                                            `colaboradores`
                                            WHERE
                                            `cat_proyectos`.id_colaborador=`colaboradores`.id_colaborador
                                            AND
                                            `cat_estatus`.id_estatus=`cat_proyectos`.id_estatus
                                            AND
                                            `cat_proyectos`.status_proyecto=1";
                            $resultEstatus = mysqli_query($conn, $queryEstatus);
                            if ($resultEstatus) {
                                $num_rows = mysqli_num_rows($resultEstatus);
                                if ($num_rows > 0) {
                                    while ($row = mysqli_fetch_array($resultEstatus)) {
                                        echo '
                                        <tr>
                                            <td>' . $row['nombre'] . '</td>
                                            <td>' . $row['nombre_proyecto'] . '</td>
                                            <td>' . $row['fecha_entrega'] . '</td>
                                            <td>' . $row['fecha_entrega'] . '</td>
                                            <td>' . $row['fecha_entrega'] . '</td>
                                            <td>' . $row['estatus'] . '</td>
                                        </tr>
                                        ';
                                    }
                                } else {
                                    echo "No hay registros";
                                }
                            } else {
                                echo "Error: " . mysqli_error($conn);
                            }
                            mysqli_free_result($resultEstatus);
                            mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div><!-- /.container-fluid -->

<?php
include("../footer.php")
?>