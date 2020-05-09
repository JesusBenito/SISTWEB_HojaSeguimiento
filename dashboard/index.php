<?php
include("../head.php");
?>

    <div class="container-fluid">
        <!-- .row -->
        <div class="row bg-title"
             style="background:url(../plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
            <div class="col-lg-12">
                <h4 class="page-title">Inicio</h4>
            </div>
            <div class="col-sm-6 col-md-6 col-xs-12">
                <ol class="breadcrumb pull-left">
                    <li class="active">Dashboard</li>
                </ol>
            </div>

            <!-- /.col-lg-12 -->
        </div>
        <!--row -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="row row-in">
                        <div class="col-lg-4 col-sm-6 row-in-br">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="fa fa-users"></i>
                                    <h5 class="text-muted vb">COLABORADORES</h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-danger">
                                    <?php
                                            include '../conn.php';
                                            $sql = "SELECT COUNT(*) AS contador FROM  colaboradores";
                                            $result = mysqli_query($conn, $sql);
                                            $row = $result->fetch_assoc();
                                           print($row["contador"]);
                                        ?>
                                    </h3>
                                </div>
                            
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 row-in-br  b-r-none">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="fa fa-sitemap"></i>
                                    <h5 class="text-muted vb">PROYECTOS</h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-megna">
                                    <?php
                                            include '../conn.php';
                                            $sql = "SELECT COUNT(*) AS contador FROM  cat_proyectos where status_proyecto=1";
                                            $result = mysqli_query($conn, $sql);
                                            $row = $result->fetch_assoc();
                                           print($row["contador"]);
                                        ?>
                                    </h3>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 row-in-br">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="fa fa-users"></i>
                                    <h5 class="text-muted vb">CLIENTES</h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-primary">
                                    <?php
                                            include '../conn.php';
                                            $sql = "SELECT COUNT(*) AS contador FROM  cat_clientes";
                                            $result = mysqli_query($conn, $sql);
                                            $row = $result->fetch_assoc();
                                           print($row["contador"]);
                                        ?>
                                    </h3>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </div>
<?php
include("../footer.php")
?>