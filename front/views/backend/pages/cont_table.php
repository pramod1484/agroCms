	

    <!--  TITLE START  --> 


	 <form method="post" action="" name="myform">
    	<div class="g_12">
				
							<div class="widget_contents noPadding">
							<?php 	if($rows)
						{  ?>
						<table class="tables datatable  noObOLine">
          
           <thead>
								<tr>
									<th>Sr. No.</th>
									<th>Title</th>
									<th>Status</th>
									<th>Date Of Modify</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
            
	<?php
	$srno=1;
foreach($rows as $r)
{
	echo    '<tr>
		     <td>' .$srno++ . '</td>
		     <td>'.str_replace('_', ' ', $r->title).'</td>';?>
		  <?php $r->status=='active'? $a="Published" : $a="Draft";?>
			
		     <td>
			<?php echo $a.'</td>
		  <td>'.$r->date_of_modify.'</td>';?>
		     <?php 
		
			 echo  
	          '<td  align=center>'.anchor('backend/content/publish_page/'.$r->id,'<img src="'.site_url().'images/icons/16/i_16_checked.png" alt="Publish" />','title="Publish"').'&nbsp&nbsp&nbsp';
		echo anchor('backend/content/edit_page/'.$r->id,'<img src="'.site_url().'images/icons/16/i_16_wysiwyg.png" alt="Edit" />','title="Edit"').'&nbsp&nbsp&nbsp';
		echo anchor('backend/content/delete_page/'.$r->title,'<img src="'.site_url().'images/icons/16/i_16_close.png" alt="Delete" />','title="Delete"');
		  echo '</td>'
 	
		  ?>
				
<?php  
echo '</tr>';
echo form_hidden('id',$r->id);}
?> 
</tbody>
       </table>
   </div>
	</div>
	
	
	
<?php
	}  ?>
	

	<?php 
		echo '<p class="g_3">';
			echo anchor('backend/content/add_page','Add page','class="simple_buttons1 g_91"');
		echo '</p>';

	?>	

	<p class="g_3">
	
	<?php
	if($type!='' && !$rows)
	{
		echo 'No '.$type.' Added <br/>';
	}
	elseif(!$rows)
	{
			echo 'click on above button which you want add';
	}	
	?>
		
	</p>
	
	</form>

 
