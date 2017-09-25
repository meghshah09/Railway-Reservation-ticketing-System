<?php
session_start();
?>
<html>

<head>
  <title>Railway reservation system</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  
</head>
<script type="text/javascript">  
<?php
$file=fopen("ticket.pdf","r");
if($file==true)
{
	header("Content-type:application/pdf");

// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename='downloaded.pdf'");

// The PDF source is in original.pdf
readfile("ticket.pdf");
}
?>
</script>

<body style="background-size: 100% 100% ">

      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html"><span class="logo_colour">ChukChukGadi</span></a></h1>
          <h2>Your <b>Comfort</b> Our <b>Care</b></h2>
        </div>
      </div>
	  
	  <h1 style="padding-left:20px">Thank You For Booking with us</h1>
	  <h2 style="padding-left:20px">Your PNR is :- <?php 
		for ($ps = 1; $ps <= $_SESSION["no"]; $ps++)
				{
					switch ($ps) {
								case 1:
									print $_SESSION['pnr1'];
									
									break;
								case 2:
									print $_SESSION['pnr2'];
									print",";
									break;
								case 3:
									print $_SESSION['pnr3'];
									
									break;
								case 4:
									print $_SESSION['pnr4'];
								
									break;
								}
				if($ps != $_SESSION["no"])
				{
					echo",";
				}
					
				}
					    
	  ?></h2></center>
	  <p><button id='down' type='submit'  onclick='download()'><a href="booking.php">Book another ticket</a></button> <button id='down' type='submit'  onclick='download()'><a href="welcome.html">Services</a></button></p><br><br>
	  <p><button id='down' type='submit'  onclick='download()'>Download Voucher</button></p><br><br>
	  <p><button id='down' type='submit' onclick='download()'>Email voucher</button></p>
	  
	    <div id="content_footer" style="padding-top:290px"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Our Cities</a> | <a href="safety.html">Safety</a> | <a href="help.html">Help Center</a> | <a href="about_us.html">About Us</a> | <a href="legal.html">Legal</a> | <a href="faq.html">FAQ's</a> | <a href="blog.html">Blog</a></p>
      <center><p>Copyright &copy; ChukChukGadi.com </p></center>
    </div>
  </div>
  </body>
</html>