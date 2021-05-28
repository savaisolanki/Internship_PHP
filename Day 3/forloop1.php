

<?php

$a=1000;
echo "<table border='2'>";
for($i=0;$i<1000;$i++){
    echo"<tr>";
    if($i%2==0){
    echo"<td bgcolor='blue'>$i</td>";
}else 
{
    echo"<td bgcolor='green'>$i</td>";
}
    echo"</tr>";
}
echo"</table>";
