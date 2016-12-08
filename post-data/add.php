<?php
if($_POST){
	$color = $_POST["color"];
	echo "<div style='background:$color; height:300px; width:300px;'></div>";
}
?>
<hr><br>

<a href="index.php">Return the color picker!</a>
