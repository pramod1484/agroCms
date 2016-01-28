<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>css/news1.css" title="blue" />
<form id="form1" name="form1" method="post" action="<?php echo base_url('backend/news/category_created'); ?>">
Enter a New Category Name : 
<label for="cat"></label>
<input type="text" name="cat" id="cat" required/>
<input type="submit" name="submit" id="submit" value="Submit" />
</form>