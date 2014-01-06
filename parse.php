<?php
//set_time_limit(5000);
$file="myfile.txt";
$fileData=file_get_contents($file);
//echo $fileData;
$details=array();
$words=explode(" ", $fileData);
$start=0;
	for($i=0;$i<count($words);$i++)
	{	
		$count=0;
		//echo $words[$i]."<br>";
		if(preg_match("/^\[/",$words[$i]))
		{   

			$details[$words[$i]]=array();



			while($count<=3)
				{	
					$index=1;
					$details[$words[$i]]=array($words[$i+$index]=>$words[$i+$index+1]);
					$index=$index+2;
					$count=$count+1;
										
					
				}
				
				

			
		}

		
	
	}
	var_dump($details);




?>
