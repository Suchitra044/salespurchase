<?php
$c=mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("Sales",$c);
$result=mysql_query("INSERT INTO product(name,pid ,detail,price)VALUES ('$_POST[name]','$_POST[pid]','$_POST[p1]','$_POST[p2]')",$c);
if($result)
{
echo"inserted";
}
else
{
echo"inserted illa".mysql_error();
}
?> 

