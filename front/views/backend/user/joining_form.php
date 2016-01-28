
<form name="signupform"  style="margin-left: 20%" action="<?php echo site_url(); ?>login/sign" method="POST"">
<div class="contact_form">
<div class="g_9">
		<div align="center" class="widget_header">
		<h2 class="widget_header_title valid">Joining Form</h2>
		</div>
		<div class="widget_contents noPadding">
						
		<?php
		echo validation_errors();
		?>					
		<div class="g_3"><span class="label">Full Name <span class="must">*</span></span></div>
		<div class="g_9">
		<input type="text" name="fullname" id="fullname" placeholder="Enter Full Name" class="simple_field" required />
		</div>
			
		<div class="g_3"><span class="label">Desired User Name <span class="must">*</span></span></div>
		<div class="g_9">
		<input type="text" name="uname" id=uname" placeholder="Enter Desired Username Name" class="simple_field" required />
		</div>
					
		<div class="g_3"><span class="label">Password <span class="must">*</span></span></div>
		<div class="g_9">
		<input class="simple_field" name="pass" id="pass" placeholder="Enter Your Password" type="password" required />
		<div class="field_notice">a-z-A-Z-0-9</div>
		</div>
		
		<div class="g_3"><span class="label">Re-Enter Password <span class="must">*</span></span></div>
		<div class="g_9">
		<input class="simple_field" name="passc" id="passc" placeholder="Confirm Your Password" type="password" required />
		<div class="field_notice">a-z-A-Z-0-9</div>
		</div>
		
		<div class="g_3"><span class="label">Gender <span class="must">*</span></span></div>
		<div class="g_9">
		<input class="simple_form" type="radio" name="sex" value="male"  required/><span class="label ilC">Male</span>
		<input class="simple_form" type="radio" name="sex" value="female" required /><span class="label ilC">Female</span>
		</div>
					
		<div class="g_3"><span class="label">Birthday Date <span class="must">*</span></span></div>
		<div class="g_9">
		<input name="bdate" id="bdate" placeholder="Select or Enter Birth date" class="simple_field pick_date" type="date" required />
		</div>
								
		<div class="g_3"><span class="label">Email ID<span class="must">*</span></span></div>
		<div class="g_9">
		<input class="simple_field" type="email"  name="email" id="email"  placeholder="Enter Your Emailid" required />								</div>
			
		<div class="g_3"><span class="label">Address <span class="must">*</span></span></div>
		<div class="g_9">
		<input class="simple_field" placeholder="Enter Address Without Pin no" name="addr" id="addr" type="text" title="The Country is Optional" required />
		</div>
		
		<div class="g_3"><span class="label">Pin Code <span class="must">*</span></span></div>
		<div class="g_9">
		<input class="simple_field" placeholder="Enter Area Code" name="pin" id="pin" type="text" title="The Country is Optional" required />
		</div>
		
		<div class="g_3"><span class="label">City <span class="must">*</span></span></div>
		<div class="g_9">
		<input class="simple_field" placeholder="Enter City Name" name="city" id="city" type="text" title="The Country is Optional" required />
		</div>
		
		<div class="g_3"><span class="label">State </span></div>
		<div class="g_9">
		<input class="simple_field" placeholder="Enter State" name="state" id="state" type="text" title="The Country is Optional"  />
		</div>
		
		<div class="g_3"><span class="label">Country<span class="must">*</span></span></div>
		<div class="g_9">
		<input class="simple_field" value="India" placeholder="Enter Country" name="country" id="country" type="text" title="The Country is Optional" required />
		</div>
		
		<div class="g_3"><span class="label">Mobile <span class="must">*</span></span></div>
		<div class="g_9">
		<input class="simple_field" placeholder="Enter Mobile Number without country code" type="tel" name="mob" id="mob" required />
		</div>
							
		<div class="g_3"><span class="label">Phone </span></div>
		<div class="g_9">
		<input class="simple_field" name="phone" id="phone" placeholder="Enter Phone Number" type="tel" />
		</div>
		
		<div class="g_3"><span class="label">Pan No</span></div>
		<div class="g_9">
		<input type="text" name="pan"  id="pan" placeholder="Enter Pan No" class="simple_field"  />
		</div>
							
		<div class="g_3"><span class="label">Select Package<span class="must">*</span></span></div>
		<div class="g_9">
		<select class="simple_field" name="pack" id="pack" >
				<option value="500">Joining Amt 500</option>
				<option value="1000">Joining AMt 1000</option>
		</select>
		</div>
						
								
							<div class="g_12 separator"><span></span></div>
							<div align="center" class="widget_header g_12">
						<h2 class="widget_header_title valid">Enter Nominee Details</h2>
					</div>
					<div class="widget_contents noPadding">
								<div class="g_3"><span class="label">Nominee Name<span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="nominee" id="nominee" placeholder="Enter Nominee Name" class="simple_field" required />
								</div>
								<div class="g_3"><span class="label">Relation<span class="must">*</span></span></div>
								<div class="g_9">
									<input type="text" name="rel" id="rel" placeholder="Enter Relation with You" class="simple_field" required />
								</div>
								
								<div class="g_3"><span class="label">Nominee BirthDate <span class="must">*</span></span></div>
								<div class="g_9">
									<input name="nobdate" id="nobdate" placeholder="Select or Enter Birth date of Nominee" class="simple_field pick_date" type="text" required />
								</div>
				   </div>
				 
				 <div class="g_3"><span class="label">Referer id</span></div>
									<div class="g_9">
									
									<input class="simple_field" name="parent" id="parent" placeholder="Confirm Your Password" type="text" required />
									<div class="field_notice">its only for demostration</div>
								</div>		
												
								<div class="g_3"><span class="label">Submit</span></div>
								<div class="g_9">
									<input type="submit" value="Join Me" class="submitIt simple_buttons" />
								</div>
						</div>
					</div>
				</div>
		</form>
				