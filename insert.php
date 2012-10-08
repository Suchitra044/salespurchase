<?php
$c=mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("Sales",$c);
$result=mysql_query("INSERT INTO Users(name,eid ,pswrd)VALUES ('$_POST[name]','$_POST[eid]','$_POST[p1]')",$c);
if($result)
{
echo"inserted";
}
else
{
echo"inserted illa".mysql_error();
}
?> 

