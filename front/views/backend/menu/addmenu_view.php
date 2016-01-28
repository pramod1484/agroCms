
<!-- CONTENT START -->

	<form method="post" name="addmenu" action="save_menu">
<div class="g_12">
					<div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_forms">Add New Menu</h4>
					</div>
					<div class="widget_contents noPadding">
					<p>
					<?php echo  validation_errors('<p class="error">'); ?></p>
<div class="line_grid">
								<div class="g_3"><span class="label">parent <span class="must">*</span></span></div>
				
								<div class="g_9">
								<select name="parents" class="simple_form">
									<?php	foreach($page as $result){?>
		<option value="<?php echo $result->title;?>" selected="selected"><?php echo $result->title;?></option>
		<?php } ?>
								</select>
							</div>
							<div class="g_3"><span class="label">Submenu<span class="must">*</span></span></div>
				
								<div class="g_9">
								<select name="submenu" class="simple_form">
								<option selected="selected">no_submenu</option>
               					<?php	foreach($page as $result){?>
		<option value="<?php echo $result->title;?>" ><?php echo $result->title;?></option>
		<?php } ?>
								</select>
							</div>
						</div>
						</div>
														
						</div>
	<p class="g_3">
			<input type="submit" value="Save" class="simple_buttons"/>
			</p>
	</div>
</form>



