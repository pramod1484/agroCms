<div id="content_wp">
    <div class="wrap">

<label style="font-size:18px; color:#082E57;">Select Search Criteria</label>&nbsp;&nbsp;
    
    <select name="search_dd" id="search_dd"  style="width:250px;font-size:16px; ">
        <option value="title">Title Vise Search</option> 
        <option value="project_type">Technology(Type) Vise Search</option>    
    </select>
&nbsp;&nbsp;

<input type="text" name="search" id="search" value="" placeholder=" Enter Search Value" style="width:250px;font-size:16px;">
<br><br><div id=result></div>

<!--	<table id="course" class="tables datatable  noObOLine" 
          
           <thead>
			<tr>
				<th>Sr. No</th>
				<th>Project Title</th>
				<th>Project Code</th>
				<th>Project Type</th>
				<th>Domain</th>
				<th>Project Year</th>
				
			</tr>
		</thead>

		<tbody>
			<?php 
			$srno=1;

			foreach($records as $r)
			{
			echo '<tr>
				<td>'.$srno++.'</td>
				<td>'.$r->title.'</td>
				<td>'.$r->project_code.'</td>
				<td>'.$r->project_type.'</td>
				<td>'.$r->domain.'</td>
				<td>'.$r->year.'</td>
			
				
		</tr>';
			}?>
		</tbody>

	</table>

-->

</div>
</div>

<script>
$('#search').keyup(function()
{
var str=$('#search').val();
var field=$('#search_dd').val();

	$.ajax(
	{
		type:"POST",
		url:"<?= site_url('site/get_search_result') ?> ",
		data:{ req:str, field:field },
		beforeSend:function()
		{
				$('#result').html('Loading....');
				$('#course').hide();	
		},
		success:function(data)
		{
			$('#result').html(data);
		}
	})
})
</script>