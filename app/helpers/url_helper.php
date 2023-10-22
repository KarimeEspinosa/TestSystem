<?php
	// Rediriguir despues de iniciar session
	function redirect_after_login($redirect = '', $login_url = '') {
		// $_SESSION["redirect"] = 'luis';
		// Validad si existe la session
		if ( !isset($_SESSION["session"]) ) {
			// echo "session no existe";
			$_SESSION["redirect"] = $redirect;
			return header("location:" . $login_url);
		}

		if ($_SESSION['session'] == false) {
			$_SESSION["redirect"] = $redirect;
			return header("location:" . $login_url);
		}

		// ya esta logeado
		if ($_SESSION['session']) {
			return true;
		}
	}
?>