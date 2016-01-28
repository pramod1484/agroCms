 <form method="post" action="" name="news">
    	<div class="g_12">
				
					<div class="widget_contents noPadding">
					<?php 
					echo anchor('backend/news/add_news/','Add News','class="simple_buttons1 g_91"');  
					echo anchor('backend/news/add_category/','Add Category','class="simple_buttons1 g_91"');
					echo anchor('backend/news/remove_category/','Remove Category','class="simple_buttons1 g_91"');
		            
						if($rows)
						{  ?>

						<table class="tables datatable  noObOLine">
          
           <thead>
								<tr>
									<th>Sr. No.</th>
									<th>Title</th>
									<th>Image</th>
									<th>Contents</th>
									<th>Category</th>
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
		     <td><img src="'.base_url().$r->thumb.'"</td>
		           <td>'.substr("$r->contents",0,20).'</td>
		 	  <td>'.$r->category.'</td>';
			   echo    '<td  align=center>';/*.anchor('content/publish_page/'.$r->id,'<img src="'.base_url().'images/icons/16/i_16_checked.png" alt="Publish" />','title="Publish"').'&nbsp&nbsp&nbsp';*/

		            
		            echo anchor('backend/news/delete_news/'.$r->id,'<img src="'.base_url().'images/icons/16/i_16_close.png" alt="Delete" />','title="Delete"');
		            echo anchor('backend/news/edit_news/'.$r->id,'<img src="'.base_url().'images/icons/16/i_16_wysiwyg.png" alt="Edit" />','title="Edit"');
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
	
	<?php if($r->contents)
		{	echo '<p class="g_3">';
			echo anchor('backend/news/add_news/','Add News','class="simple_buttons1 g_91"');  
		}}  ?>
		</p>
	<p class="g_3">
	<?php
	
	if($type!='' && !$rows)
	{
		
			echo 'No '.$type.' Added <br/>';
			echo anchor('backend/news/add_news/','Add News','class="simple_buttons1 g_91"');  
		
		
	}
	elseif(!$rows)
	{
		//echo anchor('media/add_media/image','    Add Image ','class="simple_buttons"');  
		echo 'click on above button which you want add';
	}
		
	
	?>

	 </p>
	
	   </form>

 