<section>
	<h1>Pages</h1>
	<?php 
			echo anchor('backend/menu/edit_page/','Add Page','class="simple_buttons1 g_91"');  
	?>
	<table id="course" class="tables datatable  noObOLine">
		<thead>
			<tr>
				<td align="center">Title</td>
				<td align="center">Parent</td>
                                <td align="center">Template</td>
				<td align="center">Edit</td>
				<td align="center">Delete</td>
			</tr>
		</thead>
		<tbody>
			<?php if (count($pages)) {
				foreach ($pages as $page) {?>
					<tr>
					<td align="center"><?=anchor('backend/menu/edit_page/'.$page->id,$page->title);?></td>
					<td align="center"><?=$page->parent_slug;?></td>
                                        <td><?=$page->template;?></td>
					<td align="center"><?php echo anchor('backend/menu/edit_page/'.$page->id,'<img src="'.base_url().'images/icons/16/i_16_wysiwyg.png" alt="Edit" />','title="Edit"'); ?></td>
					<td align="center"><?php echo anchor('backend/menu/delete_page/'.$page->id,'<img src="'.base_url().'images/icons/16/i_16_close.png" alt="Delete" />','title="Delete"'); ?></td>		
				</tr>
				<?php }}
				else
				echo '<tr><td colspan=3>No any pages found</td></tr>';?>
		</tbody>
	</table>
</section>