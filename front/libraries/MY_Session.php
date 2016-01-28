<?php
/**
 * Session class
 */
class MY_Session extends CI_Session {
	
	function __construct() {
		parent::__construct();
	}
	function sess_update()
	{
		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']!=='XMLHttpRequest') {
			parent::sess_update();
		}
	}
}

?>