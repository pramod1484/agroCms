<!-- CONTENT START -->

	<form method="post" name="addpage" action="save_page">
<div class="g_12">
				
					<div class="widget_contents noPadding">
					<p>
					<?php echo  validation_errors('<p class="error">'); ?></p>

<div class="line_grid">



								<div class="g_3"><span class="label">Title <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="title" placeholder="Enter Title for Page" class="simple_field" required />
								</div>
								<div>
			  <input name="date" type="hidden" id="date" class="largeInput" value="<?php echo date("Y/m/d")?>"/>
		</div>
		<div class="g_3">
			<span class="label" >Content <span class="must">*</span>
		</div>		
			
							<div class="g_12">
								<textarea name="content" class="simple_field wysiwyg"></textarea>
								<div class="field_notice">What You See Is What You Get ;)</div>
							</div>
				
							<div class="g_3"><span class="label">Meta Title <span class="must">*</span></span></div>
							<div class="g_9">
								<input type="text" name="meta_title" placeholder="Enter Mete Title for Page" class="simple_field"  required/>
							</div>
							
							<div class="g_3"><span class="label">Meta Keyword <span ></span></span></div>
							<div class="g_9">
								<input type="text" name="meta_keyword" placeholder="Enter Keyword for Page" class="simple_field" />
							</div>
								
							<div class="g_3"><span class="label">Meta Discription </span></div>
							<div class="g_9">
								<input type="text" name="meta_discription" placeholder="Enter Discription for Page" class="simple_field" />
							</div>	
							<div class="g_3"><span class="label">Parmalink </span></div>
							<div class="g_9">
								<input type="text" name	="permalink" placeholder="Enter Parmalink for Page" class="simple_field"  />
							</div>					
												
			
	
		
		    </div>
		
	</div>
	<p class="g_3">
			<input type="submit" value="Save" class="simple_buttons"/>
			</p>
	</div>
</form>





