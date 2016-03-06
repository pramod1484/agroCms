
		<div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_forms"> <?php echo empty($page->id) ? 'Add New page' : 'Edit Page '.$page->title;?></h4>
		</div><br/>
	<?=validation_errors();?>
	<?=form_open();?>
	<table class="table">
		<tr>
			<td class="label" style="margin-left:10px">Parent</td>
			<td class="field" style="margin-left:10px"><?=form_dropdown('parent_id',$pages_no_parent,$this->input->post('parent_id') ? $this->input->post('parent_id') : $page->parent_id); ?></td>
		</tr>
                <tr>
			<td class="label" style="margin-left:10px">Template</td>
			<td class="field" style="margin-left:10px"><?=form_dropdown('template',array('page'=>'Page','news_archive'=>'News_Archive','homepage'=>'HomePage'),$this->input->post('template') ? $this->input->post('template') : $page->template); ?></td>
		</tr>
		<tr>
			<td class="label" style="margin-left:10px">Title</td>
			<td class="field" style="margin-left:10px "><?=form_input('title',set_value('title',$page->title)); ?></td>
		</tr>
		<tr>
			<td class="label" style="margin-left:10px">Slug</td>
			<td class="field" style="margin-left:10px"><?=form_input('slug',set_value('slug',$page->slug)); ?></td>
		</tr>
		<tr>
			<td class="label" style="margin-left:10px">Body</td>
			<td class="field" style="margin-left:10px">
									<div class="g_12">
								<textarea name="content" class="simple_field wysiwyg"><?php echo $page->body;?></textarea>
								<div class="field_notice">What You See Is What You Get ;)</div>
							</div>

			</td>
		</tr>
		<tr>
			<td class="label" style="margin-left:10px"></td>
			<td><?=form_submit('submit','Save','class="btn btn-primary"'); ?></td>
		</tr>
	</table>
	<?=form_close();?>
