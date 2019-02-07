<?php
    //require the file
    require('testData.php');

    //create object that represents an array from from test data
    $result = get2dArray();

    //iterating thru outer array
    foreach ($result as $key => $val){ 
        echo "<h3>".$key."</h3>"."<ul>";
        //iterating thru each subarray
        for($n = 0; $n <count($val); $n++){
            echo "<li>"."<div style = 'margin:0, auto;"."padding:10px;"."display:inline-block'>".$result[$key][$n]."</li>"."</div>";
        }
     echo "</ul>";
    }
?>