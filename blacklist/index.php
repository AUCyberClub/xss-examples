<div id="content">
<ul>
<?php
include("baglan.php");
$q = mysql_query('SELECT id, text from item2 order by id desc');
    while($row = mysql_fetch_array($q)) {
        echo "<a href='item.php?id=".$row[0]."'><li>".$row[1]."</li></a>";
    }
?>
</ul>
	<hr>
	<a href="new.php">yeni yapilacak ekle!</a>
	</div>
