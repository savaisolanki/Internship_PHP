<?php

$Sub1 = $_POST['Sub1'];
$Marks1 = $_POST['Marks1'];
$Sub2 = $_POST['Sub2'];
$Marks2 = $_POST['Marks2'];
$Sub3 = $_POST['Sub3'];
$Marks3 = $_POST['Marks3'];
$Sub4 = $_POST['Sub4'];
$Marks4 = $_POST['Marks4'];
$Sub5 = $_POST['Sub5'];
$Marks5 = $_POST['Marks5'];
$Sub6 = $_POST['Sub6'];
$Marks6= $_POST['Marks6'];
$Sub7 = $_POST['Sub7'];
$Marks7= $_POST['Marks7'];
$Sub = array($Sub1,$Sub2,$Sub3,$Sub4,$Sub5,$Sub6,$Sub7);
$Marks = array($Marks1,$Marks2,$Marks3,$Marks4,$Marks5,$Marks6,$Marks7);
$total = $percentage = 0;

echo "<center>  Result  <table>";

for($i=0;$i<7;$i++){
	echo "<tr>";
        
	echo "<td bgcolor='Red' width='100px' align='center'>$Sub[$i] </td>";
	echo "<td bgcolor='lighgreen' width='100px' align='center'>$Marks[$i] </td>";
	$total = $total + $Marks[$i];
	echo "</tr>";
}

$percentage = $total/7.5;


if ($percentage >= 80) {
	echo "	<tr><td bgcolor='Pink' width='100px' align='center'>Total Marks  </td> 
			<td bgcolor='Pink' width='100px' align='center'>$total </td>";
	echo "	<tr><td bgcolor='Pink' width='100px' align='center'>Percentage  </td> 
			<td bgcolor='Pink' width='100px' align='center'>$percentage </td>";
	echo "	<tr><td bgcolor='Pink' width='100px' align='center'>Grades  </td> 
			<td bgcolor='Pink' width='100px' align='center'>High Distinction </td>";
} elseif ($percentage >=60 && $percentage < 80) {
	echo "	<tr><td bgcolor='yellow' width='100px' align='center'>Total Marks </td> 
			<td bgcolor='yellow' width='100px' align='center'>$total</td>";
	echo "	<tr><td bgcolor='yelow' width='100px' align='center'>Distinction </td>";
}elseif ($percentage >=40 && $percentage < 60) {
	echo "	<tr><td bgcolor='green' width='100px' align='center'>Total Marks </td> 
			<td bgcolor='green' width='100px' align='center'>$total</td>";
	echo "	<tr><td bgcolor='green' width='100px' align='center'>Percentage  </td> 
			<td bgcolor='green' width='100px' align='center'>$percentage </td>";
	echo "	<tr><td bgcolor='green' width='100px' align='center'>Grades  </td> 
			<td bgcolor='green' width='100px' align='center'>Pass </td>";
}else {
	echo "	<tr><td bgcolor='red' width='100px' align='center'>Total Marks  </td> 
			<td bgcolor='red' width='100px' align='center'>$total</td>";
	echo "	<tr><td bgcolor='red' width='100px' align='center'>Percentage  </td> 
			<td bgcolor='red' width='100px' align='center'>$percentage </td>";
	echo "	<tr><td bgcolor='red' width='100px' align='center'>Grades  </td> 
			<td bgcolor='red' width='100px' align='center'>Fail </td>";
}
echo "</tr> </table> </center>";
?>
