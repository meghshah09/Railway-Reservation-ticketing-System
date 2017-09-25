<?php
			$email_id=$_POST["eid"];
			$password=$_POST["pwd"];
if ($email_id && $password)
{
	mysql_connect("localhost", "root") or die(mysql_error()); 


	$dbase_name="user";

	mysql_select_db($dbase_name) or die(mysql_error()); 
	
	$data=mysql_query("select * from logup")or die(mysql_error());
	$numrows = mysql_num_rows($data);
	if($numrows!=0)
	{
		while($row = mysql_fetch_assoc($data))
		{
		$dbemail=$row['email_id'];
		$dbpassword=$row['password'];
		}
		if($dbemail==$email_id && $dbpassword==$password)
		{
				header("Location: welcome.html");
				
		}
		else
		{
			print"<button type='submit'><a href='signin.html'> Go Back</a></button>";
				print"<br>";
			echo 'Incorrect Password/username';
		}
	}
	else
	{
		print"<button type='submit'><a href='signin.html'> Go Back</a></button>";
				print"<br>";
		die("That username doesnt exist");
	}
}
else
die("Please enter username and password");
mysql_close();
?>