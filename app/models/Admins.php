<?php
	class Admins {
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
		
		function getRoles() {
			$this->db->query("SELECT * FROM user_role");
			$resultado = $this->db->registros();
			return $resultado;
		}

		function getUsers() {
			$this->db->query("SELECT ur.descripcion as role_str,
				user.*
				FROM user
				INNER JOIN user_role as ur
				ON user.role = ur.id;
			");
			$resultado = $this->db->registros();
			return $resultado;
		}

		function getPasientes () {
			$this->db->query("SELECT * FROM user WHERE role = 1 ");
			$resultado = $this->db->registros();
			return $resultado;
		}

		function getPsicologos () {
			$this->db->query("SELECT * FROM user WHERE role = 2 ");
			$resultado = $this->db->registros();
			return $resultado;
		}
	}
?>