<?php
/**
 * 
 * @Admin Coltroller
 * controller for admin panel
 * 
 */
class Admin_Controller extends CI_Controller {

	public $data=array();
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$this->data['meta_title']='Web Custom CMS';

		$this->data['errors']=array();
		$this->data['sitename']=config_item('site_name');

			
			if($this->session->userdata('logged_in')!=TRUE)
			{
				redirect('backend/login','refresh');
			}
	
	
	}
}

?>