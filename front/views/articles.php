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

<style type="text/css">
a:link {
text-decoration: none;
}
a:visited {
text-decoration: none;
}
a:hover {
text-decoration: underline;
}
a:active {
text-decoration: none;
}
</style>
</head>

<body>
<div id="contain1">
<div id="header1">
<h1>News Breaks Here..</h1>
</div>
<div id="menus1">

<a href="<?php echo base_url('site/get_content/News'); ?>">Home</a>
<?php

$qry=mysql_query("SELECT * FROM category LIMIT 0, 6", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}


while($row=mysql_fetch_array($qry))
{
echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=backend/site/article?cat=".$row['category'].">".$row['category']."</a>

&nbsp;&nbsp;&nbsp;&nbsp;";
}
?>
</div>

<div id="l_space">
<h2>News::</h2>
<?php


if(isset($_GET['id']))
{
$id=$_GET['id'];
$qry=mysql_query("SELECT * FROM articles WHERE id=$id", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}


while($row=mysql_fetch_array($qry))
{
echo "<h2>".$row['title']."</h2>";
echo "<img src=".base_url().$row['image']." />";
echo "<p>".$row['contents']."</p>";
}
}


if(isset($_GET['cat']))
{
//echo $_GET['cat'];
$cat=$_GET['cat'];
$qry=mysql_query("SELECT * FROM articles WHERE category='$cat' order by articles.id DESC LIMIT 0, 1", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}


while($row=mysql_fetch_array($qry))
{
echo "<h2>".$row['title']."</h2>";
echo "<img src=".base_url().$row['image']." />";
echo "<p>".$row['contents']."</p>";
}
}

?>

</div>

 

  <div id="r_space">
<h2>News</h2>
<?php

if(isset($_GET['id']))
{
$id=$_GET['id'];
$qry=mysql_query("SELECT category FROM articles WHERE id='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

$row=mysql_fetch_array($qry);
$cat=$row['category'];

$qry=mysql_query("SELECT * FROM articles WHERE category='$cat' order by articles.id DESC", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
while($row=mysql_fetch_array($qry))
{

echo "<li><a href=backend/site/article?id=".$row['id'].">".$row['title']."</a></li>";
}
}


if(isset($_GET['cat']))
{
$cat=$_GET['cat'];


$qry=mysql_query("SELECT * FROM articles WHERE category='$cat' order by articles.id DESC", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
while($row=mysql_fetch_array($qry))
{
echo "<li><a href=backend/site/article?id=".$row['id'].">".$row['title']."</a></li>";
}

}
?>
</div>


