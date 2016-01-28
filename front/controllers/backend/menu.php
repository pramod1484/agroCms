<?php
class menu extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('backend/menu_model');
			$this->load->model('backend/content_model');
	}
	function index() 
	{	
		$data['actda']=' i_32_dashboard';
		$data['actpa']='i_32_inbox';
		$data['actbl']='i_32_forms';
		$data['actme']='i_32_tables';
		$data['actmenu']='active_tab i_32_charts';
		$data['actset']='i_32_ui';
		 $data['actre']='i_22_ui';
		
		$data['lable']='View Edit Delete Your Menus';
		$data['title']='Menus';
		$data['rows']=$this->menu_model->get_menu();
		$this->setting_model->write_log("Views Menu");
		$data['main_content']='backend/menu/menu_view.php';
		$this->load->view('backend/main/templete',$data);
	}
	function add_menu()
	{
		$data['actda']=' i_32_dashboard';
		$data['actpa']='i_32_inbox';
		$data['actbl']='i_32_forms';
		$data['actme']='i_32_tables';
		$data['actmenu']='active_tab i_32_charts';
		$data['actset']='i_32_ui';
		 $data['actre']='i_22_ui';
		$data['lable']='View Edit Delete Your Menus';
		$data['title']='Add Menus';
	 
		$data['menu']=$this->menu_model->get_menu();
		$data['page']=$this->content_model->get_pages();
		$data['main_content']='backend/menu/addmenu_view';
		$this->load->view('backend/main/templete',$data);
		
	}
	function save_menu()
	{		
		$data['actda']=' i_32_dashboard';
		$data['actpa']='i_32_inbox';
		$data['actbl']='i_32_forms';
		$data['actme']='i_32_tables';
		$data['actmenu']='active_tab i_32_charts';
		$data['actset']='i_32_ui';
		 $data['actre']='i_22_ui';
		$data['lable']='View Edit Delete Your Menus';	
		$data['title']='Save Menus';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('submenu','submenu','trim|required');
		if($this->form_validation->run()==FALSE)
		{
			$this->add_menu();
		}
		else
		{
		if($query=$this->menu_model->save_menu())
		
		{
		redirect('backend/menu','refresh');	
		}
		else
		{
			echo "not saved";
		}
	}
	}
	function edit_menu()
	{
		$data['actda']=' i_32_dashboard';
		$data['actpa']='i_32_inbox';
		$data['actbl']='i_32_forms';
		$data['actme']='i_32_tables';
		$data['actmenu']='active_tab i_32_charts';
		$data['actset']='i_32_ui';
		 $data['actre']='i_22_ui';
		$data['lable']='View Edit Delete Your Menus';
	  $data['title']='Edit Menus';
		$data1=$this->input->get('id');
			$data['rows']=$this->content_model->get_pages();
	
		if($query=$this->menu_model->edit_menu($data1))
		{
		//redirect('menu','refresh');
		}
		else
		{
			echo "not saved";
		}
		$data['main_content']='backend/menu/editmenu_view';
		$this->load->view('backend/main/templete',$data);
		
	}
	function update_menu()
	{
		$data['actda']=' i_32_dashboard';
		$data['actpa']='i_32_inbox';
		$data['actbl']='i_32_forms';
		$data['actme']='i_32_tables';
		$data['actmenu']='active_tab i_32_charts';
		$data['actset']='i_32_ui';
		 $data['actre']='i_22_ui';
		$data['lable']='View Edit Delete Your Menus';
		$data['title']='Update Menus';
	  	 $data1= $this->input->post('rid');
			$query=$this->menu_model->update_menu($data1);
		if($query)
		{
			 redirect('backend/menu','refresh');
		}
	}
	function delete_menu()
	{
		 $data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='active_tab i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		$data['lable']='View Edit Delete Your Menus';
		$data['title']='Delete Menus';
	    $data1=$this->uri->segment(4);
	
		$q=$this->menu_model->delete_menu($data1);
		if($q)
		{
	redirect('backend/menu','refresh');
		
		}
		else
		{
			echo "not deleted";
		}
	  }
	
}

?>
