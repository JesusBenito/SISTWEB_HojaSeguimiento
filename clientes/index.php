<?php
include("../head.php")
?>

<div class="container-fluid">
    <!-- .row -->
    <div class="row bg-title"
        style="background:url(../plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
        <div class="col-lg-12">
            <h4 class="page-title">Clientes</h4>
        </div>
        <div class="col-sm-6 col-md-6 col-xs-12">
            <ol class="breadcrumb pull-left">
                <li><a href="../index.php">Dashboard</a></li>
                <li class="active">Clientes</li>
            </ol>
        </div>

        <!-- /.col-lg-12 -->
    </div>
    <!--row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="d-flex justify-content-between">
                <h3 class="box-title m-b-0">Clientes</h3>
                <button class="fcbtn btn btn-success btn-outline btn-1b" data-toggle="modal"
                        data-target="#myModal">Agregar</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header" style="padding:35px 50px;">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <font4>Nuevo Cliente</font4>
                                </div>
                                <div class="modal-body" style="padding:40px 50px;">
                                    <form class="user" id="form">

                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                Cliente
                                                <input type="text" class="form-control form-control-user"
                                                       id="cliente"
                                                       placeholder="Cliente" required="">
                                            </div>
                                        </div>
                                        <div align="center">
                                            <button class="fcbtn btn btn-success btn-outline btn-1b" type="submit"
                                                    id="guardar_cliente">
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
                                <th>#</th>
                                <th>Clientes</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        include ("../conn.php");
                        $queryUsuarios = "SELECT * FROM `cat_clientes`;";
                                            $resultUsuarios = mysqli_query($conn, $queryUsuarios);
                                            if($resultUsuarios){  // returned TRUE, e.g. in case of a DELETE sql
                                              $num_rows = mysqli_num_rows($resultUsuarios);
                                              if($num_rows > 0){
                                                while($row = mysqli_fetch_array($resultUsuarios)){
                                                  echo '
                                                  <tr>
                                                    <td>'.$row['id_cliente'].'</td>
                                                    <td>'.$row['nombre_cliente'].'</td>
                                                    
                                         <td>
                                                <button class="btn btn-danger btn-circle btn-sm bajaCliente" data-idcliente="'.$row['id_cliente'].'"  data-toggle="tooltip"
                                                data-placement="left" title="Eliminar Cliente" >
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                                
                                                <a href="../modificar-estatus" class="btn btn-primary btn-circle btn-sm" data-toggle="tooltip"
                                                data-placement="right" title="Modificar Cliente">
                                                    <i class="fa fa-pencil"></i>
                                                </a>'.'
                                            </td>
                                                  </tr>
                                                  ';
                                                }
                                              }
                                              else{
                                                echo "No hay registros";
                                              }
                                            } else { // returned FALSE
                                              echo "Error: " . mysqli_error($conn);
                                            }
                                            mysqli_free_result($resultUsuarios);
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