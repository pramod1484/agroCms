
	<?php
	switch($title)
	{
		 case 'Media': $this->load->view('backend/media/media_table');
					 break;
		default:$this->load->view('backend/media/addmedia_view');
	}
		
			
	
	 ?>