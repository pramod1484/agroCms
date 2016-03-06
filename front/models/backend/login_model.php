<?php
class login_model extends MY_Model {
	function __construct()
	{
		parent::__construct();

	}
	
	function validate_user()
	{
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',$this->input->post('password'));
		$q=$this->db->get('user_profile');
		
		if($q->num_rows>0)
		{
			$data=array(
				'name'=>$q->row('first_name').' '.$q->row('last_name'),
				'previlage'=>$q->row('previlage')
				);
				$this->session->set_userdata($data);
			return TRUE;
		}else
		{
			$data=array(
				'name'=>$this->input->post('username'),
				 'id'=>$this->input->post('id'),
				'previlage'=>$q->row('previlage')
				);
				$this->session->set_userdata($data);
		}
	}
	
}
?>
