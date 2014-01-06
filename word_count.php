<?php
word_count("test.txt");
function word_count($file)
{
//$file="myfile.txt";
$frequency=array();
$fileData=file_get_contents($file);
$words = explode(" ", $fileData);
for($i=0;$i<=count($words);$i++)
{
	if(!($words[$i]==''))
	{
	$temp=$words[$i];
	$count=substr_count($fileData,$temp);
	$frequency[$temp]=$count;
	}
	
}
foreach($frequency as $x=>$x_value)
  {
  echo  "frequency of '".$x . "' is " . $x_value;
  echo "<br>";
  }
}

  
?>