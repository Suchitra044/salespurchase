<?php
$c=mysql_connect("localhost", "root", "") or die(mysql_error());

mysql_select_db("Sales",$c);
$query = "create table Users (name varchar(20),eid varchar(20) ,pswrd varchar(20))";


If ( mysql_query($query, $c))
   echo "mytable was created";
Else
   echo "error ";
mysql_close($c);

?>
