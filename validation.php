<?php
$c=mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("Sales",$c);
$email=$_POST['eid'];
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p='/[a-z0-9_\+-]+(\.[a-z0-9_\+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.([a-z]{2,4})/';
$pat2='/[0-9]{10}/';
if(preg_match($p, $email)) 
{
$ef=1;
  
}
else
{
echo"invaild email id";
}
if($p1==$p2)
{
$pf=1;
}
else
{
echo"password mismatch";
}

if($ef==1&&$pf==1)
{
$result=mysql_query("INSERT INTO Users(name,eid,pswrd)VALUES ('$_POST[name]','$_POST[eid]','$_POST[p1]')",$c);
}
if($result)
{
echo"membership created<br/> use your mail id and password to login";
}
else
{
echo"membership cannot be created";
}
?>
