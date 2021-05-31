<?php
$arr = array("i"=>"c","want"=>"c++","learn"=>"Android");
$myarr = array_values($arr);
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}
?>
