<?php
include("../head.php");
?>

    <div class="container-fluid">
    <!-- .row -->
    <div class="row bg-title"
         style="background:url(../plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
        <div class="col-lg-12">
            <h4 class="page-title">Estatus</h4>
        </div>
        <div class="col-sm-6 col-md-6 col-xs-12">
            <ol class="breadcrumb pull-left">
                <li><a href="../index.php">Dashboard</a></li>
                <li class="active">Estatus</li>
            </ol>
        </div>

        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
    <div class="col-sm-12">
    <div class="white-box">
    <div class="d-flex justify-content-between">
        <h3 class="box-title m-b-0">Estatus</h3>
        <button class="fcbtn btn btn-success btn-outline btn-1b" data-toggle="modal"
                data-target="#myModal">Agregar
        </button>
    </div>
    <br>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <font4>Nuevo Estatus</font4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form class="user" id="form">

                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                Estatus
                                <input type="text" class="form-control form-control-user"
                                       id="estatus"
                                       placeholder="Estatus" required="">
                            </div>
                        </div>
                        <div align="center">
                            <button class="fcbtn btn btn-success btn-outline btn-1b" type="submit"
                                    id="guardar_estatus">
                                GUARDAR
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
    <table class="table color-table success-table">
    <thead>
    <tr>
        <th>#</th>
        <th>Estatus</th>
        <th class="text-nowrap">Action</th>
    </tr>
    </thead>
    <tbody>
        <?php
            include("../conn.php");
            $query = $conn->query("SELECT * FROM cat_estatus ") or die("<b>Fatal error: </b>" . $conn->error);
            if ($query->num_rows > 0):
                while ($rows = $query->fetch_assoc()):
        ?>
        <tr>
            <td><?php print($rows['id_estatus'])?></td>
            <td><?php print($rows['estatus'])?></td>
            <td>
                <button class="btn btn-danger btn-circle btn-sm bajaEstatus" data-placement="right" data-toggle="tooltip" title="Eliminar Estatus"  data-idestatus="<?php print($rows['id_estatus'])?>" >
                    <i class="fa fa-trash-o"></i>
                </button>

                <button class="btn btn-primary btn-circle btn-sm" data-placement="right" data-toggle="tooltip" title="Modificar Estatus">
                    <i class="fa fa-pencil"></i>
                </button>
            </td>


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