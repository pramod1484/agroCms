<?php
class setting extends Admin_Controller
 {
	
	function __construct()
	{
		parent::__construct();
	
		$this->load->model('backend/setting_model');

	}
	function index() 
	{			
		 $data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='active_tab i_32_ui';
		  $data['actre']='i_22_ui';
 	
		$data['lable']='Adminstrative Settings';
		$data['title']='Admin Settings';
		$data['any']='profile';
	   	$data['main_content']='backend/setting/adminsetting_view.php';
		$this->load->view('backend/main/templete',$data);
	}
	
/*function do_upload()
  {
       $this->load->library('form_validation');
	   $this->load->helper('email');
		$this->form_validation->set_rules('blocksname','blocksname','trim|required');
		$this->form_validation->set_rules('blocksdescription','blocksdescription','trim|required');
		$this->form_validation->set_rules('home','site address','trim|required');
		$this->form_validation->set_rules('admin_email','admin email','trim|required|valid_email');
		
			if($this->form_validation->run()==FALSE)
		{
			$this->add_setting();
		}
		else
		{
    $config = array(
      'allowed_types' => "jpg|jpeg|gif|png",
      'upload_path' => './upload/logos/.',
      'max_size'=>100
    );
    $this->load->library('upload', $config); 
    $q=$this->upload->do_upload(); //do upload
     
    //want to create thumbnail
     

	  $image_data = $this->upload->data(); //get image data
     
  
 	
	if ( ! $q)
		{
			$error = array('error' => $this->upload->display_errors());

			//echo $error;
		}
		else
		{    
		    foreach ($image_data as $item => $value)
		{
				
            if($item=='file_name')
			{
				$this->save_setting($value);
			}
           
          } 		
}
  }
 
  }*/
	
	function add_setting()
	{
		$data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='active_tab i_32_ui';
		  $data['actre']='i_22_ui';
		 
		$data['lable']='Adminstrative Settings';
	        $data['main_content']='backend/setting/addsetting_view';
			$this->load->view('backend/main/templete',$data);
		
	}
	function save_setting($data1)
	{
		$data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='active_tab i_32_ui';
		  $data['actre']='i_22_ui';
		
		$data['lable']='Adminstrative Settings';
		
		$query=$this->setting_model->addsetting($data1);
		if($query)
		{
		redirect('backend/setting','refresh');
		
		}
		else
		{
			echo "not saved";
		}
	
	}
	function edit_setting()
	{
		$data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='active_tab i_32_ui';
		  $data['actre']='i_22_ui';
		
		$data['lable']='Adminstrative Settings';
	    $data1=$this->input->get('id');
			$q=$this->setting_model->edit_setting($data1);
		if($q)
		{
			$data['rows']=$q;
		}
	        $data['main_content']='backend/setting/editsetting_view';
			$this->load->view('backend/main/templete',$data);
		
	}
	function update_setting()
	{
		$data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='active_tab i_32_ui';
		  $data['actre']='i_22_ui';
		 
		$data['lable']='Adminstrative Settings';
	   $data1= $this->input->post('rid');
		$query=$this->setting_model->update_setting($data1);
		if($query)
		{
			 redirect('backend/setting','refresh');
		}
	}
	function delete_setting()
	{
		$data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='active_tab i_32_ui';
		  $data['actre']='i_22_ui';
		
		$data['lable']='Adminstrative Settings';
	    $data1=$this->input->get('id');
		$q=$this->setting_model->delete_setting($data1);
		if($q)
		{
	redirect('backend/setting','refresh');
		
		}
		else
		{
			echo "not deleted";
		}
	  }
	    
	  }
	  
	
?>
