 <script>
function display_pageDiv(e){
document.getElementById('regular_page').style.display = "none";
document.getElementById('special_page').style.display = "none";
if(e==1)
document.getElementById('regular_page').style.display = "block";
else if(e==2)
document.getElementById('special_page').style.display = "block";
}
</script>
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="menu">Edit Menus</h1><form method="post" action="edit_menu">
	<div class="contact_form">
		<h5>Edit Menus</h5>
		<div id="c_form">
		<div class="field">
		  <h6>Parent* :<br />
		<select name="parents" style="width:200px" class="largeselect">
	<!--<option selected="selected">no_parent</option>-->
	<?php	foreach($rows as $result){?>
		<option value="<?php $result->title;?>" selected="selected"><?php echo str_replace('_', ' ', $result->title);?></option>
		<?php } ?>
		
		</select>
		</div>
		<div class="field">
		  <h6>Submenu* :<br />
		<select name="submenu" style="width:200px" class="largeselect">
		<option selected="selected">no_submenu</option>
		<?php	foreach($rows as $result){?>
		<option value="<?php echo $result->title;?>" selected="selected"><?php echo str_replace('_', ' ', $result->title);?></option>
		<?php } ?>
		
		</select>
		
		  </div>

		  <div class="g_3"><span class="label">Priority </span></div>
							<div class="g_9">
								<input type="text" name	="priority" placeholder="Enter Priority for the page" class="simple_field"  />
							</div>
		  <input type="submit" value="Save" class="buttonsave"/>
		</div>
</form>
</div>