<?php
$mylist = array(
     array('artist' => 'Fleetwood Mac', 'song_name' => 'Soma'),
     array('artist' => 'The Decemberists', 'song_name' => 'The Island'),
     array('artist' => 'The Smashing Pumpkins', 'song_name' => 'Second-hand News')

);
sorting($mylist,'artist',SORT_ASC);
function sorting($array,$criteria,$order)
{
# get a list of sort columns and their data to pass to array_multisort
$sort = array();
foreach($array as $k=>$v) 
{
    $sort[$criteria][$k] = $v[$criteria];
    
}
# sort by event_type desc and then title asc

array_multisort($sort[$criteria],$order,$array);
var_dump($array);	


}


?>