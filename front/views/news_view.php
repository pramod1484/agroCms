<?php

$con = mysql_connect("localhost","root","123456");
if(!$con)
{
die("connection to database failed".mysql_error());
}

$dataselect = mysql_select_db("swapcms1",$con);
if(!$dataselect)
{
die("Database namelist not selected".mysql_error());
}
?>


<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>css/news.css"/>



<div id="contain1">
<div id="header1">
<h1>News Breaks Here.. </h1>

</div>
<div id="menus1">
<a href="<?php echo base_url('site/get_content/News'); ?>">Home</a>

<?php

$qry=mysql_query("SELECT * FROM category LIMIT 0, 10", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

while($row=mysql_fetch_array($qry))
{
echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href='".base_url('site/article/?cat='.$row['category'])."'>".$row['category']."</a>

&nbsp;&nbsp;&nbsp;&nbsp;";
}
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="<?php echo base_url('backend/login'); ?>" target="_self">Login</a>
</div>
<div id="l_space">
<h2>Breaking News..</h2>
<?php

$qry=mysql_query("SELECT * FROM articles order by articles.id DESC LIMIT 0, 1", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}


while($row=mysql_fetch_array($qry))
{
echo "<h2>".$row['title']."</h2>";
echo "<img src=".base_url().$row['image']." />";
echo "<p>".substr($row['contents'],0,200)."<a href='".base_url('site/article/?id='.$row['id'])."'>...</a></p>";
}
?>
<p>&nbsp;</p>
</div>
<div id="r_space">
<h2>News::</h2>
<?php

$qry=mysql_query("SELECT * FROM articles order by articles.id DESC LIMIT 0, 3", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}


while($row=mysql_fetch_array($qry))
{

echo "<li><a href='".base_url('site/article/?id='.$row['id'])."'>".$row['title']."</a></li>";
}
?>
</div>

</div>



  
