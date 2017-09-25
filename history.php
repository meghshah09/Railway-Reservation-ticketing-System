<html>

<head>
  <title>Railway reservation system</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  
</head>
<script src="validation_signup.js"></script>
<body style="background-size: 100% 100% ">

      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html"><span class="logo_colour">ChukChukGadi</span></a></h1>
          <h2>Your <b>Comfort</b> Our <b>Care</b></h2>
        </div>
      </div>
	  <center>
	  <div id=list>
	  <h1><b>Your PNR History</b></h1>
<?php
$id=$_POST["pid"];
	mysql_connect("localhost", "root") or die(mysql_error()); 

	$dbase_name="user";

	mysql_select_db($dbase_name) or die(mysql_error()); 

	$data=mysql_query("select * from details where pnr=$id")or die(mysql_error());
	print"<table border cellpadding=3>";
	print"<tr bgcolor=yellow>";
	print"<th bgcolor=green><font color=black>Passenger Name</font></th>";
	print"<th bgcolor=green><font color=black>Passenger Age</font></th>";
		print"<th bgcolor=green><font color=black>PNR</font></th>";
	print"<th bgcolor=green><font color=black>TRAIN No</font></th>";
		print"<th bgcolor=green><font color=black>Train Name</font></th>";
	print"<th bgcolor=green><font color=black>Fare</font></th>";
	print"</tr>";
	
		$i=1;
		
	while($info=mysql_fetch_array($data))
	{
	print"<tr bgcolor=yellow>";
	print"<td><font color=black>".$info['pname']."</font></td>";
	print"<td><font color=black>".$info['page']."</font></td>";
	print"<td><font color=black>".$info['pnr']."</font></td>";
	print"<td><font color=black>".$info['train_no.']."</font></td>";
	print"<td><font color=black>".$info['train_nm']."</font></td>";
	print"<td><font color=black>".$info['fare']."</font></td></tr>";
	$i++;
	}
	print"</table>";
	mysql_close();
?>
<br>
		<p><button id="registerNew" type="submit"><a href=welcome.html>Services</a></button></p>
</div>

</center>

<div id="content_footer" style="padding-top:280px"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Our Cities</a> | <a href="safety.html">Safety</a> | <a href="help.html">Help Center</a> | <a href="about_us.html">About Us</a> | <a href="legal.html">Legal</a> | <a href="faq.html">FAQ's</a> | <a href="blog.html">Blog</a></p>
      <center><p>Copyright &copy; ChukChukGadi.com </p></center>
    </div>
  </div>