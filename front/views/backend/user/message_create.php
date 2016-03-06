<?php

	echo form_open('dashboard/new_message');
	echo form_label('To','to');
	foreach($users as $u){
	for($i=0;$i<sizeof($u);$i++)
	{
		$str=$u->first_name.' '.$u->last_name;
		if($str!=$this->session->userdata('name'))
		$option[$str]=$str;
		$option[$str]=$str;
	}
	}
	//print_r($data);
	echo form_multiselect('users',$option).'</p>';
	echo form_textarea('msg').'</p>';
	echo form_submit('submit','message');
	
	
	
?>