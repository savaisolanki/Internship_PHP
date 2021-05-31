<?php
$arr = array("savai","ravi","halima","java","yash","halima");
$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) {
echo "<br/>$key - <strong>$value</strong> ";
}
?>