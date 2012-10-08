<?php
$c=mysql_connect("localhost", "root", "") or die(mysql_error());

mysql_select_db("Sales",$c);
$query = "create table product (name varchar(20),pid varchar(20) ,detail varchar(20),price int)";


If ( mysql_query($query, $c))
   echo "mytable was created";
Else
   echo "error ";
mysql_close($c);

?>
