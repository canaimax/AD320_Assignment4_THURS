<?php

require "testData.php";

$keys = get2DArray(); //set the array as a variable

foreach($keys as $key => $value) { //separate the keys from the values
  echo "<h3><ul>". $key ."</ul></h3>"; //prints the key

  foreach($value as $item) { //prints all the values
      echo "<li>". $item ."</li>"; //creates the dots
  }
}

?>
