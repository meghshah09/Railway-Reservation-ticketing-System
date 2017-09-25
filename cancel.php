<?php
session_start();
?>

<?php
	mysql_connect("localhost", "root") or die(mysql_error()); 
	$pnr=$_POST["pnr"];
	$tnm=$_POST["train_no"];
	$dbase_name="user";

	mysql_select_db($dbase_name) or die(mysql_error()); 
$sel=mysql_query("select * from details where pnr = $pnr ")or die(mysql_error());

while($info1=mysql_fetch_array($sel))
			{
				$re=$info1['pnr'];
			}
			if($re==$pnr)
			{
	$query="delete from details where pnr ='$pnr'";
	mysql_query($query) or die (mysql_error());  
	
	$data=mysql_query("select * from trains where Train_no = $tnm ")or die(mysql_error());
	$j=1;
			while($info=mysql_fetch_array($data))
			{
				$tn=$info['Train_no'];
				if($tn==$tnm)
				{
				$no=$info['available'] + $j;
				
				$query1="update trains set available='$no' where Train_no='$tnm'";
				mysql_query($query1) or die(mysql_error());
				echo "<script>alert('Ticket Cancelled')</script>";
				echo '<META HTTP-EQUIV="Refresh" Content="0; URL=welcome.html">';
				}
				else{
					print"<button type='submit'><a href='welcome.html'> Go Back</a></button>";
				print"<br>";
					die("That Train no. doesnt exist");
				}
			}
			}
			else
			{
				
				print"<button type='submit'><a href='welcome.html'> Go Back</a></button>";
				print"<br>";
				die("That PNR doesnot exist");
				
			}
	mysql_close();
				

?>