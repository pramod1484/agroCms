<?php
class log_model extends MY_Model {
	function __construct() {
		parent::__construct();
	}
	function get_log()
	{
		$q=$this->db->get('activity_log');
		if($q->num_rows()>0){
			foreach($q->result() as $row)
			{
				$data[]=$row;	
			}			
		}
		return $data;
	}
	function get_log_count()
	{
		$q=$this->db->get('activity_log');
		return $q->num_rows();
		
	}
}

?>
