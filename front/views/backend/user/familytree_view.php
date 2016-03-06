<!--
We will create a family tree using just CSS(3)
The markup will be simple nested lists
-->
<div class="tree">
<ul>

<?php	
$c=0;
echo'<li><a href="" rel="htmltooltip" class="active"></a>';
echo"<ul>";
for($i=0;$i<5;$i++)
{
	if($i<count($treeuser)){
			echo '<li><a href="../tree_in/'.$treeuser[$i]->id.'" rel="htmltooltip" class="active"></a>';
					
			echo"<ul>";
			for($j=0;$j<5;$j++)
			{
				if($c==count($treeuser))
				break;
				switch($c){
					case  0:	if($j<count($treeuser0)){
					echo '<li><a href="../tree_in/'.$treeuser0[$j]->id.'" rel="htmltooltip" class="active"></a></li>';
					
				continue;
				}
				echo '<li><a class="inactive"></a>';
						break;
						case  1:	if($j<count($treeuser1)){
					echo '<li><a href="../tree_in/'.$treeuser1[$j]->id.'" rel="htmltooltip" class="active"></a></li>';
				continue;
				}
				echo '<li><a class="inactive"></a>';
						break;
						case  2:	if($j<count($treeuser2)){
					echo '<li><a href="../tree_in/'.$treeuser2[$j]->id.'" rel="htmltooltip" class="active"></a></li>';
				continue;
				}
				echo '<li><a class="inactive"></a>';
						break;
						case  3:	if($j<count($treeuser3)){
					echo '<li><a href="../tree_in/'.$treeuser3[$j]->id.'" rel="htmltooltip" class="active"></a></li>';
				continue;
				}
				echo '<li><a class="inactive"></a>';
						break;
					
					case 4:	if($j<count($treeuser4)){
					echo '<li><a href="../tree_in/'.$treeuser4[$j]->id.'" rel="htmltooltip" class="active"></a></li>';
				continue;
				}
				echo '<li><a class="inactive"></a>';
						break;
				}
	

			}
			$c++;
			echo"</li>";
			echo"</ul>";
			
	}else{
				echo '<li><a class="inactive"></a><ul>';
			for($j=0;$j<5;$j++)
			{
				
					echo '<li><a class="inactive"></a>';
					continue;
					
			}
		
			echo '</ul></li>';continue;
	}

}

echo"</ul></li>";


?>
</ul>
</div>


<div class="htmltooltip">Profile</br> Name :<?php  echo $info->full_name;?></br> Address : <?php echo $info->address;?> </br>Mobile:<?php echo $info->mob_no;?></div>
<div class="htmltooltip"><?php
	print_r($info1);

?></div>