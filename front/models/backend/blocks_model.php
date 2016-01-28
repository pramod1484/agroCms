<?php
class blocks_model extends MY_Model
{
  function get_blocks()
	{
	
	 $q=$this->db->get('blocks');
		
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}
			return $data;  
		}		
		
	}
	
	function addblocks()
	{
		$data=array(
		
		'title'=>$this->input->post('title'),
		'content'=>$this->input->post('content'),
		'position'=>$this->input->post('position'),
		//'region'=>$this->input->post('language')
		);
		
		$q=$this->db->insert('blocks',$data);
		$this->setting_model->write_log("Added".$this->input->post('title')." page");
		return $q;
	}
	
	
    function edit_blocks($data)
	{
	
		$this->db->where('id',$data);
		$q=$this->db->get('blocks');
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data=$row;
			}
			return $data;  
		}	
	}
		
	function update_blocks($data1)
	{
	    $data=array(
		'title'=>$this->input->post('title'),
		'content'=>$this->input->post('content'),
		'position'=>$this->input->post('position')
		);
		
		$this->db->where('id',$data1);
		$q=$this->db->update('blocks',$data);
		$this->setting_model->write_log("Edited".$this->input->post('title')." page");
		return $q;
	}
	function delete_blocks($data1)
	{
		$this->db->where('id',$data1);
   $q=$this->db->delete('blocks'); 
		$this->setting_model->write_log("Deleted".$this->input->post('title')." page");
		return $q;
				}

		function get_selected_blocks($str)
	{
		$this->db->where('status',$str);
		 $q=$this->db->get('blocks');
		
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}
			return $data;  
		}	
	}
   function count()
	{
		$this->db->where('status','active');
		$q=$this->db->get('blocks');
		$data['acount']=$q->num_rows();
		$this->db->where('status','inactive');
		$q=$this->db->get('blocks');
		$data['incount']=$q->num_rows();
		$q=$this->db->get('blocks');
		$data['allcount']=$q->num_rows();
		return $data;
	}
	     
     function publish($data1)
	{
	  //echo $data1;
		$this->db->select('status');
		$this->db->where('id',$data1);
		$this->db->limit(1);
		$ans=$this->db->get('blocks');
		return $ans->row('status');
	}
	function update_publish($data,$s)
	{
	   // echo $s;
		$data1=array(
		'status'=>$s
				);
		$this->db->where('id',$data);
		$query=$this->db->update('blocks',$data1);
		return $query;
	}
	
		
	
	}

?>
