<?php
class menu_model extends CI_Model
{
  function get_menu()
	{
	$this->db->where('status','active');
	 $q=$this->db->get('menu');
		
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}
			return $data;  
		}		
		
	}
	
	function save_menu()
	{
	 
		$parent=$this->input->post('parents');
		$submenu=$this->input->post('submenu');
		 if($submenu=="no_submenu")
		 {
			$parent=$this->input->post('parents');
			$p_id=0;
			$url=$this->input->post('parents').".php";
           		}
		else
		{
		   $url=$parent."/".$this->input->post('submenu').".php";
		   $this->db->select('id');
		   $p_id=$this->db->get_where('menu',array('title'=>str_replace(' ', '_', $parent)))->row()->id;
		   print_r($p_id);
		
		$parent=$this->input->post('submenu');
		}
		 $data=array(
		'parent_id'=>$p_id,
		'title'=>$parent,
		'url'=>$url
		);
		$insert=$this->db->insert('menu',$data);
			$this->setting_model->write_log("Added".$this->input->post('title')." page");
		return $insert;
	}
	
	
    function edit_menu($data1)
	{
	  
	  $parent=$this->input->post('parents');
		$submenu=$this->input->post('submenu');
		 if($submenu=="no_submenu")
		 {
			$parent=$this->input->post('parents');
			$p_id=0;
			$url=$this->input->post('parents').".php";
          }
		else
		{
		$url=$parent."/".$this->input->post('submenu').".php";
		$this->db->select('id');
		$q=$this->db->get_where('menu',array('title'=>$parent));
		foreach ($q->result() as $row)
		{
			$p_id= $row->id;	
		};
		$parent=$this->input->post('submenu');
		}
		 $data=array(
		'parent_id'=>$p_id,
		'title'=>$parent,
		'url'=>$url
		);
		$this->db->where('id',$data1);
		$insert=$this->db->update('menu',$data);
		return $insert;
	}
		
	function update_menu($data1)
	{
	    $data=array(
		'parent_id'=>$this->input->post('parent_id'),
		'title'=>$this->input->post('title'),
		'url'=>$this->input->post('url'),
		'desc'=>$this->input->post('desc'),
		'perma'=>$this->input->post('perma'),
		'num'=>$this->input->post('num'),
		);
		$this->db->where('id',$data1);
		$q=$this->db->update('menu',$data);
		return $q;
	}
	function delete_menu($data1)
	{
	  //echo $data1;
	   $a='inactive';
	     $data=array(
		  'status'=>$a
		);
		$this->db->where('id',$data1);
		$q=$this->db->update('menu',$data);
		$this->setting_model->write_log("Deleted".$this->input->post('title')." page");
		return $q;
	  
     }

}

?>