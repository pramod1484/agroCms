<?php

class login extends MY_Controller{

	function __construct()
	{
		parent::__construct();
	
		$this->load->model('backend/login_model');
	}
	function index()
	{
		   	$data['title']='Please Login';
			$data['main_content']='backend/login_view';
			 $this->load->view('backend/main/templete',$data);
			
	}

	function validate()
	{

			if($q=$this->login_model->validate_user())
			{
				$data=array(
				'username'=>$this->input->post('username'),
				'logged_in'=>TRUE
				);
				$this->session->set_userdata($data);
				$this->setting_model->write_log("Logged in");
				redirect('backend/content');
				
			}
			else
			{
				$this->setting_model->write_log("attempt login");
				$this->index();
			}
	
		
	}
}
?>