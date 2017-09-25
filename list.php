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
	  <h1><b>Available Trains on this route</b></h1>
<?php
	mysql_connect("localhost", "root") or die(mysql_error()); 

	$dbase_name="user";

	mysql_select_db($dbase_name) or die(mysql_error()); 

	$data=mysql_query("select * from trains")or die(mysql_error());
	print"<table border cellpadding=3>";
	print"<tr bgcolor=yellow>";
	print"<th bgcolor=green><font color=black>TRAIN NO.</font></th>";
	print"<th bgcolor=green><font color=black>TRAIN_NAME</font></th>";
		print"<th bgcolor=green><font color=black>TYPE</font></th>";
	print"<th bgcolor=green><font color=black>ZONE</font></th>";
		print"<th bgcolor=green><font color=black>FROM</font></th>";
	print"<th bgcolor=green><font color=black>DEPATURE</font></th>";
		print"<th bgcolor=green><font color=black>TO</font></th>";
	print"<th bgcolor=green><font color=black>ARRIVAL</font></th>";
		print"<th bgcolor=green><font color=black>DURATION</font></th>";
		print"<th bgcolor=green><font color=black>FARE</font></th>";
	print"<th bgcolor=green><font color=black>DEPATURE DAYS</font></th>";
	print"<th bgcolor=green><font color=black>Available tickets</font></th>";
	print"</tr>";
	
		$i=1;
		
	while($info=mysql_fetch_array($data))
	{
	print"<tr bgcolor=yellow>";
	print"<td><font color=black>".$info['Train_no']."</font></td>";
	if($i==1)
	{
	print'<td><a href="book.php">'.$info['Train_name']."</td>";
	}
	if($i==2)
	{
	print'<td><a href="book2.php">'.$info['Train_name']."</td>";
	}
	if($i==3)
	{
	print'<td><a href="book3.php">'.$info['Train_name']."</td>";
	}
	if($i==4)
	{
	print'<td><a href="book4.php">'.$info['Train_name']."</td>";
	}
	
	print"<td><font color=black>".$info['Type']."</font></td>";
	print"<td><font color=black>".$info['Zone']."</font></td>";
	print"<td><font color=black>".$info['From']."</font></td>";
	print"<td><font color=black>".$info['Depature']."</font></td>";
	print"<td><font color=black>".$info['To']."</font></td>";
	print"<td><font color=black>".$info['Arrival']."</font></td>";
	print"<td><font color=black>".$info['Duration']."</font></td>";
	print"<td><font color=black>".$info['Fare']."</font></td>";
	print"<td><font color=black>".$info['Depature Days']."</font></td>";
	print"<td><font color=black>".$info['available']."</font></td></tr>";
	$i++;
	}
	print"</table>";
	mysql_close();
?>
</div>
<p Style="padding-top:15px">(Click on the train name to book the tickets)</p>
</center>

<div id="content_footer" style="padding-top:280px"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Our Cities</a> | <a href="safety.html">Safety</a> | <a href="help.html">Help Center</a> | <a href="about_us.html">About Us</a> | <a href="legal.html">Legal</a> | <a href="faq.html">FAQ's</a> | <a href="blog.html">Blog</a></p>
      <center><p>Copyright &copy; ChukChukGadi.com </p></center>
    </div>
  </div>