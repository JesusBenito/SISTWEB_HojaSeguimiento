<?php
include("../head.php")
?>

<div class="container-fluid">
    <!-- .row -->
    <div class="row bg-title"
         style="background:url(../plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
        <div class="col-lg-12">
            <h4 class="page-title">Colaboradores</h4>
        </div>
        <div class="col-sm-6 col-md-6 col-xs-12">
            <ol class="breadcrumb pull-left">
                <li><a href="../index.php">Dashboard</a></li>
                <li class="active">Colaboradores</li>
            </ol>
        </div>

        <!-- /.col-lg-12 -->
    </div>
    <!--row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="d-flex justify-content-between">
                    <h3 class="box-title m-b-0">Colaboradores</h3>
                    <button type="button" class="fcbtn btn btn-success btn-outline btn-1b" data-toggle="modal"
                            data-target="#myModal">Agregar
                    </button>



                    <!-- Modal Guardar -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header" style="padding:35px 50px;">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <font4>Nuevo Colaborador</font4>
                                </div>
                                <div class="modal-body" style="padding:40px 50px;">
                                    <form class="user" id="form">

                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                Nombre
                                                <input type="text" class="form-control form-control-user"
                                                       id="nombre"
                                                       placeholder="Nombre ( s )" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                Apellido Paterno
                                                <input type="text" class="form-control form-control-user"
                                                       id="ap_paterno"
                                                       placeholder="Apellido Paterno" required="">
                                            </div>
                                            <div class="col-sm-6">
                                                Apellido Materno
                                                <input type="text" class="form-control form-control-user"
                                                       id="ap_materno"
                                                       placeholder="Apellido Materno" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                Teléfono
                                                <input type="number" class="form-control form-control-user"
                                                       id="telefono" placeholder="Teléfono" required="">
                                            </div>
                                            <div class="col-sm-6">
                                                Numero de Usuario
                                                <input type="number" class="form-control form-control-user"
                                                       id="numero_usuario"
                                                       placeholder="Numero de Usuario" required="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            Correo Electronico
                                            <input type="email" class="form-control form-control-user"
                                                   id="correo"
                                                   placeholder="Correo Electronico" required="">
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                Fecha de Nacimiento
                                                <input type="date" class="form-control form-control-user"
                                                       id="fecha_nacimiento"
                                                       placeholder="Fecha de Nacimiento" required="">
                                            </div>
                                            <div class="col-sm-6">
                                                Area
                                                <input type="text" class="form-control form-control-user" id="area"
                                                        placeholder="Area" required=""></input>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                Dirección
                                                <input type="text" class="form-control form-control-user"
                                                       id="direccion"
                                                       placeholder="Direccion" required="">
                                            </div>
                                        </div>
                                        <div align="center">
                                            <button class="fcbtn btn btn-success btn-outline btn-1b" type="submit"
                                                    id="guardar_colaborador">
                                                GUARDAR
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Modal Actualizar -->
                    <div class="modal fade" id="myModal2" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header" style="padding:35px 50px;">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <font4>Actualizar Colaborador</font4>
                                </div>
                                <div class="modal-body" style="padding:40px 50px;">
                                    <form class="user" id="form">

                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                Nombre
                                                <input type="text" class="form-control form-control-user"
                                                       id="nombrea"
                                                       placeholder="Nombre ( s )" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                Apellido Paterno
                                                <input type="text" class="form-control form-control-user"
                                                       id="ap_paternoa"
                                                       placeholder="Apellido Paterno" required="">
                                            </div>
                                            <div class="col-sm-6">
                                                Apellido Materno
                                                <input type="text" class="form-control form-control-user"
                                                       id="ap_maternoa"
                                                       placeholder="Apellido Materno" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                Teléfono
                                                <input type="number" class="form-control form-control-user"
                                                       id="telefonoa" placeholder="Teléfono" required="">
                                            </div>
                                            <div class="col-sm-6">
                                                Numero de Usuario
                                                <input type="number" class="form-control form-control-user"
                                                       id="numero_usuarioa"
                                                       placeholder="Numero de Usuario" required="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            Correo Electronico
                                            <input type="email" class="form-control form-control-user"
                                                   id="correoa"
                                                   placeholder="Correo Electronico" required="">
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                Fecha de Nacimiento
                                                <input type="date" class="form-control form-control-user"
                                                       id="fecha_nacimientoa"
                                                       placeholder="Fecha de Nacimiento" required="">
                                            </div>
                                            <div class="col-sm-6">
                                                Area
                                                <select type="text" class="form-control form-control-user" id="areaa"
                                                        placeholder="Area" required=""></select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                Dirección
                                                <input type="text" class="form-control form-control-user"
                                                       id="direcciona"
                                                       placeholder="Direccion" required="">
                                            </div>
                                        </div>
                                        <div align="center">
                                            <button class="fcbtn btn btn-success btn-outline btn-1b" type="submit"
                                                    id="actializa_colaborador">
                                                GUARDAR
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID Colaborador</th>
                            <th>Numero de Colaborador</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Area</th>
                            <th>Dirección</th>

                            <th class="text-nowrap">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        include("../conn.php");
                        $query = $conn->query("SELECT * FROM colaboradores ") or die("<b>Fatal error: </b>".$conn->error);
                        if($query->num_rows > 0):
                        while($rows = $query->fetch_assoc()):
                        ?>
                        <tr>
                            <td><?php print($rows['id_colaborador'])?></td>
                            <td><?php print($rows['numero_colaborador'])?></td>
                            <td><?php print($rows['nombre'])?></td>
                            <td><?php print($rows['telefono'])?></td>
                            <td><?php print($rows['correo'])?></td>
                            <td><?php print($rows['fecha_nacimiento'])?></td>
                            <td>
                                <?php
                                // Retornamos el tipo de mantenimiento
                                $area = $conn->query("SELECT * FROM cat_area WHERE id_area = '{$rows['id_area']}'") or die("<b>Fatal error: </b>".$conn->error);
                                $area = $area->fetch_assoc();
                                print($area['area'])
                                ?>
                            </td>
                            <td><?php print($rows['direccion'])?></td>

                            <td>
                                <button class="btn btn-danger btn-circle btn-sm" data-placement="right" data-toggle="tooltip" title="Eliminar Colaborador"  id="eliminarColaborador">
                                    <i class="fa fa-trash-o"></i>
                                </button>

                                <button class="btn btn-primary btn-circle btn-sm" data-placement="right" data-toggle="tooltip" title="Modificar Colaborador">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </td>
                        </tr>
                        <?php
                        endwhile;
                        endif;
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

