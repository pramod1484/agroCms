<?php
class companyprofile_model extends MY_Model
{
  function get_companyprofile()
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
	
	function edit_companyprofile($data)
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
		
	function update_companyprofile($data1)
	{

	    $data=array(
		'name'=>$this->input->post('name'),
		'address'=>$this->input->post('address'),
		'contact_no'=>$this->input->post('contact_no'),
		'email_id'=>$this->input->post('email_id'),
		'twitter'=>$this->input->post('twitter'),
		'facebook'=>$this->input->post('facebook'),
		'linkedin'=>$this->input->post('linkedin'),
		
		);
		
		$this->db->where('id',$data1);
		$q=$this->db->update('company_profile',$data);
		return $q;
	}
	
	
	}
?>
