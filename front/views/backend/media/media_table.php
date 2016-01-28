 <form method="post" action="" name="media">
    	<div class="g_12">
				
					<div class="widget_contents noPadding">
					<?php echo anchor('backend/media/add_media/','Add Property','class="simple_buttons1 g_91"');  
						if($rows)
						{  ?>

						<table class="tables datatable  noObOLine">
          
           <thead>
								<tr>
									<th>Sr. No.</th>
									<th>Title</th>
									<th>Thumb Image</th>
									<th>BHK</th>
									<th>Type</th>
									<th>Cost</th>
									<th>Status</th>
									<th>Area</th>
									<th>Picture Url</th>
									<th>Description</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
            
	<?php
	
		$srno=1;
		foreach($rows as $r)
		{
			echo    '<tr>
			 <td>' .$srno++ . '</td>
	         <td>'.$r->title.'</td>
		     <td><img src="'.base_url().$r->thumb_url.'"</td>
		     <td>'.$r->bhk.'</td>
		           <td>'.$r->type.'</td>
		           <td>'.$r->cost.'</td>
		           <td>'.$r->status.'</td>
		           <td>'.$r->area.'</td>
		 	  	   <td>'.$r->url.'</td>
		 	  	   <td>'.substr("$r->description",0,10).'</td>';
			   echo    '<td  align=center>';/*.anchor('content/publish_page/'.$r->id,'<img src="'.base_url().'images/icons/16/i_16_checked.png" alt="Publish" />','title="Publish"').'&nbsp&nbsp&nbsp';*/
			   		echo anchor('backend/media/edit_media/'.$r->id,'<img src="'.base_url().'images/icons/16/i_16_wysiwyg.png"  alt="Edit" />','title="Edit"');
		            echo anchor('backend/media/delete_media/'.$r->id,'<img src="'.base_url().'images/icons/16/i_16_close.png" alt="Delete" />','title="Delete"');
        			  echo '</td>';
         			

		
		  ?>
					
<?php  
echo '</tr>';
echo form_hidden('id',$r->id);}
?> 
</tbody>
       </table>
   </div>
 
	</div>
	
	<?php if($r->type)
		{	echo '<p class="g_3">';
			echo anchor('backend/media/add_media/','Add Property','class="simple_buttons1 g_91"');  
		}}  ?>
		</p>
	<p class="g_3">
	<?php
	
	if($type!='' && !$rows)
	{
		
			echo 'No '.$type.' Added <br/>';
			echo anchor('backend/media/add_media/','Add Property','class="simple_buttons1 g_91"');  
		
		
	}
	elseif(!$rows)
	{
		//echo anchor('media/add_media/image','    Add Image ','class="simple_buttons"');  
		echo 'click on above button which you want add';
	}
		
	
	?>

	 </p>
	
	   </form>

 