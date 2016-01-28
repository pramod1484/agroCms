<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Projects extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	 $this->load->model('backend/content_model');
	}
	
	function index() 
	{	 $data['type']='';
		 $data['title']='Projects';
		 $data['actda']='active_tab  i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		  $data['actnews']='i_21_ui';
		 $data['lable']='View Edit Delete our Project';

		
		 $data['project_details']=$this->db->get('project_details')->result();
		// $this->content_model->write_log("Views Pages");
		 $data['main_content']='backend/pages/project_view.php';
		 $this->load->view('backend/main/templete',$data);
	}
	
	function add_project()
	{
		$data['types']=  $this->db->get('types')->result();
		 $data['title']='Projects';
		 $data['actda']='active_tab  i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
    	  $data['actre']='i_22_ui';
		 $data['lable']='View Edit Delete our Project';
         $data['domains']=  $this->db->get('domains')->result();
		 $data['project_details']=$this->db->get('project_details')->result();
		//$this->content_model->write_log("Views Pages");
		 $data['main_content']='backend/pages/add_project.php';
		 $this->load->view('backend/main/templete',$data);
	}
        function add_domain()
        {
            //$domain=  $this->input->post('domain');
            $this->content_model->save_domain();
            $this->domain();
        }

        function add_type()
        {
            //$domain=  $this->input->post('domain');
            $this->content_model->save_type();
            $this->domain();
        }

        function delete_domain()
        {
            $this->db->delete('domains',array('domain_id'=>  $this->uri->segment(4)));
              $this->domain();
        }

        function delete_type()
        {
            $this->db->delete('types',array('id'=>  $this->uri->segment(4)));
              $this->domain();
        }

        function domain()
        {
             $data['title']='Projects';
		 $data['actda']='active_tab  i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		 $data['lable']='View Delete our Domain or Types';

		
		 $data['domains']=$this->db->get('domains')->result();
                 $data['types']=$this->db->get('types')->result();
		// $this->content_model->write_log("Views Pages");
		 $data['main_content']='backend/pages/domain_view.php';
		 $this->load->view('backend/main/templete',$data);
        }

	function do_upload()
	{
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'pdf|doc|docx';
		$config['max_size']	= '10240';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('synopsis'))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			//redirect('backend/projects/add_project');
		}
		else
		{
			$syn = array('upload_data' => $this->upload->data());
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'pdf|doc|docx';
			$config['max_size']	= '10240';
				$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('basepaper'))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			//redirect('backend/projects/add_project');
		}
		else
		{
                     
			$base = array('upload_data' => $this->upload->data());
			$this->content_model->save_project($syn,$base);
			$this->index();
		}
		}
	}
	function edit()
	{
		$data['types']=  $this->db->get('types')->result();
        $data['domains']=  $this->db->get('domains')->result();

		 $data['title']='Projects';
		 $data['actda']='active_tab  i_32_dashboard';
		 $data['actpa']='i_32_inbox';
		 $data['actbl']='i_32_forms';
		 $data['actme']='i_32_tables';
		 $data['actmenu']='i_32_charts';
		 $data['actset']='i_32_ui';
		  $data['actre']='i_22_ui';
		 $data['lable']='Edit our Project';

		
		$id=$this->uri->segment(4);
	
		$this->db->where('project_id',$id);
		$data['details']=$this->db->get('project_details')->row();
		 $data['main_content']='backend/pages/edit_project.php';
		 $this->load->view('backend/main/templete',$data);


	}
	function delete()
	{
		$this->db->where('project_id',$this->uri->segment(4));
		$this->db->delete('project_details');
		$this->index();
	}
}

?>
