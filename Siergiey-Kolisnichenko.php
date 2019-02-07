<?php
require 'testData.php';
$array = get2dArray();

foreach($array as $key=>$values) {

    echo "<div style='border:4px solid black;
            max-width:25%;
            margin-top:20px;
            border-radius:25px;'>";

    echo "<h3 style='padding-left:20px;'>".$key."</h3>";

    foreach($values as $ListItems) {
        
        echo "<ul><li>".$ListItems."</li></ul>";
    }
    echo "</div>";
}
?>
