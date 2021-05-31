<?php
$arr = array('Yash', 'Apple', 'java', 'mango',);
$indexofarray = array_rand($arr,2);//Returns Array Index
foreach ($indexofarray as $key => $value)
{
echo "<br />$key - <strong>" . $arr[$value] . "</strong>";
}
?>
