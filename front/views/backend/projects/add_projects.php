<div class="page-header position-relative">
						<h1>
							Add Project Form
							<small>
								<i class="icon-double-angle-right"></i>
								Insert the details here
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<form class="form-horizontal" action="<?php echo site_url();?>" method="post" enctype="multipart/form-data"/>
								<div class="control-group">

				
				<select class="simple_field" name="form-field-1" id="form-field-1" >
		
				<option value=""></option>
				</select>


									<div class="controls">
										<input type="text" name="pyear"  placeholder="2011" />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="form-field-1">Project Type</label>

									<div class="controls">
										<input type="text" name="ptype" id="form-field-1" placeholder="JAVA/J2EE IEEE" />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="form-field-1">Project Code</label>

									<div class="controls">
										<input type="text" name="pcode"  placeholder="JIE12011" />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="form-field-1">Project Domain</label>

									<div class="controls">
										<input type="text" name="pdomain"  placeholder="JAVA/J2EE IEEE" />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="form-field-1">Project Title</label>

									<div class="controls">
										<input type="text" name="ptitle"  placeholder="JAVA/J2EE IEEE" />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="form-field-1">Synopsis</label>

									<div class="controls">
										<input type="file"   name="psys"   />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="form-field-1">Base Paper</label>

									<div class="controls">
										<input type="file" name="pbase"  />
									</div>
								</div>&nbsp; &nbsp; &nbsp;

								<button class="btn btn-info" type="submit" >
										<i class="icon-ok bigger-110"></i>
										Save
									</button>&nbsp; &nbsp; &nbsp;
								<button class="btn" type="reset">
										<i class="icon-undo bigger-110"></i>
										Reset
									</button>
						      </form>
						</div>