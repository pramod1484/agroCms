<?php
class pagination extends Admin_Controller
{
	function index()
	{
		$this->load->library('pagination');
		$this->load->library('table');
		
		$config['base_url']='http://localhost/travel1/index.php/pagination/index';
		$config['total_rows']=$this->db->get($tab)->num_rows();
		$config['per_page']=10;
		$config['num_links']=20;
		
		$this->pagination->initialize($config);
		
       $data['records']=$this->db->get($tab,$config['per_page'],$this->uri->segment(3));
	  $this->load->view('includes/templete',$data);
  
      }
  }
  ?>