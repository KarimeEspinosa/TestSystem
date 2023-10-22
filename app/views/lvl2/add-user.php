<!DOCTYPE html>
<html lang="es">
	<head>
		<?php require_once(RUTA_APP . "/views/inc/d/head.html"); ?>
		<title>User</title>
	</head>
	<body class="nav-fixed">
		<!-- x -->
		<?php require_once(RUTA_APP . "/views/lvl2/dashboard/topbar.html"); ?>
		<!-- x -->
		<div id="layoutSidenav">
			<div id="layoutSidenav_content">
				<main>
					<!-- header -->
					<?php require_once(RUTA_APP . "/views/lvl2/dashboard/sidebar.html"); ?>

					<!-- Main page content-->
					<div class="main-page-content">
						<div class="container px-4 mt-4">
							<!-- <h5>Dashboard</h5> -->
							<div class="card">
								<div class="card-body">
									<?php require_once(RUTA_APP . "/views/form/form-user.html"); ?>
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