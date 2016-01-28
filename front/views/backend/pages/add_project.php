<?php echo form_open_multipart(base_url('backend/projects/do_upload')); ?>
<div class="g_12">

    <div class="widget_contents noPadding">
        <p>
            <?php echo validation_errors('<p class="error">'); ?></p>

        <div class="line_grid">



            <div class="g_3"><span class="label">Project Year<span class="must">*</span></span></div>
            <div class="g_6">
                <select name="year" id="year" class="simple_field">
                    <?php
                    for ($st = 2000; $st <= 2020; $st++) {
                        echo '<option value="' . $st . '">' . $st . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div>
            </div>

            <div class="g_3"><span class="label">Project Type<span class="must">*</span></span></div>
            <div class="g_6">
                <select name="type" class="simple_field">
                <?php
                
                foreach ($types as $type) {
                    echo '<option value="'.$type->name.'">'
                            .$type->name.'</option>';
                }
                   ?>
                </select>
            </div>

            <div class="g_3"><span class="label">Domain<span ></span></span></div>
            <div class="g_9">
                <select name="domain[]"  class="simple_select" multiple style="width:370px">
                <?php
                
                foreach ($domains as $domain) {
                    echo '<option value="'.$domain->domain_name.'">'
                            .$domain->domain_name.'</option>';
                }
                   ?>
                </select>
            </div>


            <div class="g_3"></div>
            <div class="g_9">
                <span class="notice">Use ctl key to select multiple</span></div>

            <div class="g_3"><span class="label">Project Title</span></div>
            <div class="g_9">
                <input type="text" name="title" placeholder="Enter Title" class="simple_field" />
            </div>	

            <div class="g_3"><span class="label">Select Synopsis<span class="must">*</span></span></div>
            <div class="g_9">
                <input type="file" name="synopsis" class="simple_form" />
                <div class="field_notice">Max Size: 10Mb</div>
            </div>	
            	
            <div class="g_3"><span class="label">Select Base Paper<span class="must">*</span></span></div>
            <div class="g_9">
                <input type="file" name="basepaper" class="simple_form" />
                <div class="field_notice">Max Size: 10Mb</div>
            </div>			




        </div>

    </div>
    <p class="g_3">
        <input type="submit" value="Save" class="simple_buttons"/>
    </p>
</div>
</form>
