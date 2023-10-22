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
					<!-- header -->
					<!-- Main page content-->
					<div class="main-page-content mt-4 px-4">
						<div class="container">
							<div class="row">
								<?php foreach($datos['test'] as $key => $dato) : ?>
								<div class="col-sm-6 col-md-4 mb-3">
									<div class="card">
										<div class="card-header">
											<?php echo $dato->title; ?>
										</div>
										<div class="card-body">
											<canvas id="test<?php echo $key; ?>"></canvas>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
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
			$(document).ready(function(){
				graficar();
			});

			function graficar() {
				<?php foreach($datos['test'] as $key => $dato) : ?>

				const ctx_<?php echo $key; ?> = document.getElementById('test<?php echo $key; ?>');

				new Chart(ctx_<?php echo $key; ?>, {
					type: 'pie',
					data: {
						labels: <?php echo $dato->labels; ?>,
						datasets: [{
							data: <?php echo $dato->data; ?>,
							backgroundColor: [
								'rgba('+Math.floor(Math.random() * 255)+','+Math.floor(Math.random() * 255)+','+Math.floor(Math.random() * 255)+')',
								'rgba('+Math.floor(Math.random() * 255)+','+Math.floor(Math.random() * 255)+','+Math.floor(Math.random() * 255)+')',
								'rgba('+Math.floor(Math.random() * 255)+','+Math.floor(Math.random() * 255)+','+Math.floor(Math.random() * 255)+')',
								'rgba('+Math.floor(Math.random() * 255)+','+Math.floor(Math.random() * 255)+','+Math.floor(Math.random() * 255)+')',
							]
						}],
					},
					
				});
				
				<?php endforeach; ?>

				return true;
			}
		</script>
	</body>
</html>