<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php echo  $title;  ?></title>
	<style>div.htmltooltip{
	position: absolute; /*leave this and next 3 values alone*/
	z-index: 1000;
	left: -1000px;
	top: -1000px;
	background: #999;
	border: 1px solid black;
	border-radius: 10px 10px 10px 10px;
	color: white;
	padding: 3px;
	width: 200px; /*width of tooltip*/
	}</style>

	<!--[if lt IE 9]-->
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="<?php echo site_url(); ?>Javascript/Flot/excanvas.js"></script>
	<!--[endif]-->
	<!-- The Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Oswald|Droid+Sans:400,700" rel="stylesheet" />
	<!-- The Main CSS File -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>css/style1.css" />
	
	
	<!-- jQuery -->
	<script src="<?php echo site_url(); ?>Javascript/jQuery/jquery-1.7.2.min.js"></script>
	<script src="<?php echo site_url(); ?>js/jquery-1.7.1.min.js"></script>
	<script src="<?php echo site_url(); ?>js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<!-- Flot -->
	<script src="<?php echo site_url(); ?>Javascript/Flot/jquery.flot.js"></script>
	<script src="<?php echo site_url(); ?>Javascript/Flot/jquery.flot.resize.js"></script>
	<script src="<?php echo site_url(); ?>Javascript/Flot/jquery.flot.pie.js"></script>
	<!-- DataTables -->
	<script src="<?php echo site_url(); ?>Javascript/DataTables/jquery.dataTables.min.js"></script>
	<!-- ColResizable -->
	<script src="<?php echo site_url(); ?>Javascript/ColResizable/colResizable-1.3.js"></script>
	<!-- jQuryUI -->
	<script src="<?php echo site_url(); ?>Javascript/jQueryUI/jquery-ui-1.8.21.min.js"></script>
	<!-- Uniform -->
	<script src="<?php echo site_url(); ?>Javascript/Uniform/jquery.uniform.js"></script>
	<!-- Tipsy -->
	<script src="<?php echo site_url(); ?>Javascript/Tipsy/jquery.tipsy.js"></script>
	<!-- Elastic -->
	<script src="<?php echo site_url(); ?>Javascript/Elastic/jquery.elastic.js"></script>
	<!-- ColorPicker -->
	<script src="<?php echo site_url(); ?>Javascript/ColorPicker/colorpicker.js"></script>
	<!-- SuperTextarea -->
	<script src="<?php echo site_url(); ?>Javascript/SuperTextarea/jquery.supertextarea.min.js"></script>
	<!-- UISpinner -->
	<script src="<?php echo site_url(); ?>Javascript/UISpinner/ui.spinner.js"></script>
	<!-- MaskedInput -->
	<script src="<?php echo site_url(); ?>Javascript/MaskedInput/jquery.maskedinput-1.3.js"></script>
	<!-- ClEditor -->
	<script src="<?php echo site_url(); ?>Javascript/ClEditor/jquery.cleditor.js"></script>
	<!-- Full Calendar -->
	<script src="<?php echo site_url(); ?>Javascript/FullCalendar/fullcalendar.js"></script>
	<!-- Color Box -->
	<script src="<?php echo site_url(); ?>Javascript/ColorBox/jquery.colorbox.js"></script>
	<!-- Kanrisha Script -->
	<script src="<?php echo site_url(); ?>Javascript/kanrisha.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>js/tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript">
		tinyMCE.init({
			// General options
			mode : "textareas",
			theme : "advanced",
			plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
	
			// Theme options
			theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
			theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
			theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
			theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : true,
		});
	</script>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
	
	<?php if($title!='Please Login' && $title!='Sign Up')
	{
	?>
	
	
	<!-- Top Panel -->
	<div class="top_panel">
		<div class="wrapper">
			<div class="user">
				<img src="<?php echo site_url(); ?>images/user_avatar.png" alt="user_avatar" class="user_avatar" />
				<span class="label"><?php echo $this->session->userdata('name'); ?></span>
				<!-- Top Tooltip -->
				<div class="top_tooltip">
					<div>
						<ul class="user_options">
							<li class="i_16_profile"><a href="<?php echo site_url();?>backend/user/edit_user/<?php echo $this->session->userdata('id');?>" title="Profile"></a></li>
							
							<li class="i_16_logout"><a href="<?php echo site_url('backend/logout'); ?>" title="Log-Out"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="top_links">
				<ul>
				
					<li class="i_22_settings">
						<a href="<?php echo site_url('backend/user');?>" title="Settings">
							<span class="label">Settings</span>
						</a>
					</li>
					<li class="i_22_upload">
						<a href="<?php echo site_url('backend/media/add_media');?>" title="Upload">
							<span class="label">Upload</span>
						</a>
						
					</li>
										<li class="i_22_pages">
						<a href="<?php echo site_url('backend/content'); ?>" title="Pages">
							<span class="label">Pages</span>
						</a>
						
					</li>
				</ul>
			</div>
		</div>
	</div>

	<header class="main_header">
		<div class="wrapper">
		
		<!--	<div class="logo">
				<a href=""><img src="<?php echo site_url(); ?>images/cms3.jpg" alt="logo" height="100" width="100"/>
					</a>
			</div>  -->
			
			<!-- <nav class="top_buttons">
				<ul>
					<li class="big_button">
						<div class="out_border">
							<div class="button_wrapper">
								<div class="in_border">
									<a href="#" title="Analytics" class="the_button">
										<span class="i_32_statistic"></span>
									</a>
								</div>
							</div>
						</div>
					</li>
					<li class="big_button">
						<div class="big_count">
							<span>1001</span>
						</div>
						<div class="out_border">
							<div class="button_wrapper">
								<div class="in_border">
									<a href="#" title="Support" class="the_button">
										<span class="i_32_support"></span>
									</a>
								</div>
							</div>
						</div>
					</li>
					<li class="big_button">
						<div class="out_border">
							<div class="button_wrapper">
								<div class="in_border">
									<a href="#" title="Delivery" class="the_button">
										<span class="i_32_delivery"></span>
									</a>
								</div>
							</div>
						</div>
					</li>
					
				</ul>
			</nav> -->
		</div>
	</header>
<?php } ?>