<?php echo form_open_multipart(base_url('backend/projects/do_upload')); ?>
<div class="g_12">
				
					<div class="widget_contents noPadding">
					<p>
					<?php echo  validation_errors('<p class="error">'); ?></p>

<div class="line_grid">



								<div class="g_3"><span class="label">Project Year<span class="must">*</span></span></div>
								<div class="g_6">
                                                                    <?php echo form_hidden('id',$details->project_id); ?>
                                                                    <?php echo form_hidden('project_code',$details->project_code); ?>
								<select name="year" id="year" class="simple_field">
									<?php 
										for($st=2000;$st<=2020;$st++)
										{
                                            if($st==$details->year)
                                           {
                                                echo '<option value="'.$st.'" selected="selected">'.$st.'</option>';
										
                                           }  else 
                                           {
                                               echo '<option value="'.$st.'">'.$st.'</option>';
										 }
										}
									?>
									</select>
								</div>
								<div>
			 </div>

				<div class="g_3"><span class="label">Project Type<span class="must">*</span></span></div>
				<div class="g_6">
									<!--<select name="type" id="type">-->
						 <select name="type" class="simple_field">
                <?php      
                foreach ($types as $type) 
                {
                	if($type==$details->project_type)
                	{
                    echo '<option value="'.$type->name.'" selected="selected">'
                            .$type->name.'</option>';
                    }else
                    {
                    	  echo '<option value="'.$type->name.'" >'
                            .$type->name.'</option>';
                    }
                }
                ?>

                </select>
							</div>
							
				<div class="g_3"><span class="label">Domain<span ></span></span></div>
				<div class="g_6">
					<select name="domain[]"  class="simple_select" multiple style="width:370px">
                <?php
                $i=0;
                 $dbdomain=  explode(',', $details->domain);
                                    
                foreach ($domains as $domain) {
                	if($domain==$details->domain)
                	{
                    echo '<option value="'.$domain->domain_name.'" selected="selected">';
                    echo   $domain->domain_name.'</option>';
                	}
                	else
                	{
                    echo '<option value="'.$domain->domain_name.'">';
                    echo        $domain->domain_name.'</option>';
                	}
                }
                   ?>
                </select>

		</div>

		<div class="g_3"></div>
		<div class="g_9">
		<span class="notice">Use ctl key to select multiple</span></div>
								
		<div class="g_3"><span class="label">Project Title</span></div>
		<div class="g_9">
		<input type="text" value="<?php echo $details->title; ?>" name="title" placeholder="Enter Title" class="simple_field" />
		</div>	

		<div class="g_3"><span class="label">Select Synopsis<span class="must">*</span></span></div>
		<div class="g_9">
		<input type="file" name="synopsis" value="<?php echo $details->synopsis; ?> " class="simple_form" />
		<div class="field_notice">Max Size: 10Mb</div>
		</div>

		<div class="g_3"><span class="label">Select Base Paper<span class="must">*</span></span></div>
		<div class="g_9">
		
        <input type="file" name="basepaper" value="<?php set_value($details->basepaper); ?>" class="simple_form" />
		<div class="field_notice">Max Size: 10Mb</div>
		</div>			
												
			
	
		
		    </div>
		
	</div>
	<p class="g_3">
			<input type="submit" value="Save" class="simple_buttons"/>
			</p>
	</div>
</form>
