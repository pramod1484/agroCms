
<!-- CONTENT START -->

	<form method="post" name="addblocks" action="save_blocks">
<div class="g_12">
				
					<div class="widget_contents noPadding">
					<p>
					<?php echo  validation_errors('<p class="error">'); ?></p>
<div class="line_grid">
	<!--<div class="g_3"><span class="label">Language <span class="must">*</span></span></div>
	<div class="g_9">
	<select name="language" class="simple_form">
	<?php
	    foreach($lang as $val)
	   {
	        echo '<option value="'.$val->id.'">'.$val->name.'</option>';
	   }
?>
</select>
</div>-->

								<div class="g_3"><span class="label">Title <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="title" placeholder="Enter Title for Blocks" class="simple_field" required />
								</div>
								<div>
			  <input name="date" type="hidden" id="date" class="largeInput" value="<?php echo date("Y/m/d")?>"/>
		</div>
		<div class="g_3">
			<span class="label">Content <span class="must">*</span>
		</div>		
						<div class="g_12">
						<textarea name="content" class="simple_field wysiwyg"></textarea>
							<div class="field_notice">Enter Your Blocks Content</div>
							
							</div>
							<div class="g_3"><span class="label">Position <span class="must">*</span></span></div>
							<div class="g_9">
								<input type="text" name="position" placeholder="Enter Position for Blocks" class="simple_field"  required/>
							</div>
							
											
			

	
		
		    </div>
		
	</div>
	<p class="g_3">
			<input type="submit" value="Save" class="simple_buttons"/>
			</p>
	</div>
</form>





