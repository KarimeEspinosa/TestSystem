<?php
	class Users {
		function __construct() {
			$this->db = new Database;
		}
		
		function login($datos = []) {
			$this->db->query("SELECT * FROM user s WHERE s.email = :email");
			// Deeclaracion de variables
			$this->db->bind(':email', $datos["email"]);
			// Ejecucion de la consulta
			$resultado = $this->db->registro();

			if ($resultado) {
				// Existe ese correo
				if ($resultado->password == $datos['password']) {
					$resultado->status = 1;	// la contraseña es correcta
				} else {
					$resultado->status = 2; // Contraseña incorrecta
				}
			} else {
				// Email no encontrado
				$resultado = ["status" => 0];
				$resultado = (object) $resultado;
			}		

			return $resultado;
		}

		

		// set establecer
		function set_test1($datos = []) {
			$this->db->query("INSERT INTO 
				canal_de_aprendizaje_de_preferencia(
					id_user,
					p1, p2, p3, p4, p5, p6, p7, p8, p9,
					p10, p11, p12, p13, p14, p15, p16, p17, p18, p19,
					p20, p21, p22, p23, p24, p25, p26, p27, p28, p29,
					p30, p31, p32, p33, p34, p35, p36
				)
				VALUES(
					:id_user,
					:p1, :p2, :p3, :p4, :p5, :p6, :p7, :p8, :p9,
					:p10, :p11, :p12, :p13, :p14, :p15, :p16, :p17, :p18, :p19,
					:p20, :p21, :p22, :p23, :p24, :p25, :p26, :p27, :p28, :p29,
					:p30, :p31, :p32, :p33, :p34, :p35, :p36
				)
			");
			$this->db->bind(':id_user', $datos['user']['id']);
			$this->db->bind(':p1', $datos["p1"]);
			$this->db->bind(':p2', $datos["p2"]);
			$this->db->bind(':p3', $datos["p3"]);
			$this->db->bind(':p4', $datos["p4"]);
			$this->db->bind(':p5', $datos["p5"]);
			$this->db->bind(':p6', $datos["p6"]);
			$this->db->bind(':p7', $datos["p7"]);
			$this->db->bind(':p8', $datos["p8"]);
			$this->db->bind(':p9', $datos["p9"]);
			$this->db->bind(':p10', $datos["p10"]);
			$this->db->bind(':p11', $datos["p11"]);
			$this->db->bind(':p12', $datos["p12"]);
			$this->db->bind(':p13', $datos["p13"]);
			$this->db->bind(':p14', $datos["p14"]);
			$this->db->bind(':p15', $datos["p15"]);
			$this->db->bind(':p16', $datos["p16"]);
			$this->db->bind(':p17', $datos["p17"]);
			$this->db->bind(':p18', $datos["p18"]);
			$this->db->bind(':p19', $datos["p19"]);
			$this->db->bind(':p20', $datos["p20"]);
			$this->db->bind(':p21', $datos["p21"]);
			$this->db->bind(':p22', $datos["p22"]);
			$this->db->bind(':p23', $datos["p23"]);
			$this->db->bind(':p24', $datos["p24"]);
			$this->db->bind(':p25', $datos["p25"]);
			$this->db->bind(':p26', $datos["p26"]);
			$this->db->bind(':p27', $datos["p27"]);
			$this->db->bind(':p28', $datos["p28"]);
			$this->db->bind(':p29', $datos["p29"]);
			$this->db->bind(':p30', $datos["p30"]);
			$this->db->bind(':p31', $datos["p31"]);
			$this->db->bind(':p32', $datos["p32"]);
			$this->db->bind(':p33', $datos["p33"]);
			$this->db->bind(':p34', $datos["p34"]);
			$this->db->bind(':p35', $datos["p35"]);
			$this->db->bind(':p36', $datos["p36"]);
			// Ejecutamos...
			if ($this->db->execute()) {
				return true;
			} else {
				return false;
			}
		}

		function set_test2($datos = []) {
			$this->db->query("INSERT INTO 
				test2(
					id_user,
					p1,
					p2,
					p3,
					p4,
					p5,
					p6,
					p7,
					p8,
					p9,
					p10,
					p11,
					p12,
					p13,
					p14,
					p15,
					p16,
					p17,
					p18,
					p19,
					p20,
					p21,
					p22,
					p23,
					p24,
					p25,
					p26,
					p27,
					p28,
					p29,
					p30,
					p31,
					p32,
					p33,
					p34,
					p35,
					p36,
					p37,
					p38,
					p39,
					p40
				)
				VALUES(
					:id_user,
					:p1,
					:p2,
					:p3,
					:p4,
					:p5,
					:p6,
					:p7,
					:p8,
					:p9,
					:p10,
					:p11,
					:p12,
					:p13,
					:p14,
					:p15,
					:p16,
					:p17,
					:p18,
					:p19,
					:p20,
					:p21,
					:p22,
					:p23,
					:p24,
					:p25,
					:p26,
					:p27,
					:p28,
					:p29,
					:p30,
					:p31,
					:p32,
					:p33,
					:p34,
					:p35,
					:p36,
					:p37,
					:p38,
					:p39,
					:p40


				)
			");
			$this->db->bind(':id_user', $datos['user']['id']);
			$this->db->bind(':p1', $datos["p1"]);
			$this->db->bind(':p2', $datos["p2"]);
			$this->db->bind(':p3', $datos["p3"]);
			$this->db->bind(':p4', $datos["p4"]);
			$this->db->bind(':p5', $datos["p5"]);
			$this->db->bind(':p6', $datos["p6"]);
			$this->db->bind(':p7', $datos["p7"]);
			$this->db->bind(':p8', $datos["p8"]);
			$this->db->bind(':p9', $datos["p9"]);
			$this->db->bind(':p10', $datos["p10"]);
			$this->db->bind(':p11', $datos["p11"]);
			$this->db->bind(':p12', $datos["p12"]);
			$this->db->bind(':p13', $datos["p13"]);
			$this->db->bind(':p14', $datos["p14"]);
			$this->db->bind(':p15', $datos["p15"]);
			$this->db->bind(':p16', $datos["p16"]);
			$this->db->bind(':p17', $datos["p17"]);
			$this->db->bind(':p18', $datos["p18"]);
			$this->db->bind(':p19', $datos["p19"]);
			$this->db->bind(':p20', $datos["p20"]);
			$this->db->bind(':p21', $datos["p21"]);
			$this->db->bind(':p22', $datos["p22"]);
			$this->db->bind(':p23', $datos["p23"]);
			$this->db->bind(':p24', $datos["p24"]);
			$this->db->bind(':p25', $datos["p25"]);
			$this->db->bind(':p26', $datos["p26"]);
			$this->db->bind(':p27', $datos["p27"]);
			$this->db->bind(':p28', $datos["p28"]);
			$this->db->bind(':p29', $datos["p29"]);
			$this->db->bind(':p30', $datos["p30"]);
			$this->db->bind(':p31', $datos["p31"]);
			$this->db->bind(':p32', $datos["p32"]);
			$this->db->bind(':p33', $datos["p33"]);
			$this->db->bind(':p34', $datos["p34"]);
			$this->db->bind(':p35', $datos["p35"]);
			$this->db->bind(':p36', $datos["p36"]);
			$this->db->bind(':p37', $datos["p37"]);
			$this->db->bind(':p38', $datos["p38"]);
			$this->db->bind(':p39', $datos["p39"]);
			$this->db->bind(':p40', $datos["p40"]);

			// Ejecutamos...
			if ($this->db->execute()) {
				return true;
			} else {
				return false;
			}
		}

		function set_test3($datos = []) {
			$this->db->query("INSERT INTO 
				test3(
					id_user,
					p1, p2, p3, p4, p5, p6, p7, p8, p9,
					p10, p11, p12, p13, p14, p15, p16, p17, p18, p19,
					p20, p21, p22, p23, p24, p25, p26, p27, p28, p29,
					p30, p31, p32, p33, p34, p35, p36, p37, p38, p39,
					p40, p41, p42, p43, p44, p45, p46, p47, p48, p49,
					p50, p51, p52, p53, p54, p55, p56, p57, p58, p59,
					p60, p61, p62, p63, p64, p65, p66, p67, p68, p69,
					p70, p71, p72, p73, p74, p75, p76, p77, p78, p79,
					p80
				)
				VALUES(
					:id_user,
					:p1, :p2, :p3, :p4, :p5, :p6, :p7, :p8, :p9,
					:p10, :p11, :p12, :p13, :p14, :p15, :p16, :p17, :p18, :p19,
					:p20, :p21, :p22, :p23, :p24, :p25, :p26, :p27, :p28, :p29,
					:p30, :p31, :p32, :p33, :p34, :p35, :p36, :p37, :p38, :p39,
					:p40, :p41, :p42, :p43, :p44, :p45, :p46, :p47, :p48, :p49,
					:p50, :p51, :p52, :p53, :p54, :p55, :p56, :p57, :p58, :p59,
					:p60, :p61, :p62, :p63, :p64, :p65, :p66, :p67, :p68, :p69,
					:p70, :p71, :p72, :p73, :p74, :p75, :p76, :p77, :p78, :p79,
					:p80
				)
			");
			$this->db->bind(':id_user', $datos['user']['id']);
			$this->db->bind(':p1', $datos["p1"]);
			$this->db->bind(':p2', $datos["p2"]);
			$this->db->bind(':p3', $datos["p3"]);
			$this->db->bind(':p4', $datos["p4"]);
			$this->db->bind(':p5', $datos["p5"]);
			$this->db->bind(':p6', $datos["p6"]);
			$this->db->bind(':p7', $datos["p7"]);
			$this->db->bind(':p8', $datos["p8"]);
			$this->db->bind(':p9', $datos["p9"]);
			$this->db->bind(':p10', $datos["p10"]);
			$this->db->bind(':p11', $datos["p11"]);
			$this->db->bind(':p12', $datos["p12"]);
			$this->db->bind(':p13', $datos["p13"]);
			$this->db->bind(':p14', $datos["p14"]);
			$this->db->bind(':p15', $datos["p15"]);
			$this->db->bind(':p16', $datos["p16"]);
			$this->db->bind(':p17', $datos["p17"]);
			$this->db->bind(':p18', $datos["p18"]);
			$this->db->bind(':p19', $datos["p19"]);
			$this->db->bind(':p20', $datos["p20"]);
			$this->db->bind(':p21', $datos["p21"]);
			$this->db->bind(':p22', $datos["p22"]);
			$this->db->bind(':p23', $datos["p23"]);
			$this->db->bind(':p24', $datos["p24"]);
			$this->db->bind(':p25', $datos["p25"]);
			$this->db->bind(':p26', $datos["p26"]);
			$this->db->bind(':p27', $datos["p27"]);
			$this->db->bind(':p28', $datos["p28"]);
			$this->db->bind(':p29', $datos["p29"]);
			$this->db->bind(':p30', $datos["p30"]);
			$this->db->bind(':p31', $datos["p31"]);
			$this->db->bind(':p32', $datos["p32"]);
			$this->db->bind(':p33', $datos["p33"]);
			$this->db->bind(':p34', $datos["p34"]);
			$this->db->bind(':p35', $datos["p35"]);
			$this->db->bind(':p36', $datos["p36"]);
			$this->db->bind(':p37', $datos["p37"]);
			$this->db->bind(':p38', $datos["p38"]);
			$this->db->bind(':p39', $datos["p39"]);
			$this->db->bind(':p40', $datos["p40"]);
			$this->db->bind(':p41', $datos["p41"]);
			$this->db->bind(':p42', $datos["p42"]);
			$this->db->bind(':p43', $datos["p43"]);
			$this->db->bind(':p44', $datos["p44"]);
			$this->db->bind(':p45', $datos["p45"]);
			$this->db->bind(':p46', $datos["p46"]);
			$this->db->bind(':p47', $datos["p47"]);
			$this->db->bind(':p48', $datos["p48"]);
			$this->db->bind(':p49', $datos["p49"]);
			$this->db->bind(':p50', $datos["p50"]);
			$this->db->bind(':p51', $datos["p51"]);
			$this->db->bind(':p52', $datos["p52"]);
			$this->db->bind(':p53', $datos["p53"]);
			$this->db->bind(':p54', $datos["p54"]);
			$this->db->bind(':p55', $datos["p55"]);
			$this->db->bind(':p56', $datos["p56"]);
			$this->db->bind(':p57', $datos["p57"]);
			$this->db->bind(':p58', $datos["p58"]);
			$this->db->bind(':p59', $datos["p59"]);
			$this->db->bind(':p60', $datos["p60"]);
			$this->db->bind(':p61', $datos["p61"]);
			$this->db->bind(':p62', $datos["p62"]);
			$this->db->bind(':p63', $datos["p63"]);
			$this->db->bind(':p64', $datos["p64"]);
			$this->db->bind(':p65', $datos["p65"]);
			$this->db->bind(':p66', $datos["p66"]);
			$this->db->bind(':p67', $datos["p67"]);
			$this->db->bind(':p68', $datos["p68"]);
			$this->db->bind(':p69', $datos["p69"]);
			$this->db->bind(':p70', $datos["p70"]);
			$this->db->bind(':p71', $datos["p71"]);
			$this->db->bind(':p72', $datos["p72"]);
			$this->db->bind(':p73', $datos["p73"]);
			$this->db->bind(':p74', $datos["p74"]);
			$this->db->bind(':p75', $datos["p75"]);
			$this->db->bind(':p76', $datos["p76"]);
			$this->db->bind(':p77', $datos["p77"]);
			$this->db->bind(':p78', $datos["p78"]);
			$this->db->bind(':p79', $datos["p79"]);
			$this->db->bind(':p80', $datos["p80"]);

			// Ejecutamos...
			if ($this->db->execute()) {
				return true;
			} else {
				return false;
			}
		}

		// get obtener

		function getTest1($datos = []) {
			$this->db->query("SELECT * FROM canal_de_aprendizaje_de_preferencia as t1 WHERE t1.id_user = :id_user");
			$this->db->bind(':id_user', $datos['user']['id']);
			$resultado = $this->db->registro();
			
			return $resultado;
		}

		function getTest2($datos = []) {
			$this->db->query("SELECT * FROM test2 as t1 WHERE t1.id_user = :id_user");
			$this->db->bind(':id_user', $datos['user']['id']);
			$resultado = $this->db->registro();
			return $resultado;
		}

		function getTest3($datos = []) {
			$this->db->query("SELECT * FROM test3 as t1 WHERE t1.id_user = :id_user");
			$this->db->bind(':id_user', $datos['user']['id']);
			$resultado = $this->db->registro();
			return $resultado;
		}
		function getTest4($datos = []) {
			$this->db->query("SELECT * FROM test4 as t1 WHERE t1.id_user = :id_user");
			$this->db->bind(':id_user', $datos['user']['id']);
			$resultado = $this->db->registro();
			return $resultado;
		}

		// para graficar

		function getTest1GraficaID($datos = []) {
			$this->db->query("SELECT tbl.id,
				tbl.id_user,
				(tbl.p1 + tbl.p5 + tbl.p9 + tbl.p10 + tbl.p11 + tbl.p16 + tbl.p17 + tbl.p22 + tbl.p26 + tbl.p27 + tbl.p32 + tbl.p36) AS sum_visual,
				(tbl.p2 + tbl.p3 + tbl.p12+ tbl.p13 + tbl.p15 + tbl.p19 + tbl.p20 + tbl.p23 + tbl.p24 + tbl.p28 + tbl.p29 + tbl.p33) AS sum_auditivo,
				(tbl.p4 + tbl.p6 + tbl.p7 + tbl.p8 + tbl.p14 + tbl.p18 + tbl.p21 + tbl.p25 + tbl.p30+ tbl.p33+ tbl.p34+ tbl.p35) AS sum_kinestesico
				FROM canal_de_aprendizaje_de_preferencia AS tbl
				WHERE tbl.id_user = :id_user
			");
			$this->db->bind(':id_user', $datos['user']['id']);
			$resultado = $this->db->registro();

			if ($resultado) {
				$resultado->status = 1;
				$sum_total = 0;
				$sum_total = $resultado->sum_visual + $resultado->sum_auditivo + $resultado->sum_kinestesico;
				$resultado->visual = $resultado->sum_visual / $sum_total * 100;
				$resultado->auditivo = $resultado->sum_auditivo /$sum_total * 100;
				$resultado->kinestesico = $resultado->sum_kinestesico /$sum_total * 100;
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

		function getTest2GraficaID($datos = []) {
			$this->db->query("SELECT *
				FROM test2 AS tbl
				WHERE tbl.id_user = :id_user
			");
			$this->db->bind(':id_user', $datos['user']['id']);
			$resultado = $this->db->registro();

			if ($resultado) {
				$resultado->status = 1;
				$A = $V = $C = 0;
				foreach ($resultado as $key => $dato) {
					switch($dato) {
						case 'A':
						case 'a':
							$A = $A + 1;
							break;
						case 'V':
						case 'v':
							$V = $V + 1;
							break;
						case 'C':
						case 'c':
							$C = $C + 1;
							break;
					}
				}
				$resultado->visual = $V;
				$resultado->auditivo = $A;
				$resultado->kinestesico = $C;
				$resultado->title = 'test 2';
				$resultado->labels = '["visual", "auditivo", "kinestesico"]';
				$resultado->data = '["' . $resultado->visual . '","' . $resultado->auditivo . '", "' . $resultado->kinestesico .'"]';

			} else {
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

		function getTest3GraficaID($datos = []) {
			$this->db->query("SELECT tbl.id,  
				tbl.id_user,

				(tbl.p3 + tbl.p5 + tbl.p7 + tbl.p9 + tbl.p13 + tbl.p20 + tbl.p26 + tbl.p27 + tbl.p35 + tbl.p37 + tbl.p41 + tbl.p43  + tbl.p46 + tbl.p48  + tbl.p51 + tbl.p61  + tbl.p67 + tbl.p74  + tbl.p75 + tbl.p77) AS sum_activo,
				(tbl.p10 + tbl.p16 + tbl.p18 + tbl.p19 + tbl.p28 + tbl.p31 + tbl.p32 + tbl.p34 + tbl.p36 + tbl.p39 + tbl.p42 + tbl.p44  + tbl.p49 + tbl.p55  + tbl.p58 + tbl.p63  + tbl.p65 + tbl.p69  + tbl.p70 + tbl.p79) AS sum_reflexivo,

				(tbl.p2 + tbl.p4 + tbl.p6+ tbl.p11 + tbl.p15 + tbl.p17 + tbl.p21 + tbl.p23 + tbl.p25 + tbl.p29 + tbl.p33  + tbl.p45 + tbl.p50  + tbl.p54 + tbl.p60  + tbl.p64 + tbl.p66  + tbl.p71 + tbl.p78  + tbl.p80) AS sum_teorico,

				(tbl.p1 + tbl.p8 + tbl.p12 + tbl.p14 + tbl.p22 + tbl.p24 + tbl.p30 + tbl.p38 + tbl.p40+ tbl.p47+ tbl.p52+ tbl.p53 + tbl.p56 + tbl.p57 + tbl.p59  + tbl.p62 + tbl.p68  + tbl.p72 + tbl.p73  + tbl.p76) AS sum_pragmatico


				FROM test3 AS tbl
				WHERE tbl.id_user = :id_user
			");
			$this->db->bind(':id_user', $datos['user']['id']);
			$resultado = $this->db->registro();

			if ($resultado) {
				$resultado->status = 1;
				$sum_total = 0;
				$sum_total = $resultado->sum_activo + $resultado->sum_reflexivo + $resultado->sum_teorico + $resultado->sum_pragmatico;
				$resultado->activo = $resultado->sum_activo;
				$resultado->reflexivo = $resultado->sum_reflexivo;
				$resultado->teorico = $resultado->sum_teorico;
				$resultado->pragmatico = $resultado->sum_pragmatico;

				$resultado->title = 'test 3';
				$resultado->labels = '["Activo", "Reflexivo", "Teorico", "Pragmatico"]';
				$resultado->data = '["' . $resultado->activo . '","' . $resultado->reflexivo . '", "' . $resultado->teorico .'","' . $resultado->pragmatico .'"]';
				
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