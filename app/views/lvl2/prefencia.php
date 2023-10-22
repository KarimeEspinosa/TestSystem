<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once(RUTA_APP . "/views/inc/head.php");
    ?>
    <title>Canal de Aprendizaje de preferencia </title>
</head>
<body>
    <div id="dashboard" class="">
        <!-- sidebar -->
        <?php require_once(RUTA_APP . "/views/lvl2/dashboard/sidebar.php"); ?>
        <!-- Content Wrapper -->
        <div id="content-dashboard" class="">
            <?php require_once(RUTA_APP . "/views/lvl2/dashboard/navbar.php"); ?>
            <div id="content" class="main">
                <!--titulo-->
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h5 class="text-center h1">
                                Test para determinar el Canal de Aprendizaje de preferencia
                            </h5>
                        </div>
                    </div>
                </div>

                <!--Preguntas-->
                <div class="container-fluid mb-3">
                    <div class="row">
                        <div class="col">
                            <?php echo $datos['alert']; ?>

                            <div class="card">
                                <div class="card-body">
                                    <?php require_once(RUTA_APP . "/views/form/form-preferencia.html"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- x -->
            </div>
        </div>
    </div>
    <!-- JS -->
    <?php require_once(RUTA_APP . "/views/inc/script.php"); ?>
</body>
</html>