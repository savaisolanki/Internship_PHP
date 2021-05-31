<?php
$arr = array(
"Yash" => "Handsome",
"Muskan" => "cute",
"Savai "=> "smarty");
$uppercase = array_change_key_case($arr,CASE_UPPER);
print_r($uppercase);
?>