<?php
$c=mysql_connect("localhost", "root", "") or die(mysql_error());
if (mysql_query(" CREATE DATABASE Sales",$c))
 	  echo "Database created";
  else
  	  echo "Error creating database: " . mysql_error();
mysql_select_db("Sales",$c);
$query = "create table item (item_name varchar(20),pid int,details varchar(20) ,price int)";


If ( mysql_query($query, $c))
   echo "mytable was created";
Else
   echo "error ";
mysql_close($c);

?>
