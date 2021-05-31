<?php
$myArray = array("chess", "carrom", "cricket", "ludo",
"Snake");
shuffle($myArray); // Shuffle the array
foreach ($myArray as $key => $value) {
echo "<br /> $value ";
}
