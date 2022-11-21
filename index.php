<?php session_start();
if ($_SESSION['autenticado'] != 'yeah') {
    header('Location: Login/login.php');
    exit();
}
include_once './Menu/Inicio.php';

?>

    <section class="content">
        <div class="container-fluid">
                <div class="page-header">
                    <h1 class="all-tittles">


                        <?php

                        if (isset($_SESSION)) {
                            $sexo = $_SESSION['sexo_User'];
                            if ($sexo == 'Masculino') {
                                echo 'Bienvenido ';
                            } else {
                                if ($sexo == 'Femenino') {
                                    echo 'Bienvenida ';
                                }
                            }
                        }
                        ?>

                        <small><?php if (isset($_SESSION)) {
                            $nomb = $_SESSION['nombre_User'];
                            echo $nomb;
                        }

                                ?></small></h1>
                    <!--dependiendo del usuario asi seria el msj de bienvenidad -->

                </div>

            </div>
            <!-- validacion por genero -->
            <div class="body">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/imag-escuela/img1.jpg" width="1000" height="1000" alt="" />
                        </div>
                        <div class="item">
                            <img src="images/imag-escuela/img2.jpg" width="1000" height="1000" alt="" />
                        </div>
                        <div class="item">
                            <img src="images/imag-escuela/img3.jpg" width="1000" height="1000" alt="" />
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
            <hr class="sidebar-divider d-none d-md-block">
        </div>
    </section>
<?php
include_once './Menu/fin.php';
//asi mas ordenado porque programando se me jodio el menu y asi no se jode
//
?>