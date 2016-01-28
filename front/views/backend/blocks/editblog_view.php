<!-- CONTENT START -->

	<form method="post" name="edit_Blocks" action="../update_Blocks">
<div class="g_12">
					<div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_forms">Update Blocks</h4>
					</div>
					<div class="widget_contents noPadding">
					<p>
					<?php echo  validation_errors('<p class="error">'); ?></p>
<div class="line_grid">
								<input type="hidden" name="rid" id="rid" value="<?php echo $rows->id;?>">
								<div class="g_3"><span class="label">Title <span class="must">*</span></span></div>
								<div class="g_9">
								<?Php 
								if(	$rows->title=='Latest Updates' OR $rows->title=='Latest News')
								{
							?>
									<input type="text" name="title" value="<?php echo $rows->title; ?>"  placeholder="Enter Title for Blocks" class="simple_field" readonly/>
									<?php }
									else { ?>
<input type="text" name="title" value="<?php echo $rows->title; ?>"  placeholder="Enter Title for Blocks" class="simple_field" required/>
                                  <?php } ?>
									
								</div>
								<div>
			  <input name="date" type="hidden" id="date" class="largeInput" value="<?php echo date("Y/m/d")?>"/>
		</div>
		<div>
			<span class="label" style="margin-left:10px">Content <span class="must">*</span>
		</div>		
						<div class="g_12">
						<textarea name="content"  class="simple_field wysiwyg"><?php echo $rows->content; ?></textarea>
							<div class="field_notice">Enter Your Blocks Content</div>
							
							</div>
							<div class="g_3"><span class="label">Position <span class="must">*</span></span></div>
							<div class="g_9">
								<input type="text" name="position"  value="<?php echo $rows->position; ?>"  placeholder="Enter Mete Title for Blocks" class="simple_field"  required/>
							</div>
								
			

	    </div>
			</div>
			<p class="g_3">
			<input type="submit" value="Save" class="simple_buttons"/>
			</p>

	</div>
</form>
