
	
	<HTML><head>
	<head>
	<script>
	function pop(){
		alert("Your Tickets Booked");
	}
	</script>
	<BODY>
	<form method="post" onsubmit="pop()" action="final.php">
	<?php
		mysql_connect("localhost", "root") or die(mysql_error()); 

		
			$dbase_name="user";

			mysql_select_db($dbase_name) or die(mysql_error()); 
			$data=mysql_query("select * from trains where Train_name='Karnavati Express' ")or die(mysql_error());
			$dbnot=$_SESSION["no"];
			while($info=mysql_fetch_array($data))
			{
				$no=$info['available'] - $dbnot;
				$xt=$info['Train_no'];
				$yt=$info['Train_name'];
				$zt=$info['Fare'];
				
				$query="update trains set available='$no'where Train_name='Karnavati Express'";
				mysql_query($query) or die(mysql_error());
				for ($ps = 1; $ps <= $_SESSION["no"]; $ps++)
				{
			
					switch ($ps) {
								case 1:

									$name1=$_SESSION["panme1"];
									$age1=$_SESSION["age1"];
									$pnr1=(rand(8000,20000));
									$query1="insert into details values('$name1',$age1,$pnr1,$xt,'$yt',$zt)";
									mysql_query($query1) or die (mysql_error()); 
									$_SESSION["pnr1"]=$pnr1;
									break;
								case 2:
									$name2=$_SESSION["panme2"];
									$age2=$_SESSION["age2"];
									$pnr2=(rand(8000,20000));
									$query2="insert into details values('$name2',$age2,$pnr2,$xt,'$yt',$zt)";
									mysql_query($query2) or die (mysql_error()); 
									$_SESSION["pnr2"]=$pnr2;
									break;
								case 3:
									$name3=$_SESSION["panme3"];
									$age3=$_SESSION["age3"];
									$pnr3=(rand(8000,20000));
									$query3="insert into details values('$name3',$age3,$pnr3,$xt,'$yt',$zt)";
									mysql_query($query3) or die (mysql_error()); 
									$_SESSION["pnr3"]=$pnr3;
									break;
								case 4:
									$name4=$_SESSION["panme4"];
									$age4=$_SESSION["age4"];
									$pnr4=(rand(8000,20000));
									$query4="insert into details values('$name4',$age4,$pnr4,$xt,'$yt',$zt)";
									mysql_query($query4) or die (mysql_error()); 
									$_SESSION["pnr4"]=$pnr4;
									break;
								}

					 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=final.php">';
				}

			}
				
				mysql_close();
				
	?>
	</form>
	</body></html>