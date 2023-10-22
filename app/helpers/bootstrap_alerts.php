<?php
    function alert_success($text = '', $class = '') {
		$alert = "<div id='' class='alert alert-success " . $class . "' role='alert'>".
				$text.
				"<button type='button' class='close' data-dismiss='alert' aria-label='Close'>".
				"<span aria-hidden='true'>&times;</span>".
				"</button>".
				"</div>";
		return $alert;
	}

	function alert_danger($text = '', $class = '') {
		$alert = "<div id='' class='alert alert-danger " . $class . "' role='alert'>".
				$text.
				"<button type='button' class='close' data-dismiss='alert' aria-label='Close'>".
				"<span aria-hidden='true'>&times;</span>".
				"</button>".
				"</div>";
		return $alert;
	}

	function alert_warning($text = '', $class = '') {
		$alert = "<div id='' class='alert alert-warning " . $class . "' role='alert'>".
				$text.
				"<button type='button' class='close' data-dismiss='alert' aria-label='Close'>".
				"<span aria-hidden='true'>&times;</span>".
				"</button>".
				"</div>";
		return $alert;
	}
?>