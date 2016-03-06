<html>
<head>
<link href="http://fonts.googleapis.com/css?family=Oswald|Droid+Sans:400,700" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo site_url(); ?>CSS/style.css" />
	
	
</head>
<body>
<form method="post" action="" name="myform">

<div class="g_12">    				
	<?php
	$srno=1;
foreach($userprofile_records as $r)
{?>	

	<div class="widget_contents noPadding">		
	<div class="line_grid">
		<div class="g_2 g_2M">
			<div class="widget_contents noPadding1">	
			<img src="../Images/Avatar/avatar1.png" alt="avatar" class="avatar" height="100" width="100" />
			</div>
			
		<p class="g_3">
		<?php
			echo anchor('user/edit_user/'.$r->id,'    Edit   ','class="simple_buttons"');
		?>
		</p>
	
		</div>	
		
		<div id="side">
		
														
		<div class="g_10 g_10M">
						
		<div class="g_6"><span class="label1">Full Name:</span></div>
		<div class="g_6">
		<span class="label1"><?php echo $r->first_name.' '.$r->last_name;?></span></div>
		
		<div class="g_6"><span class="label1">Contact No:</span></div>
		<div class="g_6">
		<span class="label1"><?php echo $r->contact_no;?></span></div>
		
		<div class="g_6"><span class="label1">Address:</span></div>
		<div class="g_6">
		<span class="label1"><?php echo $r->address;?></span></div>
		
		<div class="g_6"><span class="label1">Website:</span></div>
		<div class="g_6">
		<span class="label1"><?php echo $r->website;?></span></div>
			
		<div class="g_6"><span class="label1">Email ID:</span></div>
		<div class="g_6">
		<span class="label1"><?php echo $r->emailid;?></span></div>
		
		<div class="g_6"><span class="label1">UserName:</div>
		<div class="g_6">
		<span class="label1"><?php echo $r->username;?></span></div>
		
		<div class="g_6"><span class="label1">Previlage:</span></div>
		<div class="g_6">
		<span class="label"><?php echo $r->previlage;?></span></div>
		
		</div>	
		</div>						
	</div>
	</div>						
</div>
	
			
<?php } ?>
			
</form>
</body>
</html>

