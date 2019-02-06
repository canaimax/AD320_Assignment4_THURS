<?php 
require('testData.php');
$category = get2dArray();
reset($category);
while (list($key, $val) = each($category)) {
	echo 
	"<div style='border: 1px solid black;"
	. "margin:5 auto;"
	. "width: 80%;"
	. "padding:10px;" 
	. "display: inline-block'>";
echo "<h3>".$key."</h3><ul>";
foreach ($val as $grosery){
echo "<li>".$grosery."</li>";}
echo "</ul></div><br>";

}
// $bar =each($category);
// print_r($bar);
// echo is_array($category) ? 'Array' : 'not an Array';
// foreach($category as $g){
	// echo"<br>".$g;
// }
// $arr = $category['Fruits'];
// echo is_array($arr) ? '<br>Array' : '<br>not an Array';
// echo key($arr);
// foreach($arr as $value){
	// echo "<br>".$value;
// }
?>
