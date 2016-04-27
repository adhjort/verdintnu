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
$objYahooStock->addFormat("snl1d1t1cv");
 
/**
    Add company stock code to be fetched
     
    msft = Microsoft
    amzn = Amazon
    yhoo = Yahoo
    goog = Google
    aapl = Apple   
 */
$sth = mysql_query("SELECT * FROM portefolje WHERE ticker != ''");
	while($r = mysql_fetch_assoc($sth)) {
	$stock = "'".$r['ticker'].".ol'";
	$objYahooStock->addStock($stock);
}
 
//$verdi = 0;
foreach( $objYahooStock->getQuotes() as $code => $stock)
{
	//HENTER UT INFORMASJON FRA EN STRENG
	
	//Tickeren
	$quote = trim($stock[0], '"');
	$quote = substr($quote, 0, -3);  
	//Verdien til aksjen
	$value = $stock[2];
	//Dato for siste handel
	$date = trim($stock[3], '"');
	//Putter inn i "porteføljeutvikling i databasen - for å tracke utviklingen til aksjen
	$sql="INSERT INTO portefoljeutvikling (quote, value, date) VALUES ('$quote', '$value', '$date')";
	$result=mysql_query($sql);
	
	
	/*Henter volumet til aksjene og regner ut dagens totalverdi av aksjen, adderer opp dette med verdien til alle aksjene*/
	$sql2 = "SELECT * FROM portefolje WHERE ticker = '$quote' ORDER BY s_Id desc LIMIT 1";
	$result2=mysql_query($sql2);
	$res = mysql_fetch_array($result2);  
	$verdi = $verdi + $res['antall']*$value;
}
	/*Henter ut antall kontanter fra porteføljen*/
	$sql3 = "SELECT * FROM portefolje WHERE navn = 'Kontanter'";
	$result3=mysql_query($sql3);
	$res3 = mysql_fetch_array($result3);
	//Adderer dette til totalverdien
	$verdi = $verdi + $res3['antall'];
	
	/*Setter inn pengeverdien i dag ($dato) inn i oversikten - portefoljeutvikling*/ 
	$dato = date("Y-m-d");
	$sql4 = "INSERT INTO portefoljeverdi (value, date) VALUES ('$verdi', '$dato')";
	$result4=mysql_query($sql4);
	
	
	
/*	TESTKODE FOR Å SE OM ALT BLIR OUTPUTTET RIKTIG

    ?>
    Code: <?php echo $stock[0]; ?> <br />
    Name: <?php echo $stock[1]; ?> <br />
    Last Trade Price: <?php echo $stock[2]; ?> <br />
    Last Trade Date: <?php echo $stock[3]; ?> <br />
    Last Trade Time: <?php echo $stock[4]; ?> <br />
    Change and Percent Change: <?php echo $stock[5]; ?> <br />
    Volume: <?php echo $stock[6]; ?> <br /><br />
    <?php
	*/



