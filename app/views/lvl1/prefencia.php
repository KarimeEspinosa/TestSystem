<!DOCTYPE html>
<html lang="es">
	<head>
		<?php require_once(RUTA_APP . "/views/inc/d/head.html"); ?>
		<title>User</title>
	</head>
	<body class="nav-fixed">
		<!-- x -->
		<?php require_once(RUTA_APP . "/views/lvl1/dashboard/topbar.html"); ?>
		<!-- x -->
		<div id="layoutSidenav">
			<div id="layoutSidenav_content">
				<main>
					<!-- header -->
					<?php require_once(RUTA_APP . "/views/lvl1/dashboard/sidebar.html"); ?>

					<!-- Main page content-->
					<div class="main-page-content mt-4 px-sm-4">
						<div class="container">
							<!-- <h5>Test 1</h5> -->

                            <div class="card">
                                <div class="card-header">
                                    Test 1
                                </div>
                                <div class="card-body">
                                    <?php
										if ($datos['alert']) {echo $datos['alert'];}
										if ($datos['test1']) {
											require_once(RUTA_APP . "/views/form/form-preferencia.html");
										}
									?>
                                </div>
                            </div>
						</div>
					</div>
				</main>
				<!-- footer -->
				<?php require_once(RUTA_APP . "/views/inc/d/footer.html"); ?>
			</div>
		</div>
		<!-- MODALS -->
		<?php ?>
		<!-- JS -->
		<?php require_once(RUTA_APP . "/views/inc/d/scripts.html"); ?>
	</body>
</html>