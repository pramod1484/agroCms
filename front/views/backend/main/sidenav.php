<?php if($title!='Please Login' &&  $title!='Sign Up')
{
	?>
	<div class="wrapper small_menu">
		<ul class="menu_small_buttons">
			
			<li><a title="Pages" class="<?php  echo  $actpa; ?>" href="<?php echo site_url('backend/content'); ?>"></a></li>
			<li><a title="Blocks" class="<?php  echo  $actbl; ?>" href="<?php echo site_url('backend/blocks'); ?>"></a></li>
			<li><a title="Menus" class="<?php  echo  $actmenu; ?>" href="<?php echo site_url('backend/menu'); ?>"></a></li>
			<li><a title="Settings" class="<?php  echo  $actset; ?>" href="<?php echo site_url('backend/setting'); ?>"></a></li>
			
		</ul>
	</div>

	<div class="wrapper contents_wrapper">
		
		<aside class="sidebar">
			<ul class="tab_nav">
				
				
				
			
				<li class="<?php echo  $actpa; ?>">
					<a href="<?php echo site_url('backend/content'); ?>" title="Pages">
						<span class="tab_label">Pages</span>
						<span class="tab_info">Edit Pages</span>
					</a>
				</li>
				<li class="<?php echo  $actbl; ?>">
					<a href="<?php echo site_url('backend/blocks'); ?>" title="Blocks">
						<span class="tab_label">Blocks</span>
						<span class="tab_info">Blocks</span>
					</a>
				</li>
				<li class="<?php echo  $actmenu; ?>">
					<a href="<?php echo site_url('backend/menu'); ?>" title="Menus">
						<span class="tab_label">Menus</span>
						<span class="tab_info">Menus</span>
					</a>
				</li>
				
				<li class="<?php echo  $actset; ?>">
					<a href="<?php echo site_url('backend/user'); ?>" title="Settings">
						<span class="tab_label">Settings</span>
						<span class="tab_info">Settings</span>
					
					</a>
				</li>
			
				
			</ul>
		</aside>

		<div class="contents">
			<div class="grid_wrapper">

				<div class="g_6 contents_header">
					<h3 class="i_16_dashboard tab_label"><?php echo $title; ?></h3>
					<div><span class="label"><?php echo $lable ?></span></div>
				</div>
				
						<div class="g_12 separator"><span></span></div>
						
						
									<?php }  ?>