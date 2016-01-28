<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class content extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	 $this->load->model('backend/content_model');
	}
	
	function index() 
	{	 $data['type']='';
		 $data['title']='Pages';
		 $data['actda']=' i_32_dashboard';
		 $data['actpa']='active_tab i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		 
		 $data['lable']='View Edit Delete our Pages';

		 $data['count']=$this->content_model->count();
		 $data['rows']=$this->content_model->get_pages();
		// $this->content_model->write_log("Views Pages");
		 $data['main_content']='backend/pages/cont_view.php';
		 $this->load->view('backend/main/templete',$data);
	}
	function add_page()
	{       
	   //$data['type']=$this->uri->segment(4);
			$data['title']='Pages';
			$data['actda']=' i_32_dashboard';
			$data['actpa']='active_tab i_32_inbox';
		 	$data['actbl']='i_32_forms';
		 	$data['actme']='i_32_tables';
		 	$data['actmenu']='i_32_charts';
		 	$data['actset']='i_32_ui';
		 	 $data['actre']='i_22_ui';
	 		$data['actnews']='i_21_ui';

			$data['lable']='View Edit Delete our Pages';
		 $data['title']='Add Page';
	//	 $data['lang']=$this->content_model->getlanguage();
			$data['count']=$this->content_model->count();
	   $data['main_content']='backend/pages/addpage_view';
			$this->load->view('backend/main/templete',$data);
		
	}
	function select_page()
{
		  $data['type']=$this->uri->segment(4);
				$data['actda']=' i_32_dashboard';
			$data['actpa']='active_tab i_32_inbox';
		 	$data['actbl']='i_32_forms';
		 	$data['actme']='i_32_tables';
		 	$data['actmenu']='i_32_charts';
		 	$data['actset']='i_32_ui';
		 	 $data['actre']='i_22_ui';
		 	 $data['actnews']='i_21_ui';
			$data['lable']='View Edit Delete our Pages';
		$data['title']='Content';
		$data['count']=$this->content_model->count();
		$data['rows']=$this->content_model->get_selected_page($this->uri->segment(4));
		$data['main_content']='backend/pages/cont_view.php';
	    $this->load->view('backend/main/templete',$data);
	}
	function save_page()
	{	
		$data['title']='Save Page';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','title','trim|required');
		$this->form_validation->set_rules('content','content','trim|required');
		$this->form_validation->set_rules('meta_title','meta_title','trim|required');
		if($this->form_validation->run()==FALSE)
		{
			$this->add_page();
		}
		else
		{
		    if($q=$query=$this->content_model->add())
		   {
		 
			redirect('backend/content','refresh');
		    }
			else
		  {
			echo "not saved";
		  }
	    }
	}
	function edit_page()
	{
	 	 
		 $data['actda']=' i_32_dashboard';
		 $data['actpa']='active_tab i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		  $data['actnews']='i_21_ui';
		 $data['lable']='View Edit Delete our Pages';
		 $data['title']='Edit Page';
	   $data1=$this->uri->segment(4);
		 $q=$this->content_model->edit($data1);
		 if($q)
		 {
		 	$data['rows']=$q;
		 }
	     $data['main_content']='backend/pages/editpage_view';
		 $this->load->view('backend/main/templete',$data,$data1);
		
	}
	function update_page()
	{	 
		 $data['title']='Update Page';
	  $data1=$this->input->post('rid');
		$query=$this->content_model->update_pages($data1);
		if($query)
		{
			 redirect('backend/content','refresh');
		}
	}
	function delete_page()
	{ 
		 $data['title']='Pages';
		 $data['actda']=' i_32_dashboard';
		 $data['actpa']='active_tab i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		 $data['lable']='View Edit Delete our Pages';
	   $data1=$this->uri->segment(4);
		 $q=$this->content_model->deletepage($data1);
		if($q)
		{
	   		redirect('backend/content','refresh');
		}
		else
		{
			echo "not deleted";
		}
	  }
	
	
	
	
	  function publish_page()
	  {  
	    $num='active';
	  	$data1=$this->uri->segment(4);
		//$sts=$this->input->get('status');
			$q=$this->content_model->publish($data1);
		if($q==$num)
		{
		$s='inactive';
		$query=$this->content_model->update_publish($data1,$s);
		   if($query)
		  {
			 redirect('backend/content','refresh');
		  }
		}
		else
		{
		$s='active';
		$query=$this->content_model->update_publish($data1,$s);
		   if($query)
		  {
			 redirect('backend/content','refresh');
		  }
		}
	  }
}

?>
