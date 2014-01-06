
<?php
$dir    = '/var/www/functions';
function list_Recursively($path)
{    
    if($handler = opendir($path))
  {  

    while (false!==($filename = readdir($handler))) 
    { 

        if (is_dir($path. "/" . $filename) && $filename != "." && $filename != "..")
        {
            echo "Directory is ".$filename."<br>"; 
            list_Recursively($path. "/" . $filename);
        }
        else
        {
            if($filename != "." && $filename != "..")
            {
                echo "subdirectory is ".$filename."<br>";  
            }

        }

    }
    closedir($handler);
  }
}

list_Recursively($dir);

?>
