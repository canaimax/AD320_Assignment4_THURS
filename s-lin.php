<?php
    require 'testData.php';

    foreach(get2dArray() as $key => $val ){
            echo "<div>";
            echo "<h3>" . $key . "</h3>";
        foreach($val as $item){
            echo "<ul><li>" . $item . "</li></ul>";
            echo "</div>";
        }       
    }
?>