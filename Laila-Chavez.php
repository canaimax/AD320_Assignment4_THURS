<?php

require ("testData.php");


  $itemArray = get2dArray();


foreach($itemArray as $category => $category_array) {

        echo
        "<div style='border: 1px solid green;"
        . "margin: 0 auto;"
        . "padding: 10px;"
        . "display: inline-block;'>"
        . "<h3>$category</h3>"
        . "<ul>";

         foreach($category_array as $item) {

                 echo "<li>$item</li>";
         }

        echo  "</ul></div>";

    }




?>
