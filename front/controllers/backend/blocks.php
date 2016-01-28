<?php
class blocks extends Admin_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('backend/blocks_model');
	}
	function index() 
	{		
		 $data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='active_tab i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		 $data['actre']='i_22_ui';
		 //$data['actnews']='i_21_ui';
		 $data['lable']='View Edit Delete Your Blocks';
		 $data['title']='blocks';	
	     $data['rows']=$this->blocks_model->get_blocks();
		 	$data['count']=$this->blocks_model->count();
		 $this->setting_model->write_log("Views Blocks");
		 $data['main_content']='backend/blocks/blocks_view.php';
		 $this->load->view('backend/main/templete',$data);
	}
	function add_blocks()
	{
		 $data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='active_tab i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		 $data['lable']='View Edit Delete Your Blocks';
    $data['title']='Add Blocks';
    //$data['lang']=$this->blocks_model->getlanguage();
			
	  $data['main_content']='backend/blocks/addblocks_view';
		 $this->load->view('backend/main/templete',$data);
		
	}
	function save_blocks()
	{
		$data['title']='Save Blocks';	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','title','trim|required');
		$this->form_validation->set_rules('content','content','trim|required');
		$this->form_validation->set_rules('position','position','trim|required');
			if($this->form_validation->run()==FALSE)
		{
			$this->add_blocks();
		}
		else
		{
		if($query=$this->blocks_model->addblocks())
		{
		
		redirect('backend/blocks','refresh');
		
		}
		else
		{
			echo "not saved";
		}
	 }
	}
		function select_block()
{
		  $data['type']=$this->uri->segment(4);
			 $data['actda']=' i_32_dashboard';
			$data['actpa']='i_32_inbox';
		 	$data['actbl']='active_tab i_32_forms';
		 	$data['actme']='i_32_tables';
		 	$data['actmenu']='i_32_charts';
		 	$data['actset']='i_32_ui';
		 	 $data['actre']='i_22_ui';
			$data['lable']='View Edit Delete our blogs';
		$data['title']='Blocks';
		$data['count']=$this->blocks_model->count();
		$data['rows']=$this->blocks_model->get_selected_blocks($this->uri->segment(4));
		$data['main_content']='backend/blocks/blocks_view.php';
	  $this->load->view('backend/main/templete',$data);
	}
	function edit_blocks()
	{
		 $data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='active_tab i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		 $data['lable']='View Edit Delete Your Blocks';
		 $data['title']='Edit Blocks';	
	   $data1=$this->uri->segment(4);
	$data['count']=$this->blocks_model->count();
			$q=$this->blocks_model->edit_blocks($data1);
		if($q)
		{
			$data['rows']=$q;
		}
	   $data['main_content']='backend/blocks/editblog_view';
			$this->load->view('backend/main/templete',$data);
		
	}
	function update_blocks()
	{
		 $data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='active_tab i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		 $data['lable']='View Edit Delete Your Blocks';
		 $data['title']='Update Blocks';	
		 	$data['count']=$this->blocks_model->count();
	  $data1= $this->input->post('rid');
			$query=$this->blocks_model->update_blocks($data1);
		if($query)
		{
			 redirect('backend/blocks','refresh');
		}
	}
	function delete_blocks()
	{
		 $data['actda']=' i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='active_tab i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		 $data['lable']='View Edit Delete Your Blocks';
		 $data['title']='Delete Blocks';	
	  $data1=$this->uri->segment(4);
	  	$this->load->model('blocks_model');
	  $data['count']=$this->blocks_model->count();

		$q=$this->blocks_model->delete_blocks($data1);
		if($q)
		{
	redirect('backend/blocks','refresh');
		
		}
		else
		{
			echo "not deleted";
		}
	  }

	 function publish_blocks()
	  {  
	    $num='active';
	  	$data1=$this->uri->segment(4);
			$q=$this->blocks_model->publish($data1);
		if($q==$num)
		{
		$s='inactive';
			$this->load->model('backend/blocks_model');
		$query=$this->blocks_model->update_publish($data1,$s);
		   if($query)
		  {
			 redirect('backend/blocks','refresh');
		  }
		}
		else
		{
		$s='active';
			$query=$this->blocks_model->update_publish($data1,$s);
		   if($query)
		  {
			 redirect('backend/blocks','refresh');
		  }
		}
	  }
	
}

?>
