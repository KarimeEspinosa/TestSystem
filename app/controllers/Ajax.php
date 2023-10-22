<?php
	class Ajax extends Controlador {
		// variables
		private $datos = [];

		// Constructor
		function __construct() {
			// Declaracion del modelo
			$this->modeloUser = $this->modelo('Users');
			$this->modeloAdmin = $this->modelo('Admins');
			// Configuracion
			date_default_timezone_set('America/Mexico_City');
		}

        function index() {
            echo "ajax";
        }

        function json_estadistica_preferencia() {
            $result = $this->modeloAdmin->getEstadisticasDePreferencias();
            echo json_encode($result);
        }
	}
?>