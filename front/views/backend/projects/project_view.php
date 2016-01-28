
							<div class="hr hr-18 dotted hr-double"></div>

								<h3 class="header smaller lighter blue">Project Details</h3>
								<div class="table-header">
									Results for "Project Upload"
								</div>

								<table id="sample-table-2" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</th>
											<th>Project Code</th>
											<th>Project Type</th>
											<th>Title</th>
											<th>Domain</th>
											<th>Year</th>
											<th>Synopsis</th>
										        <th>Base Paper</th>
                                                                           	</tr>
									</thead>

									<tbody>
										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td><td>
											<a href="#"><?php echo $row{'Code'};?></a>
											</td>
											<td><?php echo $row{'Type'};?></td>
											<td><?php echo $row{'Title'};?></td>											<td><?php echo $row{'Domain'};?></td>
											<td><?php echo $row{'Type'};?></td>
											<td><a href="<?php echo $row{'Synopsis'};?>">Synopsis</a></td>
											<td><a href="<?php echo $row{'Basepaper'};?>">Base Paper</a></td>
										</tr>

									</tbody>
								</table>
							

							
							