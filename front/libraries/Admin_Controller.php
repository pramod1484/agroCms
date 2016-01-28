<?php
/**
 * 
 * @Admin Coltroller
 * controller for admin panel
 * 
 */
class Admin_Controller extends MY_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$this->data['meta_title']='Web Custom CMS';
		

			
			if($this->session->userdata('logged_in')!=TRUE)
			{
				redirect('backend/login','refresh');
			}
	
	
	}
}

?>