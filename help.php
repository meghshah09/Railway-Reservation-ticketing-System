<?php
mysql_connect("localhost","root") or die(mysql_error());
$name=$_POST["nm"];
$phno=$_POST["tel"];
$contact_email=$_POST["email"];
$fb_content=$_POST["feed"];
$db1="user";
mysql_select_db($db1) or die(mysql_error());
$qinsert="insert into feedback values('$name','$phno','$contact_email','$fb_content')";
mysql_query($qinsert) or die(mysql_error());
echo "FEEDBACK RECORDED!!"<BR>"THANKYOU!!";
mysql_close();
?>