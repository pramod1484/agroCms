
	<?php
	switch($title)
	{
		 case 'News': $this->load->view('backend/news/news_table');
					 break;
		default:$this->load->view('backend/news/news_view');
	}
		
			
	
	 ?>