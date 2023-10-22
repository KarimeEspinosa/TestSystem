<!DOCTYPE html>
<html lang="es">
	<head>
		<?php
			require_once(RUTA_APP . "/views/inc/head.php");
		?>
		<title>Document</title>
	</head>
	<body>
		<div class="main">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-5 mx-auto">
						<form action="" method="POST">
							<div class="card">
								<h3 class="card-header text-center">
									Login
								</h3>
								<div class="card-body">
									<?php
										echo $datos['alert'];
									?>
									<div class="form-group">
										<input
											type="email"
											name="email"
											id="email"
											placeholder="email"
											class="form-control"
											value="<?php echo $datos['email']; ?>"
										/>
									</div>
									<div class="form-group">
										<input
											type="password"
											name="password"
											id="password"
											placeholder="password"
											class="form-control"
											value="<?php echo $datos['password']; ?>"
										/>
									</div>
									<div class="form-group mt-5">
										<button
											type="submit"
											name="login"
											class="btn btn-success w-100"
										>
											Login
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php
			require_once(RUTA_APP . "/views/inc/scripts.html");
		?>
	</body>
</html>
