<?php
$word=array("A"=>"35","B"=>"37","J"=>"43","a"=>"43","e"=>"43","c"=>"43");
chunk($word);
function chunk($input)
{
	$size=0;
	foreach($input as $x=>$x_value)
  {

  if(ctype_lower($x))
  	{
		break;
	}
	else
		$size=$size+1;
  }

  print_r(array_chunk($input,$size,true));	
}

?>
