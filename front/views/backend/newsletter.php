<html>
	<head><title></title>
	<link  rel="stylesheet" href="<?php echo site_url()?>css/style.css" type="text/css" media="screen" charset="utf-8"/>
	</head>
<body bgcolor="#d7fbfd">
<h1>news letter page loaded!!</h1>
<div id="newsletter_form">
<?php echo form_open('email/send'); ?>
<?php
//creating input fieds using php form helper
	$name_data=array(
		'name'=>'name',
		'id'=>'name',
		'value'=>set_value('name')
		//set_value function remeber the priviously entered valu in form if validations fails
		);
?>

<p><label for='name'>name</label><br><?php echo form_input($name_data);?><br>
<label for='name'>Email address</label><br>
<input  type="text" name="email" id="email" value="<?php echo set_value('email'); ?>"/> <br><input type="submit" name="submit" value='submit' /></p>
<?php echo form_close(); ?>

<?php echo validation_errors('<p class="error" >'); ?>
</div>

</body>
</html>
