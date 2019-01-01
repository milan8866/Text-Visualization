<?php
			error_reporting(E_ERROR | E_PARSE);
			$dir = "./AtlanticStormText/Documents";
			$output=array();
			if (is_dir($dir)) 
			{
				if ($dh = opendir($dir)) 
				{
					for($i=0; $i<=110 ; $i++)
					{
						$file = readdir($dh);
						$fileContent = file('./AtlanticStormText/Documents/'.$file); 
						$output[]=array("name"=>$file,"content"=>$fileContent);

					}	
					echo json_encode($output);
				}		
			}
?>