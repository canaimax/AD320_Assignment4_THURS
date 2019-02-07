<?php

require "testData.php";

$array = get2dArray();

foreach($array as $key => $value) {
	echo 
		"<div style='border: 1px solid black;"
		. "margin:0 auto;"
		. "padding:10px;"
		. "display: inline-block'>"
		. "<h3>$key</h3>";
	
		foreach($value as $valueItem) {
			echo "<ul><li>" . $valueItem . "</li></ul>";
		}
		
		echo "</div>";
	
}