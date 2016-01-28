<!--Ajax-->
<script>
var xmlhttp;
function ajaxFunction(url,myReadyStateFunc)
{
   
      // For IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
  
   xmlhttp.onreadystatechange= myReadyStateFunc;        // myReadyStateFunc = function
   xmlhttp.open(POST,url,true);
   xmlhttp.send();
}
function getparent(x)
{
    // in second argument of ajaxFunction we are passing whole function (onreadystatechange function).

    ajaxFunction('<?php echo base_url("backend/menu/get_menu");?>?pid='+x, function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
                  var p = xmlhttp.responseText;    //   p = “1,2,3,|Home,About US,Contact Us”
                  p=p.split('|');                              //   s = ["1,2,3,", "Home,About US,Contact Us,"]
                  pid = s[0].split(',');                    //  pid = [1,2,3,]
                  pval = s[1].split(',');                   //  pval = [Home, About US, Contact Us,]
                  pt = document.getElementById('title')
                  pt.length=0
                  for(i=0;i<pid.length-1;i++)
                 {
                            pt[i] = new Option(pval[i],pid[i])
                  }
                 getparent(-1) // emptying the Parent.
        }
    });
}
function getsubmenu(x)
{
    // in second argument of ajaxFunction we are passing whole function.

   ajaxFunction(“<?= base_url('menu/get_menu'); ?>?sid=”+x, function()
   {
       if (xmlhttp.readyState==4 && xmlhttp.status==200)
       {
                 var s = xmlhttp.responseText; 									//   s = “1,2,3,|Apps for buissness,About US,Contact Us”
                 s=s.split(“|”);
                 sid = s[0].split(“,”);
                 sval = s[1].split(“,”);
                st = document.getElementById(‘submenu’)
                st.length=0
                for(i=0;i<sid.length-1;i++)
                {
                        st[i] = new Option(sval[i],sid[i])
                 }
        }
    });
}
</script>




<!-- CONTENT START -->

	<form method="post" name="addmenu" action="save_menu">
<div class="g_12">
			
					<div class="widget_contents noPadding">
					<p>
					<?php echo  validation_errors('<p class="error">'); ?></p>
<div class="line_grid">
<div class="g_3"><span class="label">Language <span class="must">*</span></span></div>
	<div class="g_9">
	<select name="language" class="simple_form">
	<?php
	    foreach($lang as $val)
	   {
	        echo '<option value="'.$val->id.'">'.$val->name.'</option>';
	   }
?>
</select>
</div>
								<div class="g_3"><span class="label">parent <span class="must">*</span></span></div>
				
								<div class="g_9">
								<select name="parents" class="simple_form">
									<?php	foreach($page as $result){?>
		<option onselect="getparent();" value="<?php echo $result->title;?>" selected="selected"><?php echo str_replace('_', ' ', $result->title);?></option>
		<?php } ?>
								</select>
							</div>
							<div class="g_3"><span class="label">Submenu<span class="must">*</span></span></div>
				
								<div class="g_9">
								<select name="submenu" class="simple_form">
								<option selected="selected">no_submenu</option>
               					<?php	foreach($page as $result){?>
		<option value="<?php echo $result->title;?>" ><?php echo str_replace('_', ' ', $result->title);?></option>
		<?php } ?>
								</select>
							</div>
							<div class="g_3"><span class="label">Priority<span class="must">*</span></span></div>
							<div class="g_9">
								<input type="text" name	="priority" placeholder="Enter Priority for the page" class="simple_field"  />
							</div>
						</div>
						</div>
														
						</div>
	<p class="g_3">
			<input type="submit" value="Save" class="simple_buttons"/>
			</p>
	</div>
</form>



