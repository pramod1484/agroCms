 
<!-- CONTENT START -->

	<form method="post" name="addmenu" action="../save_menu">
<div class="g_12">
					<div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_forms">Edit Menu</h4>
					</div>
					<div class="widget_contents noPadding">
					<p>
					<?php echo  validation_errors('<p class="error">'); ?></p>
<div class="line_grid">

								<div class="g_3"><span class="label">Parent menu <span class="must">*</span></span></div>
				
								<div class="g_9">
								<select name="parents" class="simple_form">
								

		
									<?php foreach($rows as $result){?>
		<option value="<?php echo $parent?$parent[0]->title:$result->title; ?>"><?php echo $parent?$parent[0]->title:$result->title; ?></option>
		<?php } ?>
								</select>
							</div>
							<div class="g_3"><span class="label">Submenu<span class="must">*</span></span></div>
				
								<div class="g_9">
								<select name="submenu" class="simple_form">
								
               					<?php
               					if(!$parent)
               					{
               						echo '<option selected="selected">no_submenu</option>';
               							foreach($all as $result){ ?>
               							
		<option value="<?php echo $result->title;?>"> <?php echo $result->title;?></option>
			<?php } 
               					}else{
               						?>
               					
		<option value="<?php echo $rows[0]->title;?>"<?php echo $rows[0]->title;?></option>
			<?php } ?>
								</select>
							</div>
 <div class="g_3"><span class="label">Priority<span class="must">*</span></span></div>
							<div class="g_9">
								<input type="text" name	="priority" value="<?php echo $result->priority; ?>" placeholder="Enter Priority for the page" class="simple_field"  />
							</div>



</div>
</div>
</div>
	<p class="g_3">
		  <input type="submit" value="Save" class="simple_buttons"/>
		  	</p>
		

</form>
