
<div class="g_6">
<table class="tables datatable  noObOLine">

    <thead>
        <tr>
          
            <th>Domain Id</th>
            <th>Domain Name</th>
           
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
        if ($domains) {
            foreach ($domains as $domain) {
                ?>
                <tr>
                   
                    <?php
                    echo '<td>' . $domain->domain_id . '</td>';
                    echo '<td>' . $domain->domain_name . '</td>';
                  

                   // echo '<td>' . anchor('backend/projects/edit/' . $project->project_id, '<img src="' . site_url() . 'images/icons/16/i_16_wysiwyg.png" alt="Edit" />', 'title="Edit"') . '&nbsp&nbsp';
                    echo '<td>'.anchor('backend/projects/delete_domain/' . $domain->domain_id, '<img src="' . site_url() . 'images/icons/16/i_16_close.png" alt="Delete" />', 'title="Delete"');
                    echo '</td>';
                    ?>
                </tr>
              
            <?php }
        } ?>

    </tbody>

</table>
<?= form_open(base_url('backend/projects/add_domain')) ?>
    <div class="g_9">
    <?= form_input('domain','','placeholder="Enter Domain Name" class="simple_field"') ?>
    <input type="submit" style="display: none">
    <?=     form_close() ?>
    </div>
</div>


<div class="g_6">
<table class="tables datatable  noObOLine">

    <thead>
        <tr>
          
            <th>Domain Id</th>
            <th>Domain Name</th>
           
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
        if ($types) {
            foreach ($types as $type) {
                ?>
                <tr>
                   
                    <?php
                    echo '<td>' . $type->id . '</td>';
                    echo '<td>' . $type->name . '</td>';
                  

                   // echo '<td>' . anchor('backend/projects/edit/' . $project->project_id, '<img src="' . site_url() . 'images/icons/16/i_16_wysiwyg.png" alt="Edit" />', 'title="Edit"') . '&nbsp&nbsp';
                    echo '<td>'.anchor('backend/projects/delete_type/' . $type->id, '<img src="' . site_url() . 'images/icons/16/i_16_close.png" alt="Delete" />', 'title="Delete"');
                    echo '</td>';
                    ?>
            
                </tr>
            <?php }
        } ?>

    </tbody>

</table>
    
<?= form_open(base_url('backend/projects/add_type')) ?>
    <div class="g_9">
    <?= form_input('type','','placeholder="Enter Project Type Name" class="simple_field"') ?>
    <input type="submit" style="display: none">
        <?=     form_close() ?>
    </div>
</div>
</div>

<?php
echo '<p class="g_9">';
echo anchor('backend/projects/index', 'view Projects', 'class="simple_buttons1 g_91"');
echo '&nbsp &nbsp';
//echo anchor('backend/projects/add_domain', 'Add Domain or Type', 'class="simple_buttons1 g_91"');
'</p>';
?>  