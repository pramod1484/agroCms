

<?php
			if($title1!='Property_Lists' && $title1!='Post_Requirement' && $title1!='Home' && $title1!='Loan_Advice' )
			{
			
				
			
	echo '<div id="content"><!--Start Content-->';

}
?>
				
			

			<?php
			if($get1)
			{
			foreach($get1 as $r)
			{
				
				echo $r->content;
				
			}
		
			}
			else
			{
				echo 'Page is not published';
			}
			?>		
	
