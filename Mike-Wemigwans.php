<?php
//use a require method to include the file:
require('testData.php');

//and call the method get2dArray():
$got2dArray = get2dArray();

//create a foreach loop that prints out the contents of the 2d array
foreach ($got2dArray as $outArrayKey => $inArray) {
	//The Key for the inner array value should be printed as an H3 heading element
	echo "<div><h3>" . $outArrayKey . "</h3></div>";
	//The individual values inside the inner arrays should be printed as an unordered list <ul>).
	echo "<ul>";
    foreach ($inArray as $inArrayValue) {
		echo "<li>" . $inArrayValue ."</li>";
	}
	echo "</ul>";
}
?> 