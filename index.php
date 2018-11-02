<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Text Visualization</title>
	<link rel="stylesheet" href="list.css" >
	

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
        var inputValue = $(this).attr("value");
        $("." + inputValue).toggle();
    });
});
</script><!--------------------------->
    
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>    
</head>

<body>
		<div class="header">  
			<h2 class="title">Text-Visualization</h2>
		</div>
        
        <div class="search_bar">
            <input id="myInput" class="ml-input-filter" type="text" placeholder=" Search" name="Search" >
		</div>
		<div class="container nput-container">
            <ul id="myList" class="ml-ul">
			<?php
			error_reporting(E_ERROR | E_PARSE);
			$dir = "./AtlanticStormText/Documents";
			$myArray = array();

			if (is_dir($dir)) 
			{
				if ($dh = opendir($dir)) 
				{
					
					$abc = array();
					$two = array();
					for($i=0; $i<=54 ; $i++)
					{
						$file = readdir($dh);
						$record = file_get_contents("./AtlanticStormText/Documents".$file);
						$abc[] = $file;
						$two[] = $record;
					}	
					$myArray = array_combine($abc, $two);    
				}		
				$d = " ' ";
				$sliced = array_slice($myArray, 2, count($myArray)-2, true);
				foreach($sliced as $key => $value)
				{
					
				echo '<li class="ml-li list_list_item"><label><input type="checkbox" name="colorCheckbox" value='.$key.' >' .$key. '</label></li>';
            
				}
			}
			?>
            </ul>
		</div>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
         <script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );
  </script><!--------script for drag and drop text---------->
        
        <div id="sortable" class="container work">
        	<h3>Workspace</h3>
			
			<?php
			for($i=0; $i<=116 ; $i++)
					{
						$file = readdir($dh);
						$record = file_get_contents("./AtlanticStormText/Documents".$file);
						$abc[] = $file;
						$two[] = $record;
					}	
			
			
			?>
			
            <div class="CIA_01 box">    
			
				<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_01'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
			
			</div>
    <div class="CIA_02 box">
	
		<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_02'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
			
	</div>
    <div class="CIA_03 box">
	
	

    	<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_03'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
			
	</div>
    <div class="CIA_04 box">
		<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_04'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
			
	
	</div>
    <div class="CIA_05 box">
		<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_05'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
			
	
	</div>
    <div class="CIA_06 box">
	
		<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_06'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
			
	
	</div>
    <div class="CIA_07 box">
		<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_07'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
			
	
	</div>
    <div class="CIA_08 box">
	
		<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_08'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
			
	</div>
    <div class="CIA_09 box">
		<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_09'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
			
	
	</div>
    <div class="CIA_10 box">
	
		<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_10'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
			
	</div>
    <div class="CIA_11 box">
	<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_11'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	
	</div>
    <div class="CIA_12 box">
	<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_12'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	
	</div>
    <div class="CIA_13 box">
	
	<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_13'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_14 box">
	
	<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_14'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_15 box">
	
	<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_15'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_16 box">
	
	<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_16'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>

	</div>
    <div class="CIA_17 box">
	<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_17'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	
	</div>
    <div class="CIA_18 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_18'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_19 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_19'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_20 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_20'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_21 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_21'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_22 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_22'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_23 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_23'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_24 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_24'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_25 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_25'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_26 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_26'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_27 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_17'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_28 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_28'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_29 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_29'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_30 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_30'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_31 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_31'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_32 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_32'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_33 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_33'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_34 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_34'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_35 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_35'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_36 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_36'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_37 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_37'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_38 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_38'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_39 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_39'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_40 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_40'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
	</div>
    <div class="CIA_41 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_41'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="CIA_42 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_42'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="CIA_43 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\CIA_43'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="DIA_01 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\DIA_01'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="DIA_02 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\DIA_02'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="DIA_03 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\DIA_03'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    
    <div class="FBI_01 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_01'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_02 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_02'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_03 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_03'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_04 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_04'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_05 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_05'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_06 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_06'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_07 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_07'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_08 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_08'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_09 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_09'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_10 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_10'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_11 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_11'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_12 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_12'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_13 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_13'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_14 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_14'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_15 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_15'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_16 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_16'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_17 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_17'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_18 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_18'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_19 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_19'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_20 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_20'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_21 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_21'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_22 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_22'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_23 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_23'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_24 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_24'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_25 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_25'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_26 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_26'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_27 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_27'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_28 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_28'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_29 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_29'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_30 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_30'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_31 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_31'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_32 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_32'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_33 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_33'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_34 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_34'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_35 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_35'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_36 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_36'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_37 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_37'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_38 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_38'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_39 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_39'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_40 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_40'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="FBI_41 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\FBI_41'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    
    <div class="NSA_02 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_02'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_03 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_03'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_05 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_05'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_06 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_06'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_07 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_07'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_08 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_08'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_09 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_09'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_10 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_10'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_11 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_11'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_12 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_12'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_13 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_13'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_14 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_14'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_15 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_15'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_16 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_16'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_17 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_17'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_18 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_18'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_19 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_19'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_20 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_20'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_21 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_21'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="NSA_22 box"><?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_22'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>

    
    <div class="NSA_docs box">
	<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\NSA_docs'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    
    
    <div class="USCBP_01 box">
	<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\USCBP_01'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    <div class="USCBP_02 box">
	<?php

					// "file" function creates array with each line being 1 value to an array
					$fileOne = file('C:\xampp\htdocs\project\AtlanticStormText\Documents\USCBP_02'); 
					// Print an array or do all array magic with $fileOne and $fileTwo
					foreach($fileOne as $fo)
					{
						echo $fo;
					}
				?>
</div>
    
    
    
    
</div><!-----------container------------>

 <style>
 .active {
  color: #e4002b;
  font-weight: bold;
}
 </style> 	
		<div class="container nput-container">
            <ul id="myList" class="ml-ul">
			<?php
			error_reporting(E_ERROR | E_PARSE);
			$dir = "./AtlanticStormText/Documents";
			$myArray = array();

			if (is_dir($dir)) 
			{
				if ($dh = opendir($dir)) 
				{
					
					$abc = array();
					$two = array();
					for($i=0; $i<=116 ; $i++)
					{
						$file = readdir($dh);
						$record = file_get_contents("./AtlanticStormText/Documents".$file);
						$abc[] = $file;
						$two[] = $record;
					}	
					$myArray = array_combine($abc, $two);    
				}		
				$d = " ' ";
				$sliced = array_slice($myArray, 55, count($myArray)-55, true);
				foreach($sliced as $key => $value)
				{
					
				echo '<li class="ml-li list_list_item"><label><input type="checkbox" name="colorCheckbox" value='.$key.' >' .$key. '</label></li>';
            
				}
			}
			?>
            </ul>
		</div>
 
  <script >
 
   $('input:checkbox').change(function(){
   if($(this).is(':checked')) 
       $(this).parent().addClass('active'); 
  else 
      $(this).parent().removeClass('active')
 }); 
    </script><!-----------script to select the docID------------------->

	</body>

</html>
