<?php
class news_model extends MY_Model
{
 
  
function get_news()
	{
	 
	 	 $q=$this->db->get('articles');
		
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}
			return $data;  
		}
			
	}

    function edit($data) {

        $this->db->where('id', $data);
        $q = $this->db->get('articles');
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data = $row;
            }
            return $data;
        }
    }

	function get_category()
	{
	 
	 	 $q=$this->db->get('category');
		
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}
			return $data;  
		}
			
	}


}
?>
