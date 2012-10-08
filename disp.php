<?php
$c=mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("Sales",$c);
$n=$_POST['eid'];
$p=$_POST['pswrd'];
$query = "SELECT * FROM Users WHERE eid='$n' AND pswrd='$p'"; 
	 
$result = mysql_query($query,$c).mysql_error();


$row = mysql_fetch_array($result).mysql_error();
echo $row['name']."<br/>".$row['eid']."<br/>".$row['pswrd'];
mysql_close($c);
?>