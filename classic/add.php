<?php
include("baglan.php");
if($_POST){
	$yapilacak = $_POST["yapilacak"];
	$descr = $_POST["descr"];
	mysql_query("INSERT INTO `item` (`id`, `text`, `descr`) VALUES (NULL, '".$yapilacak."', '".$descr."');");
}
?>
<b>Yapilacak eklendi!</b>
<hr><br>

<a href="index.php">Tüm listeyi göster!</a>