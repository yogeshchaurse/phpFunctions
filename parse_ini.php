<?php
set_time_limit(5000);
$file="myfile.txt";
$fileData=file_get_contents($file);
//echo $fileData;
$details=array();
$words=explode(" ", $fileData);
$i=0;
$start=0;
while($i<count($words))
{
	if(preg_match("/^\[/",$words[$i]))
	{
		
		$start=$i+1;
		while((preg_match("/^\]/",$words[$start])))
		{
			$details[$words[$i]]=array($words[$start]=>$words[$start+1]);
			$start=$start+2;
			echo $details;
		}
	}

	$i=$start;
}




?>
