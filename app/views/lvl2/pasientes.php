<!DOCTYPE html>
<html lang="es">
	<head>
		<?php
			require_once(RUTA_APP . "/views/inc/head.php");
		?>
		<title></title>
	</head>
	<body>
		<div id="dashboard" class="">
			<!-- sidebar -->
			<?php require_once(RUTA_APP . "/views/lvl2/dashboard/sidebar.php"); ?>
			<!-- Content Wrapper -->
			<div id="content-dashboard" class="">
				<div id="content" class="main">
                    <?php require_once(RUTA_APP . "/views/lvl2/dashboard/navbar.php"); ?>
					<!-- Begin Page Content -->
					<div class="container pt-3">
						<!-- <h6 class="h3 mb-4 text-gray-800">Roles</h6> -->
						<h6 class="h3 my-4 text-gray-800 text-uppercase">Usuarios</h6>
						<div class="card">
							<div class="card-header text-uppercase">Usuarios</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="tableUsers" class="table table-striped border">
										<thead class="thead-dark">
											<tr>
												<th>ID</th>
												<th>Role</th>
												<th>Email</th>
												<th>Password</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach($datos['users'] as $index => $dato) : ?>
											<tr>
												<th><?php echo $dato->id; ?></th>
												<td><?php echo $dato->role; ?></td>
												<td><?php echo $dato->email; ?></td>
												<td><?php echo $dato->password; ?></td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- x -->
					</div>
				</div>
				<?php require_once(RUTA_APP . "/views/lvl2/dashboard/footer.php"); ?>
			</div>
		</div>

		<!-- MODALS -->
		<?php ?>
		<!-- JS -->
		<?php require_once(RUTA_APP . "/views/inc/script.php"); ?>
			<script type="text/javascript">
			$(document).ready( function () {
				$('#tableUsers').DataTable();
			} );
		</script>
	</body>
</html>