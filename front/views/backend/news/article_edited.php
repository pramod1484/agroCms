<?php
$sql = "UPDATE articles SET category='$cat',title='$tit',contents='$cont',image='$img' WHERE id='$id'";

	$this->db->query($sql);





echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<P>News Updated Successfully</p>";
echo "<br/>";


?>
