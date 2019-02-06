
<?php

echo "Sanford Winslow<br>";
echo "Assignment 4";

echo
"<div display: inline-block>";
require 'testData.php';
$dataToPrintToScreen = get2dArray();
foreach($dataToPrintToScreen as $key => $value) {
   echo "<h3>$key</h3>";
   echo "<ul><li>" . implode("</li><li>", $value) . "</li></ul>";
 }

 "</div>";

 ?>
