<?php

require("testData.php");
$array = get2dArray();

 foreach ($array as $v1 => $v2) {
     foreach ($v2 as $v3) {
         echo "<h3>".$v1."</h3>".<ul>$v2\n</ul>;
     }
 }
}
?>
