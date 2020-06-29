<?php
include("../head2.php")
?>
<div class="container-fluid">
    <!-- .row -->
    <div class="row bg-title"
        style="background:url(../plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
        <div class="col-lg-12">
            <h4 class="page-title">Nueva contraseña</h4>
        </div>
        
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="d-flex justify-content-between">
                   
                    <button
                            class="fcbtn btn btn-success btn-outline btn-1b" data-toggle="modal"
                            data-target="#myModal">Cambiar
                    </button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header" style="padding:35px 50px;">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <font4>Nueva Contraseña</font4>
                                </div>
                                <div class="modal-body" style="padding:40px 50px;">
                                    <form class="user" id="form">

                                        <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                                Numero de empleado
                                                <input type="text" class="form-control form-control-user"
                                                       id="numero_usuario"
                                                       placeholder=" " required="">
                                            </div>
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                Nueva contraseña
                                                <input type="text" class="form-control form-control-user"
                                                       id="pass"
                                                       placeholder=" " required="">
                                            </div>
                                        </div>
                                        <div align="center">
                                            <button class="fcbtn btn btn-success btn-outline btn-1b" type="submit"
                                                    id="guardar_pass">
                                                CAMBIAR
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                
            </div>
        </div>
    </div>
    <!-- /.row -->

</div><!-- /.container-fluid -->
<?php
include("../footer.php")
?>