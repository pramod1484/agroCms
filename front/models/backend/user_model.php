<?php
class user_model extends MY_Model
{
  function get_user()
	{
	 $q=$this->db->get('user_profile');
		
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}
			return $data;  
		}		
		
	}
	function get_user_count()
	{
		 $q=$this->db->get('user_profile');
		return $q->num_rows();
	}
	
	function adduser()
	{
		$data=array(
		'first_name'=>$this->input->post('first_name'),
		'last_name'=>$this->input->post('last_name'),
		'contact_no'=>$this->input->post('contact_no'),
		'address'=>$this->input->post('address'),
		'website'=>$this->input->post('website'),
		'emailid'=>$this->input->post('emailid'),
		'username'=>$this->input->post('username'),
		'password'=>$this->input->post('password'),
		'previlage'=>$this->input->post('previlage')
		);
				$q=$this->db->insert('user_profile',$data);
		return $q;
	}
		
    function edit_user($data)
	{
	
		$this->db->where('id',$data);
		$q=$this->db->get('user_profile');
		if($q->num_rows()>0)
		{
			
			return $q->row();  
		}	
	}
		
	function update_user($data1)
	{

	    $data=array(
		'first_name'=>$this->input->post('first_name'),
		'last_name'=>$this->input->post('last_name'),
		'contact_no'=>$this->input->post('contact_no'),
		'address'=>$this->input->post('address'),
		'website'=>$this->input->post('website'),
		'emailid'=>$this->input->post('emailid'),
		'username'=>$this->input->post('username'),
			'previlage'=>$this->input->post('previlage')
		);
		
		$this->db->where('id',$data1);
		$q=$this->db->update('user_profile',$data);
		return $q;
	}
	function delete_user($data1)
	{
	  //echo $data1;
		$this->db->where('id',$data1);
		$q=$this->db->delete('user_profile');
		return $q;
	}
	function tree_user($data1)
	{
		$this->db->select('primary_id');
		$this->db->where('user_name',$data1);
		$q=$this->db->get('mlm_users');
		//$this->db->select();
		$this->db->where('parent_id',$q->row('primary_id'));
		$q=$this->db->get('user_det');
		//$data['own']=$data1;
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}			
			
		}
		return $data;  
	}
	function tree_user_in($data1)
	{
		$data=array();
		//$this->db->select();
		$this->db->where('parent_id',$data1);
		$q=$this->db->get('user_det');
		//$data['own']=$data1;
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}			
			
		}
		return $data;  
		
	}
	function tree_child_user($data1)
	{
		//$this->db->select('id','username');
		$this->db->where('parent_id',$data1);
		$q=$this->db->get('user_det');
		$data=array();
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}		
				
			 
		}
	return $data; 	
		
	}
   function get_profile($data1)
	{
	  $this->db->where('user_name',$data1);
	  $q=$this->db->get('mlm_users');
		
		if($q->num_rows()>0)
		{
			
			$data=$q->row();
			return $data; 
			 
		}		
		 
	}
	function get_parent($id)
	{
		$this->db->select('parent_id');
		$this->db->where('id',$id);
		$p_id=$this->db->get('user_det');
		if($p_id->num_rows()>0)
		{
			return $p_id->row('parent_id');
		}
	}
}

?>
