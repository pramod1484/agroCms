<?php
class logout extends Admin_Controller{
	function index()
	{
		  
	$this->session->sess_destroy();
			redirect('backend/login');
	}
}
?>