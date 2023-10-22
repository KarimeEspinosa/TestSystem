<!DOCTYPE html>
<html lang="es">
	<head>
		<?php require_once(RUTA_APP . "/views/inc/d/head.html"); ?>
		<title>User</title>
	</head>
	<body class="nav-fixed">
		<!-- x -->
		<?php require_once(RUTA_APP . "/views/lvl3/dashboard/topbar.html"); ?>
		<!-- x -->
		<div id="layoutSidenav">
			<?php require_once(RUTA_APP . "/views/lvl3/dashboard/sidebar.html"); ?>
			<div id="layoutSidenav_content">
				<main>
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