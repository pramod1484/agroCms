<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Message</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<style type="text/css">
	.bs-example{
		margin: 20px;
	}
</style>
</head>
<body>
<div class="bs-example">
    <div class="alert alert-info">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
<?php
$name=$_POST["name"];
$email=$_POST["email"];
$cmnt= "Name : ".$name."\nEmail : ".$email. "\nContact No : ".$_POST["phone"] ;
$to = "sunil.pawar.marketing@gmail.com,sunilpawar.landson@gmail.com";
$subject = "New Inquiry";
$message = $cmnt;
$from = $email;
$headers = "From:" . $from;
if(mail($to,$subject,$message,$headers))
{
echo "<strong>Thank You!</strong> We will get back to you shortly";
}
?>         


 </div>
</div>
</body>
</html>          

