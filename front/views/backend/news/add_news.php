<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>css/news1.css" title="blue" />

<form action="<?php echo base_url('backend/news/article_created'); ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
<p>Category :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="category" id="category">
<?php

foreach ($rows as $r) {

echo "<option value='".$r->category."'>".$r->category."</option>";

}
?>
</select>
</p>
<p>Title :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label for="title"></label>
<input type="text" name="title" id="title" required/>
</p>
<p>Upload Image :&nbsp; 
<label for="image"></label>
<input type="file" name="image" id="image" required/>
</p>
<p>Page Contents :&nbsp; 
<label for="contents"></label>
<textarea name="contents" cols="100" rows="12" id="contents" required></textarea>
</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="button" id="button" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type="reset" name="button3" id="button3" value="Reset" />
</p>
</form>
