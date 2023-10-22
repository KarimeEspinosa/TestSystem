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
			<?php require_once(RUTA_APP . "/views/lvl1/dashboard/sidebar.php"); ?>
			<!-- Content Wrapper -->
			<div id="content-dashboard" class="">
				<?php require_once(RUTA_APP . "/views/lvl1/dashboard/navbar.php"); ?>
				<div id="content" class="main">
					<!-- Begin Page Content -->
					<div class="container pt-3">
						<h6 class="h3 mb-4 text-gray-800">test</h6>
						<br>
			<br>
				<div class="card text-center">
				<div class="card-header"></div>
				<div class="card-body">
					<h5 class="card-title">Canal de Aprendizaje de 
					preferencia </h5>
					    <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
					<a href="<?php echo RUTA_URL ?>user/test/1" class="btn btn-outline-secondary">¡Comienza!</a>
				</div>
				<div class="card-footer text-muted">
					    12 days ago
				</div>
				</div>


					<br>
					<br>
				<div class="card text-center">
					  <div class="card-header">
					    
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">TEST ESTILO DE APRENDIZAJE
					(MODELO PNL) </h5>
					
					    <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
					    <a href="<?php echo RUTA_URL ?>user/modelopnl
					    	" class="btn btn-outline-secondary">¡Comienza!</a>
					  </div>
					  <div class="card-footer text-muted">
					    17 days ago
					  </div>
					</div>

					<br>
					<br>
					<div class="card text-center">
					<div class="card-header">
					    
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">HONEY-ALONSO de ESTILOS DE APRENDIZAJE</h5>
					    <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
					    <a href="<?php echo RUTA_URL ?>user/Honey" class="btn btn-outline-secondary">¡Comienza!</a>
					  </div>
					  <div class="card-footer text-muted">
					    9 days ago
					  </div>
					</div>


					<br>
					<br>
				<div class="card text-center">
					  <div class="card-header">
					    
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">Test de Diagnóstico de Riesgos Psicosociales  </h5>
					
					    <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
					    <a href="<?php echo RUTA_URL ?>user/modelopnl
					    	" class="btn btn-outline-secondary">¡Comienza!</a>
					  </div>
					  <div class="card-footer text-muted">
					    17 days ago
					  </div>
					</div>
					</div>
				</div>
			</div>
		</div>

		<!-- MODALS -->
		<?php ?>
		<!-- JS -->
		<?php require_once(RUTA_APP . "/views/inc/script.php"); ?>
	</body>
</html>