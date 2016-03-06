<form method="post" action="" name="myform">
    	<div class="g_12">
					<div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_resize">Activity logs</h4>
					</div>
					<div class="widget_contents noPadding">
						<table class="tables datatable  noObOLine">
          
           <thead>
								<tr>
									<th>Sr. No.</th>
									<th>From User</th>
									<th>Message</th>
									<th>time</th>
									
								</tr>
							</thead>
							<tbody>
            
	<?php
	if($msgs){
		
	$srno=1;
foreach($msgs as $r)
{
	echo    '<tr>
		     <td>' .$srno++ . '</td><td>
		     <a href="'.site_url().'dashboard/read_message/'.$r->id.'">'.$r->from.'</td>';?>
	
			
		     <td>
			<?php echo $r->msg.'</td>
		  <td>'.$r->time.'</td>';?>
		     
					
<?php  
echo '</tr>';
}
?> 
</tbody>
       </table>
  </div>
</div>

	   </form>	
	<?php } ?>
</div>

	