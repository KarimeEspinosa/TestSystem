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
			<div id="layoutSidenav_content">
				<main>
					<!-- header -->
					<?php require_once(RUTA_APP . "/views/lvl3/dashboard/sidebar.html"); ?>

					<!-- Main page content-->
					<div class="main-page-content">
						<div class="container px-4 mt-4">
							<div class="card">
								<div class="card-header">
									Alumnos
									
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="tableAlumnos" class="table table-striped">
											<thead class="table-dark">
												<tr>
													<th>ID</th>
													<th>Role</th>
													<th>Email</th>
													<th>Password</th>
													<th><i class="fa-solid fa-chart-pie"></i></th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($datos['users'] as $index => $dato) : ?>
												<tr>
													<th><?php echo $dato->id; ?></th>
													<td><?php echo $dato->role; ?></td>
													<td><?php echo $dato->email; ?></td>
													<td><?php echo $dato->password; ?></td>
													<td>
														<a
															href="<?php echo RUTA_URL.$datos["cc"].'/chart_pie/'.$dato->id; ?>"
															class="btn btn-info btn-sm">
															<i class="fa-solid fa-chart-pie"></i>
														</a>
													</td>
												</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
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
		<script>
			$(document).ready(function () {
				$('#tableAlumnos').DataTable();
			});
		</script>
	</body>
</html>