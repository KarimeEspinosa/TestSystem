<?php
	class User extends Controlador {
		// variables
		private $datos = [];

		// Constructor
		function __construct() {
			// Declaracion del modelo
			$this->modeloUser = $this->modelo('Users');
			// Configuracion
			session_start();
			$this->datos['user']['id'] = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 1;
			$this->datos['user']['role'] = isset($_SESSION['user']['role']) ? $_SESSION['user']['role'] : 1;
			$this->datos['user']['str_role'] = isset($_SESSION['user']['str_role']) ? $_SESSION['user']['str_role'] : 'user';
			$this->datos['user']['name'] = isset($_SESSION['user']['name']) ? $_SESSION['user']['name'] : 'name';
			$this->datos['user']['surnames'] = isset($_SESSION['user']['surnames']) ? $_SESSION['user']['surnames'] : 'surnames';
			$this->datos['user']['email'] = isset($_SESSION['user']['email']) ? $_SESSION['user']['email'] : '[email]';
			// helper
			$this->datos['cc'] = isset($_SESSION['str_current_controller']) ? $_SESSION['str_current_controller'] : 'User';
			date_default_timezone_set('America/Mexico_City');
		}

		function index() {
			redirect_after_login('');
			header("location:" . RUTA_URL . 'user/dashboard/');
			// header("location:" . RUTA_URL . "User/login");
		}

		function login() {
			// obj array
			$datos = [
				"alert" => '',
				"email" => '',
				"password" => '',
			];

			// METODO POST
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				// guadarmos los datos recibidos
				// ? Si la variable esta declarada guadar esa variable sino guadar en blanco
				$datos["email"] = isset($_POST["email"]) ? trim($_POST["email"]) : '';
				$datos["password"] = isset($_POST["password"]) ? trim($_POST["password"]) : '';

				// ejecutamos la consulta
				$login = $this->modeloUser->login($datos);
				switch($login->status) {
					case 0:
						$datos['alert'] = alert_warning('Email no existe');
						break;
					case 1:
						$_SESSION['session'] = true;
						$_SESSION['user']['id'] = $login->id;
						$_SESSION['user']['role'] = $login->role;
						$_SESSION['user']['name'] = $login->name;
						$_SESSION['user']['surnames']  = $login->surnames;
						$_SESSION['user']['email']  = $login->email;
						$_SESSION['user']['str_role'] = 'user';

						// Ir al rol
						switch($_SESSION['user']['role']) {
							case 1:
								header("location:" . RUTA_URL . "user/dashboard/");
								break;
							case 2:
								$_SESSION['user']['str_role'] = 'psicólogo';
								$_SESSION['str_current_controller'] = 'Psychologist';
								header("location:" . RUTA_URL . "psychologist/dashboard/");
								break;
							case 3:
								$_SESSION['user']['str_role'] = 'admin';
								$_SESSION['str_current_controller'] = 'Admin';
								header("location:" . RUTA_URL . "admin/dashboard/");
								break;
						}
						
						break;
					case 2:
						$datos['alert'] = alert_warning('PASSWORD NO COINCIDE');
						break;
					default: break;
				}
			}

			// ? Carga la vista
			$this->vista("lvl1/login", $datos);
		}

		function logout() {
			session_start();
			unset($_SESSION);
			session_destroy();
			header("location:" . RUTA_URL. 'user/login');
		}

		// Vista del user lvl 1
		function dashboard() { 
			redirect_after_login(RUTA_URL . 'user/dashboard', RUTA_URL . 'user/logout/');
			$this->vista("lvl1/index", $this->datos);
		}
		
		function test($parametro = ''){
			redirect_after_login('user/test');
			$this->datos['alert'] = '';
			$this->datos['test1'] = true;	// test 1 es de apreciacion
			$this->datos['test2'] = true;
			$this->datos['test3'] = true;

			if ($parametro == NULL) {
				$this->vista("lvl1/test", $this->datos);
			} else if ($parametro == 1) {
				// IF para guardar el test 2
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					// Guarda los datos del formulario (los input tienen de name; p + num)
					foreach ($_POST as $key => $dato) {$this->datos[$key] = $dato;}
					// enviamos los datos del post al db
					if ( $this->modeloUser->set_test1($this->datos) ) {
						$this->datos['alert'] = alert_success('test Guardado exitosamete');
					}
				}

				// * consultamos si ya esta hecho el test
				$test1 = $this->modeloUser->getTest1($this->datos);
				if ($test1) {
					$this->datos['test1'] = false;
					$this->datos['alert'] = alert_warning('test ya realizado');
				}

				// cargamos la vista correspondiente
				$this->vista("lvl1/prefencia", $this->datos);
			} else if ($parametro == 2) {
				// IF para guardar el test 2
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					foreach ($_POST as $key => $dato) {$this->datos[$key] = $dato;}
					// enviamos los datos del post al db
					if ( $this->modeloUser->set_test2($this->datos) ) {
						$this->datos['alert'] = alert_success('test Guardado exitosamete');
					}
				}

				$test2 = $this->modeloUser->getTest2($this->datos);
				if ($test2){
					$this->datos['test2'] = false;
					$this->datos['alert'] = alert_warning('test ya realizado');
				}

				// Cargamos la vista
				$this->vista("lvl1/modelopnl", $this->datos);
			} else if ($parametro == 3) {
				// IF para guardar el test 2
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					foreach ($_POST as $key => $dato) {$this->datos[$key] = $dato;}
					// enviamos los datos del post al db
					if ( $this->modeloUser->set_test3($this->datos) ) {
						$this->datos['alert'] = alert_success('test Guardado exitosamete');
					}
				}

				// * consultamos si ya esta hecho el test
				$test1 = $this->modeloUser->getTest3($this->datos);
				if ($test1) {
					$this->datos['test3'] = false;
					$this->datos['alert'] = alert_warning('test ya realizado');
				}
				// cargamos la vista correspondiente
				$this->vista("lvl1/honey", $this->datos);
			}

		}

		function chart_pie() {
			$dato_alumno['user']['id'] = $this->datos['user']['id'];
			$test1 = $this->modeloUser->getTest1GraficaID( $dato_alumno );
			$test2 = $this->modeloUser->getTest2GraficaID( $dato_alumno );
			$test3 = $this->modeloUser->getTest3GraficaID( $dato_alumno );

			$this->datos['test'][] = $test1;
			$this->datos['test'][] = $test2;
			$this->datos['test'][] = $test3;
			$this->vista("lvl1/grafica_id", $this->datos);
		}
	}

?>