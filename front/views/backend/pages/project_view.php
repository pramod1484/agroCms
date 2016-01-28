    <?php 
        echo '<p class="g_6">';
            echo anchor('backend/projects/add_project','Add Project','class="simple_buttons1 g_91"');
       echo '&nbsp &nbsp';
            echo anchor('backend/projects/domain','Add Domain or Type','class="simple_buttons1 g_91"');
'</p>';

    ?>  
<div class="g_12 separator"><span></span></div>

<table class="tables datatable  noObOLine">
          
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
											<th>Action</th>
										       
								</tr>
							</thead>
							<tbody>
                                                            <?php if($project_details){
                                                                foreach($project_details  as $project)
                                                                {  ?>
                                                            <tr>
                                                                <td><label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
                                                                </td>
                                                                <?php
                                                                     echo '<td>'.$project->project_code.'</td>';
                                                                     echo '<td>'.$project->project_type.'</td>';
                                                                     echo '<td>'.$project->title.'</td>';
                                                                     echo '<td>'.$project->domain.'</td>';
                                                                     echo '<td>'.$project->year.'</td>';
                     
        echo '<td>'.anchor('backend/projects/edit/'.$project->project_id,'<img src="'.site_url().'images/icons/16/i_16_wysiwyg.png" alt="Edit" />','title="Edit"').'&nbsp&nbsp';
        echo anchor('backend/projects/delete/'.$project->project_id,'<img src="'.site_url().'images/icons/16/i_16_close.png" alt="Delete" />','title="Delete"');
          echo '</td>';
    
                                                                ?>
                                                            </tr>
                                                                                                            </tr>
                                                            <?php } } ?>
                                                            
                                                        </tbody>
                                                       
       </table>
     
   </div>

  
    </div>