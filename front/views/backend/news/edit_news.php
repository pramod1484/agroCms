<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>css/news1.css" title="blue" />
<form action="<?php echo base_url('backend/news/article_edited'); ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
<p>Article Id &nbsp;&nbsp;:
<input type="text" name="id" id="idd" value="<?php echo $row->id; ?>" />
</p>
<p>Category &nbsp;&nbsp;: 
<label for="cat"></label>
<input type="text" name="category" id="category" value="<?php echo $row->category; ?>" />
</p>
<p>Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
<label for="tit"></label>
<input type="text" name="title" id="title" value="<?php echo $row->title; ?>" />
</p>
<p>Image&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 
<label for="image"></label>
<input type="file" name="image" id="image" />
(Upload New Image only is there is a change in the existing image)

<p>Contents &nbsp;&nbsp;&nbsp;: 
<label for="cont"></label>
<textarea name="contents" id="contents" cols="100" rows="12" ><?php echo $row->contents; ?></textarea>
</p>
<p align="center">
<input type="submit" name="Submit" id="Submit" value="Submit" />
</p>
</form>