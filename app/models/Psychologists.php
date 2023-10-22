<?php
	class Psychologists {
		function __construct() {
			$this->db = new Database;
		}

		function addUser($datos = []) {
			$this->db->query("INSERT INTO user(role, email, password,name, surnames, tel, ciudad, cp) VALUES(:role, :email, :password, :name, :surnames, :tel, :ciudad, :cp)");
			$this->db->bind(':role', $datos["role"]);
			$this->db->bind(':email', $datos["email"]);
			$this->db->bind(':password', $datos["password"]);
			$this->db->bind(':name', $datos["nombre"]);
			$this->db->bind(':surnames', $datos["apellidos"]);
			$this->db->bind(':tel', $datos["tel"]);
			$this->db->bind(':ciudad', $datos["ciudad"]);
			$this->db->bind(':cp', $datos["cp"]);
			
			// $this->db->bind(':password', $datos["password"]);
			if ($this->db->execute()) {
				return true;
			} else {
				return false;
			}
		}

		
		function getPasientes() {
			$this->db->query("SELECT * FROM user WHERE role = 1 ");
			$resultado = $this->db->registros();
			return $resultado;
		}

		function getTest1GraficaGeneral() {
			$this->db->query("SELECT tbl.id,
				tbl.id_user,
				(SUM(tbl.p1) + SUM(tbl.p5) + SUM(tbl.p9) + SUM(tbl.p10) + SUM(tbl.p11) + SUM(tbl.p16) + SUM(tbl.p17) + SUM(tbl.p22) + SUM(tbl.p26) + SUM(tbl.p27) + SUM(tbl.p32) + SUM(tbl.p36)) AS sum_visual,
				(SUM(tbl.p2) + SUM(tbl.p3) + SUM(tbl.p12) + SUM(tbl.p13) + SUM(tbl.p15) + SUM(tbl.p19) + SUM(tbl.p20) + SUM(tbl.p23) + SUM(tbl.p24) + SUM(tbl.p28) + SUM(tbl.p29) + SUM(tbl.p33)) AS sum_auditivo,
				(SUM(tbl.p4) + SUM(tbl.p6) + SUM(tbl.p7) + SUM(tbl.p8) + SUM(tbl.p14) + SUM(tbl.p18) + SUM(tbl.p21) + SUM(tbl.p25) + SUM(tbl.p30) + SUM(tbl.p33) + SUM(tbl.p34) + SUM(tbl.p35)) AS sum_kinestesico
				FROM canal_de_aprendizaje_de_preferencia AS tbl;
			");
			$resultado = $this->db->registro();
			if ($resultado) {
				$resultado->status = 1;
				$sum_total = 0;
				$sum_total = $resultado->sum_visual + $resultado->sum_auditivo + $resultado->sum_kinestesico;
				$resultado->visual = $resultado->sum_visual;
				$resultado->auditivo = $resultado->sum_auditivo;
				$resultado->kinestesico = $resultado->sum_kinestesico;
				$resultado->title = 'test 1';
				$resultado->labels = '["visual", "auditivo", "kinestesico"]';
				$resultado->data = '["' . $resultado->visual . '","' . $resultado->auditivo . '", "' . $resultado->kinestesico .'"]';
			} else {
				$resultado = [
					'status' => 0,
					'title' => 'test 1',
					'labels' => '["visual", "auditivo", "kinestesico"]',
					'data' => '[0,0,0]'
				];
				$resultado = (object) $resultado;				
			}

			return $resultado;
		}

		function getTest2GraficaGeneral() {
			$this->db->query("SELECT *
				FROM test2 AS tbl
			");
			$resultado = $this->db->registros();
			if ($resultado) {
				// $resultado['status'] = 1;
				// $resultado['title'] = 'Grafica 2';
				$A = $B = $C = 0;
				foreach ($resultado as $row) {
					foreach ($row as $dato) {
						switch($dato) {
							case 'A':
							case 'a':
								$A = $A + 1;
								break;
							case 'B':
							case 'b':
								$B = $B + 1;
								break;
							case 'C':
							case 'c':
								$C = $C + 1;
								break;
						}
					}
				}
				$resultado2 = [
					'status' => 0,
					'title' => 'test 2',
					'labels' => '["visual", "auditivo", "kinestesico"]',
					'data' => '["' . $A . '","' . $B . '", "' . $C .'"]'
				];
				$resultado = (object) $resultado2;
			}  else {
				$resultado = [
					'status' => 0,
					'title' => 'test 2',
					'labels' => '["visual", "auditivo", "kinestesico"]',
					'data' => '[0,0,0]'
				];
				$resultado = (object) $resultado;
			}
			return $resultado;
		}

		function getTest3GraficaGeneral() {
			$this->db->query("SELECT *
				FROM test2 AS tbl
			");
			$resultado = $this->db->registros();

			if ($resultado) {
				foreach ($resultado as $row) {
					foreach ($row as $dato) {
					}
				}
				$resultado->status = 1;
				$activo = $reflexivo = $teorico = $pragmatico = 1;
				$resultado->title = 'test 3';
				$resultado->data = '["' . $activo . '","' . $reflexivo . '", "' . $teorico .'","' . $pragmatico .'"]';
				$resultado->labels = '["Activo", "Reflexivo", "Teorico", "Pragmatico"]';

			} else {
				$resultado = [
					'status' => 0,
					'title' => 'test 3',
					'labels' => '["Activo", "Reflexivo", "Teorico", "Pragmatico"]',
					'data' => '[0,0,0,0]'
				];
				$resultado = (object) $resultado;
			}

			return $resultado;
		}
	}
?>