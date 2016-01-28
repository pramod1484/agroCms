<?php 
echo form_open_multipart('backend/media/add');?>
<div class="g_12">
				
					
					<div class="widget_contents noPadding">
						<?php echo validation_errors('<p class="error">');?>
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
</select>-->
					</div>		
						<input type="hidden" name="type" value="<?php echo $type; ?>"/>
						<div class="g_3"><span class="label">Building Name: <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="title" placeholder="Enter Building Name" class="simple_field" required />
							</div>
							<div class="g_3"><span class="label">Select  <?php echo $type ;?><span class="must">*</span></span></div>
							<div class="g_9">
								<input type="file" name="image" class="simple_form" />
								<div class="field_notice">Max Size: 1Mb</div>
							</div>
							<div class="g_3"><span class="label">BHK :</span></div>
								<div class="g_9">
									<input type="text" name="bhk" placeholder="How Many Rooms Are There?" class="simple_field" />
							</div>
						
						<div class="g_3"><span class="label">Property Type : </span></div>
								<div class="g_9">
									<input type="text" name="type" placeholder="Enter Property Type " class="simple_field" />
							</div>

							<div class="g_3"><span class="label">Cost (INR):</span></div>
								<div class="g_9">
									<input type="text" name="cost" placeholder="Enter Cost" class="simple_field" />
							</div>

							<div class="g_3"><span class="label">Building Status:</span></div>
								<div class="g_9">
									<input type="text" name="status" placeholder="Enter Building Status" class="simple_field" />
							</div>

							<div class="g_3"><span class="label">Area:</span></div>
								<div class="g_9">
									<input type="text" name="area" placeholder="Enter Area" class="simple_field" />
							</div>
							<div class="g_3"><span class="label">Description:</span></div>
								<div class="g_9">
									<input type="text" name="description" placeholder="Enter Description" class="simple_field" />
							</div>

						</div>
							
						<div class="line_grid">
							<div class="g_9">
								<input type="submit" value="Upload .." class="simple_buttons" />
							</div>
						</div>
					</div>
</div>


    <!--RIGHT TEXT/CALENDAR-->
    
