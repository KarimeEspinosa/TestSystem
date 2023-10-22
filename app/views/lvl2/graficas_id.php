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

				        <?php if ($key === 2): ?>
        new Chart(ctx_<?php echo $key; ?>, {
            type: 'radar',  // Cambiar el tipo de gráfica a 'radar' para el "test 3"
            data: {
                labels: <?php echo $dato->labels; ?>,
                datasets: [{
                    data: <?php echo $dato->data; ?>,
                    borderColor: 'rgba(<?php echo rand(0, 255); ?>, <?php echo rand(0, 255); ?>, <?php echo rand(0, 255); ?>, 1)',
                    backgroundColor: 'rgba(<?php echo rand(0, 255); ?>, <?php echo rand(0, 255); ?>, <?php echo rand(0, 255); ?>, 0.2)',
                    pointBackgroundColor: 'rgba(<?php echo rand(0, 255); ?>, <?php echo rand(0, 255); ?>, <?php echo rand(0, 255); ?>, 1)',
                }],
            },
             options: {
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            // Get the score value from the data point
                            const score = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                            return 'Score: ' + score; // Display the score as the tooltip label
                        }
                    }
                },


             }

        });
        <?php else: ?>




				

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


        <?php endif; ?>
				
				<?php endforeach; ?>

				return true;
			}
		</script>
	</body>
</html>