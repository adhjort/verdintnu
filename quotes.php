<?php 

INCLUDE 'rot/connect/base.php';
$id = rand(8,12);
$sql = "SELECT * FROM quotes where Q_id = $id";
$sqlresult = mysql_query($sql);
$res = mysql_fetch_array($sqlresult);
?>
<h3 class="muted"><em>“<?php echo $res['quote']?>”</em></h3>
<strong><p class="text-right">- <?php echo $res['name']?></p></strong>
