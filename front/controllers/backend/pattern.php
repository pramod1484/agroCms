<?php
class pattern extends Admin_Controller
 {

	function __construct()
	{
		parent::__construct();
	
	}
	function index() 
	{
		$data['any']='pattern';	
		$data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='active_tab i_32_ui';
		  $data['actre']='i_22_ui';
		$data['lable']='Adminstrative Settings';
		$data['title']='Admin Settings';
	
	$data['main_content']='backend/setting/adminsetting_view.php';
		$this->load->view('backend/main/templete',$data);
	}
}
?>