<?php
class userprofile_model extends MY_Model {
	function __construct() {
		parent::__construct();
	}
	function get_userprofile()
	{
		$q=$this->db->get('user_profile');
		if($q->num_rows()>0){
			foreach($q->result() as $row)
			{
				$data[]=$row;	
			}			
		}
		return $data;
	}
	
	function get_userprofileview()
	{
		$this->db->select('id');
		$this->db->where('username',$this->session->userdata('username'));
		$q=$this->db->get('user_profile');
		if($q->num_rows()>0){
			
			foreach($q->result()as $r)
			{
				$data=$r->id;
			}
				
		}
		return $data;
	}
	
}

?>
