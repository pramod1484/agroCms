	<!--  TITLE START  --> 
	 <form method="post" action="" name="Media">
    	<div class="g_12">
					<div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_resize">Current Pages</h4>
						<div style="margin-left:530px">
						<span class="label">Show pages</span>
						<select class="simple_form">
						<option value="All pages" selected="selected" />All pages
						<option value="active" />Active
						<option value="inactive" />Inactive
						</select>
						</div>
					</div>
					<div class="widget_contents noPadding">
						<table class="tables datatable  noObOLine">
          
           <thead>
								<tr>
									<th>Sr. No.</th>
									<th>Title</th>
									<th>Url</th>
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
		     <td>'.$r->title.'</td>
		 
		  <td>'.$r->url.'</td>';?>
		     <?php 
			 echo  
	          '<td  align=center>';
			echo anchor('backend/menu/delete_menu/'.$r->id,'<img src="'.site_url().'images/icons/16/i_16_close.png" alt="Delete" />','title="Delete"');
        echo '</td>'
    
	
		  ?>
					
<?php  
echo '</tr>';
echo form_hidden('id',$r->id);}
?> 
</tbody>
       </table>
   </div>
	</div><p class="g_3">
     <?php
		//echo form_button('',anchor('addpage','add',''));
		
	echo anchor('backend/menu/add_menu','    Add menus   ','class="simple_buttons"');
			  ?>
	 </p>
	
	   </form>


