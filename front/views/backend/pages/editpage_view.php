<!-- CONTENT START -->

	<form method="post" name="edit_page" action="../update_page">
<div class="g_12">
					<div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_forms">Update Page</h4>
					</div>
					<div class="widget_contents noPadding">
					<p>
					<?php echo  validation_errors('<p class="error">'); ?></p>
<div class="line_grid">
								<input type="hidden" name="rid" id="rid" value="<?php echo $rows->id;?>">
								<div class="g_3"><span class="label">Title <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="title" value="<?php echo str_replace('_', ' ', $rows->title); ?>"  placeholder="Enter Title for Page" class="simple_field" required />
								</div>
								<div>
			  <input name="date" type="hidden" id="date" class="largeInput" value="<?php echo date("Y/m/d")?>"/>
		</div>
		<div>
			<span class="label" style="margin-left:10px">Content <span class="must">*</span>
		</div>		
						<div class="g_12">
						<textarea name="content"  class="simple_field wysiwyg"><?php echo $rows->content; ?></textarea>
							<div class="field_notice">Enter Your Page Content</div>
							
							</div>
							<div class="g_3"><span class="label">Meta Title <span class="must">*</span></span></div>
							<div class="g_9">
								<input type="text" name="meta_title"  value="<?php echo $rows->meta_title; ?>"  placeholder="Enter Mete Title for Page" class="simple_field"  required/>
							</div>
							
							<div class="g_3"><span class="label">Meta Keyword <span ></span></span></div>
							<div class="g_9">
								<input type="text" name="meta_keyword" value="<?php echo $rows->meta_keyword; ?>" placeholder="Enter Keyword for Page" class="simple_field" />
							</div>
								
							<div class="g_3"><span class="label">Meta Discription </span></div>
							<div class="g_9">
								<input type="text" name="meta_discription" value="<?php echo $rows->meta_discription; ?>" placeholder="Enter Discription for Page" class="simple_field" />
							</div>	
							<div class="g_3"><span class="label">Parmalink </span></div>
							<div class="g_9">
								<input type="text" name	="permalink" value="<?php echo $rows->permalink; ?>" placeholder="Enter Parmalink for Page" class="simple_field"  />
							</div>					
			

	    </div>
			</div>
			<p class="g_3">
			<input type="submit" value="Save" class="simple_buttons"/>
			</p>

	</div>
</form>
