	 

    <!--  TITLE START  --> 


	 <form method="post" action="" name="blocks"> 
    	<div class="g_12"> 
	
					<div class="widget_contents noPadding"> 
        <?php if($rows) 
						{ ?> 
						<table class="tables datatable  noObOLine "> 
           <thead> 
								<tr> 
									<th>Sr. No.</th> 
									<th>Title</th> 
									<th>Position</th> 
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
		     <td>'.$r->title.'</td>';?> 
		<?php echo 
		  '<td>'.$r->position.'</td>';?> 
		     <?php 
			 echo  
	          '<td  align=center>';/*.anchor('blocks/publish_blocks/'.$r->id,'<img src="'.site_url().'images/icons/16/i_16_checked.png" alt="Publish" />','title="Publish"').'&nbsp&nbsp&nbsp';*/ 
		echo anchor('backend/blocks/edit_blocks/'.$r->id,'<img src="'.site_url().'images/icons/16/i_16_wysiwyg.png" alt="Edit" />','title="Edit"').'&nbsp&nbsp&nbsp'; 

        
   echo anchor('backend/blocks/delete_blocks/'.$r->id,'<img src="'.site_url().'images/icons/16/i_16_close.png" alt="Delete" />','title="Delete"'); 
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
   <?php } 
    else { 
   	echo 'No blocks Available';}?> 
   	<p class="g_3"> 
     <?php 
		//echo form_button('',anchor('addpage','add','')); 
		 
	echo anchor('backend/blocks/add_blocks','    Add Blocks   ','class="simple_buttons1 g_91"'); 
			  ?> 
	 </p> 
	 
	   </form> 