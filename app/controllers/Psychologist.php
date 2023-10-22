<?php
	class Psychologist extends Controlador {
		// variables
		private $datos = [];

		// Constructor
		function __construct() {
			// Declaracion del modelo
			$this->modeloUser = $this->modelo('Users');
			$this->modeloPsychologist = $this->modelo('Psychologists');
			$this->modeloAdmin = $this->modelo('Admins');
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
			header("location:" . RUTA_URL . 'Psychologist/dashboard/');
			// header("location:" . RUTA_URL . "User/login");
		}

		function logout() {
			// session_start();
			session_destroy();
			header("location:" . RUTA_URL);
		}

		// Vista del user lvl 1
		function dashboard() { 
			redirect_after_login('Psychologist/dashboard');
			
			$this->vista("lvl2/index", $this->datos);	
		}

		function users($parametro = '') {
			redirect_after_login('Psychologist/users');
			// admin/
			if ($parametro == '') {
				$users = $this->modeloPsychologist->getPasientes();
				$this->datos['users'] = isset($users) ? $users : '';
				// ? Carga la vista
				$this->vista("lvl2/tabla-pasientes", $this->datos);
			} else if ($parametro == 'add') {
				// admin/add
				//	echo "Añadir usuario";
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$datos["email"] = isset($_POST["email"]) ? trim($_POST["email"]) : '';
					$datos["password"] = isset($_POST["password"]) ? trim($_POST["password"]) : '12345678';
					$datos["nombre"] = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : '';
					$datos["apellidos"] = isset($_POST["apellidos"]) ? trim($_POST["apellidos"]) : '';
					$datos["tel"] = isset($_POST["tel"]) ? trim($_POST["tel"]) : '';
					$datos["ciudad"] = isset($_POST["ciudad"]) ? trim($_POST["ciudad"]) : '';
					$datos["cp"] = isset($_POST["cp"]) ? trim($_POST["cp"]) : '';
					$datos["role"] = isset($_POST["role"]) ? trim($_POST["role"]) : 1;
					//insercion de datos
					$add = $this->modeloAdmin->addUser( $datos );
					if ($add) {
						header('location:'.RUTA_URL.'psychologist/users');
					}
				}
				// ? Carga la vista
				$this->vista("lvl2/add-user", $this->datos);
			}
		}

		function graficas_generales() {
			redirect_after_login(RUTA_URL . 'user/graficas_generales/', RUTA_URL . 'user/login/');
			// Consultas SQL
			$test1 = $this->modeloPsychologist->getTest1GraficaGeneral();
			$test2 = $this->modeloPsychologist->getTest2GraficaGeneral();
			$test3 = $this->modeloPsychologist->getTest1GraficaGeneral();
			// Guardamos los datos...
			$this->datos['test'][] = $test1;
			$this->datos['test'][] = $test2;
			$this->datos['test'][] = $test3;
			$this->vista("lvl2/graficas_generales", $this->datos);
		}

		function chart_pie($id = '') {
			$dato_alumno['user']['id'] = $id;
			$test1 = $this->modeloUser->getTest1GraficaID( $dato_alumno );
			$test2 = $this->modeloUser->getTest2GraficaID( $dato_alumno );
			$test3 = $this->modeloUser->getTest3GraficaID( $dato_alumno );


			$this->datos['test'][] = $test1;
			$this->datos['test'][] = $test2;
			$this->datos['test'][] = $test3;
			$this->vista("lvl2/graficas_id", $this->datos);
		}
		

	}	
?>