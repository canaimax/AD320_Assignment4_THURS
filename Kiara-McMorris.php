
<?php
   require 'includes/testData.php';

foreach(get2dArray() as $k => $k_value){
	echo "<div>";
	echo "<h3><u> . $k . </u></h3><ul>" ;
	
		foreach($k_value as $item){
			echo "<li><i> . $item . </i></li>";
		}
	
	echo "</ul>";
	echo "<div>";
}

?>
		
