<!DOCTYPE html>
<html lang="es">
	<head>
		<?php require_once(RUTA_APP . "/views/inc/d/head.html"); ?>
		<title>User</title>
	</head>
	<body class="nav-fixed">
		<?php require_once(RUTA_APP . "/views/lvl1/dashboard/topbar.html"); ?>
		<!-- x -->
		<div id="layoutSidenav">
			<?php require_once(RUTA_APP . "/views/lvl1/dashboard/sidebar.html"); ?>

			<div id="layoutSidenav_content">
				<main>
					<!-- Main page content-->
					<div class="main-page-content mt-4">
						<div class="container">
							<h5>Dashboard XD</h5>
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