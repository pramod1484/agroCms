<?php
class user extends Admin_Controller
 {

	function __construct()
	{
		parent::__construct();
					$this->load->model('backend/userprofile_model');
	}
	function index() 
	{			
		$data['userprofile_records']=$this->userprofile_model->get_userprofile();
		$data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='active_tab i_32_ui';
		  $data['actre']='i_22_ui';
  		 
		$data['lable']='Adminstrative Settings';
		$data['title']='Admin Settings';
		$data['any']='user';
	    
		$data['main_content']='backend/setting/adminsetting_view.php';
		$this->load->view('backend/main/templete',$data);
	}


	function add_user()
	{
		$data['any']='adduser';
		$data['actda']='i_32_dashboard';
		$data['actpa']=' i_32_inbox';
		$data['actbl']='i_32_forms';
		$data['actme']='i_32_tables';
		$data['actmenu']='i_32_charts';
		$data['actset']='active_tab i_32_ui';
		 $data['actre']='i_22_ui';
		
		$data['lable']='User Info';
		$data['title']='Add User';
	    $data['main_content']='backend/setting/adminsetting_view.php';
		$this->load->view('backend/main/templete',$data);
		
	}
	function save_user()
	{
		$data['title']='Save User';
		$this->load->model('user_model');
		$this->load->library('form_validation');
		
		if($query=$this->user_model->adduser())
		{
			
		redirect('backend/user','refresh');
		
		}
		else
		{
			echo "not saved";
		}
	}

	function edit_user()
	{
		$data['any']='edituser';
		$data['actda']='i_32_dashboard';
		$data['actpa']=' i_32_inbox';
		$data['actbl']='i_32_forms';
		$data['actme']='i_32_tables';
		$data['actmenu']='i_32_charts';
		$data['actset']='active_tab i_32_ui';
		 $data['actre']='i_22_ui';
		 $data['actnews']='i_21_ui';
		$data['lable']='User Info';
		$data['title']='Edit User';
		$this->load->model('userprofile_model');
		$data1=$this->userprofile_model->get_userprofileview();
		$this->load->model('user_model');
		$data['r']=$this->user_model->edit_user($data1);
			    $data['main_content']='backend/setting/adminsetting_view.php';
		$this->load->view('backend/main/templete',$data);   	
	}
	
	function update_user()
	{
		$data['title']='Update User';
	    $data1= $this->input->post('rid');
		
		$query=$this->user_model->update_user($data1);
		if($query)
		{
			 $this->index();
		}
	}
	function delete_user()
	{
		$data['title']='Delete Details';
	  $data1=$this->input->get('id');

		$q=$this->user_model->delete_user($data1);
		if($q)
		{
	redirect('backend/user','refresh');
		
		}
		else
		{
			echo "not deleted";
		}
	  }
	  
	  function user_profile()
	{
		$data['userprofile_records']=$this->userprofile_model->get_userprofile();
		$data['actda']=' i_32_dashboard';
		$data['actpa']='i_32_inbox';
		$data['actbl']='i_32_forms';
		$data['actme']='i_32_tables';
		$data['actmenu']='i_32_charts';
		$data['actset']='active_tab i_32_ui';
		 $data['actre']='i_22_ui';
		 $data['actnews']='i_21_ui';
		$data['lable']='Adminstrative Settings';
		$data['title']='Admin Settings';
		$data['any']='';
	    $this->load->model('setting_model');
		$data['rows']=$this->setting_model->get_setting();
		$data['main_content']='backend/setting/adminsetting_view.php';
		$this->load->view('backend/main/templete',$data);		
	}
	 
	function view_profile()
	{
		$data['userprofile_records']=$this->userprofile_model->get_userprofileview();
		
		$data['title']='Pages';
		 $data['actda']='i_32_dashboard';
		 $data['actpa']=' i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='active_tab i_32_ui';
		  $data['actre']='i_22_ui';
		  $data['actnews']='i_21_ui';
		$data['lable']='My Profile';
		$data['title']='Profile';
		$data['main_content']='backend/user/userprofile_view';
		 $this->load->view('backend/main/templete',$data);
	}
	 
	
}

?>
