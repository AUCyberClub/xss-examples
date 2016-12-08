<?php
include("baglan.php");
if($_POST){

	function escape($param){
		$param = str_replace("<script>", "", $param);
		$param = str_replace("<SCRIPT>", "", $param);
		$param = str_replace("</script>", "", $param);
		$param = str_replace("</SCRIPT>", "", $param);
		return $param;
	}

	$yapilacak = escape($_POST["yapilacak"]);
	$descr = escape($_POST["descr"]);
	mysql_query("INSERT INTO `item2` (`id`, `text`, `descr`) VALUES (NULL, '".$yapilacak."', '".$descr."');");
}
?>
<b>Yapilacak eklendi!</b>
<hr><br>

<a href="index.php">Tüm listeyi göster!</a>
