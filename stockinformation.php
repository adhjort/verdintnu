<?php
include_once('yahoostock.php');
INCLUDE 'rot/connect/base.php';

$objYahooStock = new YahooStock;
 
/**
    Add format/parameters to be fetched
     
    s = Symbol
    n = Name
    l1 = Last Trade (Price Only)
    d1 = Last Trade Date
    t1 = Last Trade Time
    c = Change and Percent Change
    v = Volume
 */
$objYahooStock->addFormat("sncl1");
 

$sth = mysql_query("SELECT * FROM portefolje WHERE ticker != ''");
	while($r = mysql_fetch_assoc($sth)) {
	$stock = "'".$r['ticker'].".ol'";
	$objYahooStock->addStock($stock);
	$kjopskurs[$r['ticker']] = $r['kjopskurs'];
}
foreach( $objYahooStock->getQuotes() as $code => $stock)
{
	$quote = trim($stock[0], '"');
	$quote = substr($quote, 0, -3); 
	$name = trim($stock[1], '"');
	$dagenskurs = floatval(trim($stock[3], '"'));
	$change = 100*(($dagenskurs-$kjopskurs[$quote])/$kjopskurs[$quote]);
	echo "<tr class='";
	if ($kjopskurs[$quote]<=$dagenskurs){echo "success";} else{echo "error";}
	echo "'><td>";
	echo $name;
	echo "</td>	<td>";
	echo $kjopskurs[$quote];
	echo "</td> <td>";
	echo $dagenskurs;
	echo "</td><td>";
	echo number_format((float)$change, 1, '.', '');
	echo "%";
	echo "</td></tr>";
	
	}
?>