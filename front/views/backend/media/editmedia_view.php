<?php 
echo form_open_multipart('backend/media/add');?>

<div class="g_12">
				
					
					<div class="widget_contents noPadding">
						<?php echo validation_errors('<p class="error">');?>
						<div class="line_grid">
			
					</div>		
						<input type="hidden" name="id" value="<?php echo $row->id ?>"/>
						<div class="g_3"><span class="label">Building Name: <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="title" placeholder="Enter Building Name" class="simple_field" value="<?php echo $row->title; ?>" required />
							</div>
							<div class="g_3"><span class="label">Select  <span class="must">*</span></span></div>
							<div class="g_9">
								<input type="file" name="image" class="simple_form" value="<?php echo $row->url; ?>"  />
								<div class="field_notice">Max Size: 1Mb</div>
							</div>
							<div class="g_3"><span class="label">BHK :</span></div>
								<div class="g_9">
									<input type="text" name="bhk" placeholder="How Many Rooms You Want?" class="simple_field" value="<?php echo $row->bhk; ?>"/>
							</div>
						
						<div class="g_3"><span class="label">Property Type : </span></div>
								<div class="g_9">
									<input type="text" name="type" placeholder="Enter Property Type " class="simple_field" value="<?php echo $row->type; ?>"/>
							</div>

							<div class="g_3"><span class="label">Cost (INR):</span></div>
								<div class="g_9">
									<input type="text" name="cost" placeholder="Enter Cost" class="simple_field" value="<?php echo $row->cost; ?>"/>
							</div>

							<div class="g_3"><span class="label">Building Status:</span></div>
								<div class="g_9">
									<input type="text" name="status" placeholder="Enter Building Status" class="simple_field" value="<?php echo $row->status; ?>" />
							</div>

							<div class="g_3"><span class="label">Area:</span></div>
								<div class="g_9">
									<input type="text" name="area" placeholder="Enter Area" class="simple_field" value="<?php echo $row->area; ?>" />
							</div>

							<div class="g_3"><span class="label">Description:</span></div>
								<div class="g_9">
									<input type="text" name="area" placeholder="Enter Description" class="simple_field" value="<?php echo $row->description; ?>" />
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
    
