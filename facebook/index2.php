<?php
date_default_timezone_set('Norway/ Oslo');

//requiring FB PHP SDK
require 'fb-sdk/src/facebook.php';

//initializing keys
$facebook = new Facebook(array(
	 'appId'  => '217048568440263',
    'secret' => '57a47eb4884ae8e7e5a5d64577d97f97',
	'cookie' => true, // enable optional cookie support
));

//query the events
//we will select name, start_time, end_time, location, description this time
//but there are other data that you can get on the event table (https://developers.facebook.com/docs/reference/fql/event/)
//as you've noticed, we have TWO select statement here
//since we can't just do "WHERE creator = your_fan_page_id".
//only eid is indexable in the event table, sow we have to retrieve
//list of events by eids
//and this was achieved by selecting all eid from
//event_member table where the uid is the id of your fanpage.
//*yes, you fanpage automatically becomes an event_member
//once it creates an event
$fql    =   "SELECT name, pic, eid, attending_count, start_time, end_time, location, description 
			FROM event WHERE eid IN ( SELECT eid FROM event_member WHERE uid = 134772223286449) 
			ORDER BY start_time desc limit 1";
			
$param  =   array(
'method'    => 'fql.query',
'query'     => $fql,
'callback'  => ''
);

$fqlResult   =   $facebook->api($param);


//looping through retrieved data
foreach( $fqlResult as $keys => $values ){
	//see here http://php.net/manual/en/function.date.php for the date format I used
	//The pattern string I used 'l, F d, Y g:i a'
	//will output something like this: July 30, 2015 6:30 pm

	//getting 'start' and 'end' date,
	//'l, F d, Y' pattern string will give us
	//something like: Thursday, July 30, 2015
	$start_date = date( 'l, d F, Y', $values['start_time'] );
	$end_date = date( 'l, F d, Y', $values['end_time'] );

	//getting 'start' and 'end' time
	//'g:i a' will give us something
	//like 6:30 pm
	$start_time = date( 'G:i', $values['start_time'] );
	$end_time = date( 'G:i', $values['end_time'] );

	//printing the data
	
$start_date = str_replace ( 'Monday', 'Mandag', $start_date ); //Bytter ut engelsk dag med norsk
$start_date = str_replace ( 'Tuesday', 'Tirsdag', $start_date ); //Bytter ut engelsk dag med norsk
$start_date = str_replace ( 'Wednesday', 'Onsdag', $start_date ); //Bytter ut engelsk dag med norsk
$start_date = str_replace ( 'Thursday', 'Torsdag', $start_date ); //Bytter ut engelsk dag med norsk
$start_date = str_replace ( 'Friday', 'Fredag', $start_date ); //Bytter ut engelsk dag med norsk
$start_date = str_replace ( 'Saturday', 'Lørdag', $start_date ); //Bytter ut engelsk dag med norsk
$start_date = str_replace ( 'Sunday', 'Søndag', $start_date ); //Bytter ut engelsk dag med norsk
$start_date = str_replace ( 'January', 'Januar', $start_date ); //Bytter ut engelsk m毥d med norsk
$start_date = str_replace ( 'February', 'Februar', $start_date ); //Bytter ut engelsk m毥d med norsk
$start_date = str_replace ( 'March', 'Mars', $start_date ); //Bytter ut engelsk m毥d med norsk
$start_date = str_replace ( 'April', 'April', $start_date ); //Bytter ut engelsk m毥d med norsk
$start_date = str_replace ( 'May', 'Mai', $start_date ); //Bytter ut engelsk m毥d med norsk
$start_date = str_replace ( 'June', 'Juni', $start_date ); //Bytter ut engelsk m毥d med norsk
$start_date = str_replace ( 'July', 'Juli', $start_date ); //Bytter ut engelsk m毥d med norsk
$start_date = str_replace ( 'August', 'August', $start_date ); //Bytter ut engelsk m毥d med norsk
$start_date = str_replace ( 'September', 'September', $start_date ); //Bytter ut engelsk m毥d med norsk
$start_date = str_replace ( 'October', 'Oktober', $start_date ); ///Bytter ut engelsk m毥d med norsk
$start_date = str_replace ( 'November', 'November', $start_date ); //Bytter ut engelsk m毥d med norsk
$start_date = str_replace ( 'December', 'Desember', $start_date ); //Bytter ut engelsk m毥d med norsk

	
}
/*
echo "<div class='event'>";
	echo "<div style='float: left; margin: 0 8px 0 0;'>";
		echo "<img src={$values['pic']} />";
	echo "</div>";
	echo "<div style='float: left;'>";
		echo "<div style='font-size: 26px'>{$values['name']}</div>";
		echo "<div style='font-size: 26px'>{$values['attending_count']}</div>";
		if( $start_date == $end_date ){
			//if $start_date and $end_date is the same
			//it means the event will happen on the same day
			//so we will have a format something like:
			//July 30, 2015 - 6:30 pm to 9:30 pm
			echo "<div>on {$start_date} - {$start_time} to {$end_time}</div>";
		}else{
			//else if $start_date and $end_date is NOT the equal
			//it means that the event will will be
			//extended to another day
			//so we will have a format something like:
			//July 30, 2013 9:00 pm to Wednesday, July 31, 2013 at 1:00 am
			echo "<div>on {$start_date} {$start_time} to {$end_date} at {$end_time}</div>";
		}
		echo "<div>Location: " . $values['location'] . "</div>";
		echo "<div>More Info: " . $values['description'] . "</div>";
	echo "</div>";
	echo "<div style='clear: both'></div>";
	echo "</div>";*/

	
	//Overskrift og info, det som vises p塦orsiden
	$beskrivelse = nl2br($values['description']);
	$spos = strpos($beskrivelse, '&#34');
	$beskrivelse = substr($beskrivelse, $spos+1, strlen($beskrivelse));
	$npos = strpost($beskrivelse, '"');
	$beskrivelse = substr($beskrivelse, $npos+1, strlen($beskrivelse));*/
	$pos = strpos($beskrivelse, '.');
    $ingress = substr($beskrivelse, 0, $pos+1);
	<b>{$values['name']}</b>
	echo "<i> {$start_date}, kl {$start_time}</i>";
	echo "<p>{$ingress}</p>"; 
	echo "<a data-toggle='collapse' href='#lesmer'>
	..les mer
	</a> ";
	echo "<div id='lesmer' class='collapse'>";
	echo "<br>";
	echo "<div style='float: left; margin: 0 8px 0 0;'>";
	echo "<img src={$values['pic']} class='img-rounded'/>";
	echo "</div>";
	echo "<p> {$beskrivelse} </p>";
	echo "<a href='http://www.facebook.com/events/{$values['eid']}' class='sb small text min facebook' target='_blank'>Delta på foredraget</a>";
	echo "</div>";

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js">
</script>
<script type='text/javascript'>
//just to add some hover effects
$(document).ready(function(){

$('.event').hover(
	function () {
		$(this).css('background-color', '#CFF');
	}, 
	function () {
		$(this).css('background-color', '#E3E3E3');
	}
);

});
</script>