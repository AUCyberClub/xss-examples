<div id="content">
<ul>
<?php
include("baglan.php");
$id = $_GET["id"];
if(!$id){
echo "bir ID verisi verin!";
}
$q = mysql_query("SELECT text, descr from item2 where id='$id' order by id desc");
    while($row = mysql_fetch_array($q)) {
        echo "<li><b>".$row[0]."</b></li>";
        echo "<p>".$row[1]."</p>";
    }
?>
</ul>
	<hr>

	<a href="index.php">tüm yapılacakları göster!</a>
	</div>
