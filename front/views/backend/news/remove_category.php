<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>css/news1.css" title="blue" />
<form id="form1" name="form1" method="post" action="<?php echo base_url('backend/news/category_removed'); ?>">
Select a Category to be Removed : 
<label for="category"></label>
<select name="category" id="category">
<?php
foreach ($rows as $row) 
{
echo "<option value='".$row->category."'>".$row->category."</option>";
}
?>

</select>
<input type="submit" name="submit" id="submit" value="Remove" />
</form>