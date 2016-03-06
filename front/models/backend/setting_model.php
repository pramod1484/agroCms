<?php
class setting_model extends MY_Model
{
  function get_setting()
	{
	 $q=$this->db->get('company_profile');
		
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}
			return $data;  
		}		
		
	}
	
	function addsetting($data)
	{  
	 	$data1=array(
		'type'=>$this->input->post('type'),
		'site_title'=>$this->input->post('sitetitle'),
		'tagline'=>$this->input->post('tagline'),
		'site_url'=>"upload/".$this->input->post('site_addr'),
		'email'=>$this->input->post('admin_email'),
		'field_url'=>"upload/logos/".$data
	 	);
		$q=$this->db->insert('company_profile',$data1);
		return $q;
	}
			
    function edit_setting($data)
	{	
		$this->db->where('id',$data);
		$q=$this->db->get('company_profile');
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data=$row;
			}
			return $data;  
		}	
	}
		
	function update_setting($data1)
	{
	    $data=array(
		'title'=>$this->input->post('title'),
		'content'=>$this->input->post('content'),
		'position'=>$this->input->post('position')
		);
		
		$this->db->where('id',$data1);
		$q=$this->db->update('company_profile',$data);
		return $q;
	}
	function delete_setting($data1)
	{
	  //echo $data1;
		$this->db->where('id',$data1);
		$q=$this->db->delete('company_profile');
		return $q;
	}
	function write_log($str)
	{
		$this->load->library('user_agent');
		$agent;
		if ($this->agent->is_browser())
		{
   			 $agent = $this->agent->browser().' '.$this->agent->version();
		}
			elseif ($this->agent->is_robot())
			{
    				$agent = $this->agent->robot();
			}
			elseif ($this->agent->is_mobile())
			{
				    $agent = $this->agent->mobile();
			}
			else
			{	
				    $agent = 'Unidentified User Agent';
			}
		
		$data=array(
			 'ip_address'    =>$this->input->ip_address(),
			 'user_agent'    =>$agent,
			'time'=>date('Y-m-d H:i:s'),
			'activity'=>$str,
			'user'=>$this->session->userdata('name')
		);
		$this->db->insert('activity_log',$data);
	}
		
		
	
	}

?>
