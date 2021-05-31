<?php
$arr = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Orange" =>"orange");
ksort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}
