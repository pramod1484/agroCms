<?php
class media_model extends CI_Model
{
  var $media_path;
  function media_model()
  {
  	parent::__construct();
	$this->media_path=realpath('../upload');
	
  }
function get_media()
	{
	 $q=$this->db->get('media');
		
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
	
		$this->db->where('type','images');
		$q=$this->db->get('media');
		$data['icount']=$q->num_rows();
		
		$this->db->where('type','banner');
		$q=$this->db->get('media');
		$data['bcount']=$q->num_rows();
		
		$this->db->where('type','i_banner');
		$q=$this->db->get('media');
		$data['ibcount']=$q->num_rows();
	
		$this->db->where('type','others');
		$q=$this->db->get('media');
		$data['acount']=$q->num_rows();
	
		$q=$this->db->get('media');
		$data['allcount']=$q->num_rows();
		return $data;
	}
	
	
	function addmedia($data,$id=NULL)
	{
		if(!$id)
		return $this->db->insert('media',$data);
		else{
			$this->db->where('id',$id);
				return $this->db->update('media',$data);
		}
	}
	
	function get_selected_media($str)
	{
		$this->db->where('type',$str);
		 $q=$this->db->get('media');
		
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}
			return $data;  
		}	
	}
  	
	
	function delete_media($data1)
	{
	  //echo $data1;
		$this->db->where('id',$data1);
		$q=$this->db->delete('media');
		return $q;
	}

function edit($data) {

        $this->db->where('id', $data);
        $q = $this->db->get('media');
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data = $row;
            }
            return $data;
        }
    }
   

		
	
	}

?>