


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kanrisha - A Premium HTML5 Responsive Admin Template</title>
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="../Javascript/Flot/excanvas.js"></script>
	<![endif]-->
	<!-- The Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Oswald|Droid+Sans:400,700" rel="stylesheet">
	<!-- The Main CSS File -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>css/style.css">
	
</head>
<body>
	
	<!-- Top Panel -->
	<div class="top_panel">
		<div class="wrapper">
		
		</div>
	</div>
<?=$this->session->userdata('name');?>
	<div class="wrapper contents_wrapper">
		<?php echo form_open('backend/login/validate');?>
		<div class="login">
			<div class="widget_header">
				<h4 class="widget_header_title wwIcon i_16_login">Login</h4>
			</div>
			<div class="widget_contents lgNoPadding">
				
				
				<div class="line_grid">
					<div class="g_2 g_2M"><span class="label">Username</span></div>
					<div class="g_10 g_10M">  
  <input id="username" name="username" required="required" placeholder="Enter Your Username" class="simple_field tooltip" title="Your Username" type="text" /></div>
                                
                                
             <div class="clear"></div>   
			 </div>
				<div class="line_grid">
					<div class="g_2 g_2M"><span class="label">Password</span></div>
					<div class="g_10 g_10M">    
					                
<input class="simple_field tooltip" title="Your Password" id="password" name="password" required="required" type="password" placeholder="Enter Your Password" value="password" /> 
                                
					</div>
					<div class="clear"></div>
				</div>
				<div class="line_grid">
					<div class="g_6"><input class="submitIt simple_buttons" value="Log In" type="submit">
					</div>
					<div class="clear"></div>
				</div>
				
			</div>
		</div>
<?php echo validation_errors('<p class="error">');
                               echo form_close();
							    ?>
	</div>
</body>
</html>