<?php

require 'testData.php';

$input = get2dArray();

foreach($input as $topic => $detail){
  echo
  "<div style='border: 1px solid black;"
  . "margin:0 auto;"
  . "padding:10px;"
  . "display: inline-block'>"
  . "<h3>$topic</h3>"
  . "<ul>";
    foreach($detail as $item){
      echo"<li>$item</li>";
    }
  echo "</ul></div><br>";
}
?>
