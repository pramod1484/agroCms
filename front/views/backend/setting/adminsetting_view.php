

	<p><?php if($any=='profile')
			{
					echo '' ;	
			}
			
			elseif($any=='user')
			{ ?>
			 <form method="post" action="" name="myform">
    		 <div class="g_12">
			
			 <div class="widget_contents noPadding">
			 <table class="tables datatable  noObOLine">
             <thead>
		 	 <tr>
				<th>Sr. No.</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Contact No.</th>
				<th>Address</th>
				<th>Web Site</th>
				<th>Email ID</th>
				<th>Username</th>
				<th>Previlage</th>
				<th>Action</th>
			 </tr>
			 </thead>
			 <tbody>
            
			<?php
			$srno=1;
			foreach($userprofile_records as $r)
			{
				echo   '<tr>
		    			<td>' .$srno++ . '</td>
		    			<td>'.$r->first_name.'</td>	
	 					<td>'.$r->last_name.'</td>
	 					<td>'.$r->contact_no.'</td>
  						<td>'.$r->address.'</td>
	 					<td>'.$r->website.'</td>
						<td>'.$r->emailid.'</td>
	  					<td>'.$r->username.'</td>
		    			<td>'.$r->previlage.'</td>
						<td>';
					
				echo anchor('backend/user/edit_user/'.$r->id,'<img src="'.site_url().'images/icons/16/i_16_wysiwyg.png" alt="Edit" />','title="Edit"');
	
			
        		echo '</td>';
  
				echo '</tr>';
			}
			?> 

			</tbody>
       		</table>
   			</div>
   			</div>
			<p class="g_3">
			<?php
			echo anchor('backend/user/add_user','    Add Users   ','class="simple_buttons1 g_91"');
			?>
			</p>
	   		</form>

			<?php 
				}elseif($any=='adduser'){
			?>	
		
			<form method="post" name="adduser" action="save_user">
			<div class="g_12">
		
			<div class="widget_contents noPadding">
			<p>
			<?php echo  validation_errors('<p class="error">'); ?></p>
			<div class="line_grid">
			<div class="g_3"><span class="label">First Name <span class="must">*</span></span></div>
			<div class="g_9">
			<input type="text" name="first_name" placeholder="Enter First Name" class="simple_field" required />
			</div>
			<div class="g_3"><span class="label">Last Name <span class="must">*</span></span></div>
			<div class="g_9">
			<input type="text" name="last_name" placeholder="Enter Last Name" class="simple_field" required />
			</div>
			<div class="g_3"><span class="label">Contact No. <span class="must">*</span></span></div>
			<div class="g_9">
			<input type="text" name="contact_no" placeholder="Enter Contact No." class="simple_field" required />
			</div>
			<div class="g_3"><span class="label">Address <span class="must">*</span></span></div>
			<div class="g_9">
			<input type="text" name="address" placeholder="Enter Address" class="simple_field" required />
			</div>
			<div class="g_3"><span class="label">Website <span class="must">*</span></span></div>
			<div class="g_9">
			<input type="text" name="website" placeholder="Enter Website" class="simple_field" required />
			</div>
			<div class="g_3"><span class="label">Email ID <span class="must">*</span></span></div>
			<div class="g_9">
			<input type="text" name="emailid" placeholder="Enter Email ID" class="simple_field" required />
			</div>
			<div class="g_3"><span class="label">Username <span class="must">*</span></span></div>
			<div class="g_9">
			<input type="text" name="username" placeholder="Enter Username" class="simple_field" required/>
			</div>
			<div class="g_3"><span class="label">Password <span class="must">*</span></span></div>
			<div class="g_9">
			<input type="password" name="password" placeholder="Enter Password" class="simple_field" required />
			</div>
			<div class="g_3"><span class="label">Previlage <span class="must">*</span></span></div>
			<div class="g_9">
	
			<select  class="simple_field" name="previlage">
    			<option>Admin</option>
    			<option>SubAdmin</option>
  			</select>
		
			
			</div>			
		    </div>
			</div>
	
			<p class="g_3">
			<input type="submit" value="Save" class="simple_buttons"/>
			</p>
			</div>
			</form>

	<?php 
	}elseif($any=='edituser')
	{ 
	?>	
	
	<form method="post" action="../update_user">
	<div class="g_12">
	<div class="widget_header">
	<h4 class="widget_header_title wwIcon i_16_forms">Edit User</h4>
	</div>
	<div class="widget_contents noPadding">
	<p>
					<?php echo  validation_errors('<p class="error">');
						  ?></p>
<div class="line_grid">

<input type="hidden" name="rid" id="rid" value="<?php echo $r->id;?>">
								<div class="g_3"><span class="label">First Name <span class="must">*</span></span></div>
								<div class="g_9">
								<input type="text"  name="first_name" value="<?php echo $r->first_name; ?>" class="simple_field" />
								</div>
								<div class="g_3"><span class="label">Last Name <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="last_name" value="<?php echo $r->last_name; ?>" class="simple_field" />
								</div>
								<div class="g_3"><span class="label">Contact No. <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="contact_no" value="<?php echo $r->contact_no; ?>" class="simple_field" />
								</div>
								<div class="g_3"><span class="label">Address <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="address" value="<?php echo $r->address; ?>" class="simple_field" />
								</div>
								<div class="g_3"><span class="label">Website <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="website" value="<?php echo $r->website; ?>" class="simple_field" />
								</div>
								<div class="g_3"><span class="label">Email ID <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="emailid" value="<?php echo $r->emailid; ?>" class="simple_field" />
								</div>
								<div class="g_3"><span class="label">Username <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="username" value="<?php echo $r->username; ?>" class="simple_field" readonly/>
								</div>
								
								<div class="g_3"><span class="label">Previlage <span class="must">*</span></span></div>
								<div class="g_9">
	
								<select  class="simple_field" name="previlage" value="<?php echo $r->previlage; ?>">
    <option>Admin</option>
    <option>SubAdmin</option>
  </select>
								</div>			

		
		    </div>
			
	</div>
		<input type="submit" value="save" />	
	</div>
</form>


<?php }elseif($any=='pattern')
	{ 	?>	

<form method="post" name="pattern" action="">

<div class="g_12">
</br>
<div id="name">
	Click On Pattern to Change the Background:
</div>
<div class="changePattern">
		<span id="pattern1"></span>
		<span id="pattern2"></span>
		<span id="pattern3"></span>
		<span id="pattern4"></span>
		<span id="pattern5"></span>
		<span id="pattern6"></span>
	</div>

</div>
</form>
	
<?php }elseif($any=='companyprofile')
{ ?>

<form method="post" action="" name="companyprofile">
    	<div class="g_12">
					<div class="widget_header">
					<h4 class="widget_header_title wwIcon i_16_resize">Company Profile</h4>
					</div>
					<div class="widget_contents noPadding">
						<table class="tables datatable  noObOLine">
          
           <thead>
								<tr>
									<th>Sr. No.</th>
									<th>Name</th>
									<th>Address</th>
									<th>Contact No.</th>
									<th>Email ID</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
            
	<?php
	$srno=1;
foreach($companyprofile_records as $r)
{
	echo    '<tr>
		    <td>' .$srno++ . '</td>
		    <td>'.$r->name.'</td>	
			<td>'.$r->address.'</td>
	 		<td>'.$r->contact_no.'</td>
  			<td>'.$r->email_id.'</td>
	 		<td>';?>
			 <?php 
		
		echo anchor('backend/companyprofile/edit_companyprofile/'.$r->id,'<img src="'.site_url().'images/icons/16/i_16_wysiwyg.png" alt="Edit" />','title="Edit"');
	
		echo '</td>'
         
		  ?>
							
<?php  
echo '</tr>';
}
?> 
</tbody>
       </table>
   </div>
   </div>
	
	   </form>
	  
	  
<?php 
	}else
	{ 	?>	
	<form method="post" action="../update_companyprofile">
<div class="g_12">
					<div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_forms">Edit Company Profile</h4>
					</div>
					<div class="widget_contents noPadding">
					<p>
					<?php echo  validation_errors('<p class="error">');?></p>
<div class="line_grid">

<input type="hidden" name="rid" id="rid" value="<?php echo $r->id;?>">
								<div class="g_3"><span class="label">Name <span class="must">*</span></span></div>
								<div class="g_9">
								<input type="text"  name="name" value="<?php echo $r->name; ?>" class="simple_field" />
								</div>
								
								<div class="g_3"><span class="label">Address <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="address" value="<?php echo $r->address; ?>" class="simple_field" />
								</div>
								
								<div class="g_3"><span class="label">Contact No. <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="contact_no" value="<?php echo $r->contact_no; ?>" class="simple_field" />
								</div>
								
								<div class="g_3"><span class="label">Email ID <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="email_id" value="<?php echo $r->email_id; ?>" class="simple_field" />
								</div>
								
									<div class="g_3"><span class="label">Twitter ID <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="twitter" value="<?php echo $r->twitter; ?>" class="simple_field" />
								</div>
								
									<div class="g_3"><span class="label">Facebook ID <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="facebook" value="<?php echo $r->facebook; ?>" class="simple_field" />
								</div>
								
									<div class="g_3"><span class="label">LinkedIn ID <span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="linkedin" value="<?php echo $r->linkedin; ?>" class="simple_field" />
								</div>
								
							 </div>
			
	</div>
		<input type="submit" value="save" />	
	</div>
</form>


<?php }
?>
  	
	
	
	 
	</body>
	</html>