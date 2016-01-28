<form method="post" action="" name="myform">
    	<div class="g_12">
					<div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_resize">Activity logs</h4>
					</div>
					<div class="widget_contents noPadding">
						<table class="tables datatable  noObOLine">
          <?php if($log_records!=0)
          {?>
           <thead>
								<tr>
									<th>Sr. No.</th>
									<th>User</th>
									<th>IP Address & Browser</th>
									<th>time</th>
									<th>Activity</th>
								</tr>
							</thead>
							<tbody>
            
	<?php

	$srno=1;
foreach($log_records as $r)
{
	echo    '<tr>
		     <td>' .$srno++ . '</td>
		     <td>'.$r->user.'</td>';?>
	
			
		     <td>
			<?php echo $r->ip_address.' '.$r->user_agent.'</td>
		  <td>'.$r->time.'</td>';?>
		     <?php 
		
			 echo  
	          '<td  align=center>'.$r->activity;
        echo '</td>'
         
		
		  ?>
					
<?php  
echo '</tr>';
}
?> 
</tbody>
<?php else
{ echo 'No log have been created yet';}
?>

       </table>
   </div>
	
	
	   </form>