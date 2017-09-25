	<?php	
	session_start();
		?>
	
	<HTML>
	<BODY>
	<?php
		mysql_connect("localhost", "root") or die(mysql_error()); 

		
			$dbase_name="user";

			mysql_select_db($dbase_name) or die(mysql_error()); 
			$data=mysql_query("select * from trains where Train_name='RANAKPUR EXPRESS' ")or die(mysql_error());
			$dbnot=$_SESSION["no"];
			while($info=mysql_fetch_array($data))
			{
				$no=$info['available'] - $dbnot;
				$qt=$info['Train_no'];
				$rt=$info['Train_name'];
				$st=$info['Fare'];
				$query="update trains set available='$no'where Train_name='RANAKPUR EXPRESS'";
				mysql_query($query) or die(mysql_error());
				for ($ps = 1; $ps <= $_SESSION["no"]; $ps++)
				{
			
					switch ($ps) {
								case 1:

									$name1=$_SESSION["panme1"];
									$age1=$_SESSION["age1"];
									$pnr1=(rand(8000,20000));
									$query1="insert into details values('$name1',$age1,$pnr1,$qt,'$rt',$st)";
									mysql_query($query1) or die (mysql_error()); 
									$_SESSION["pnr1"]=$pnr1;
									break;
								case 2:
									$name2=$_SESSION["panme2"];
									$age2=$_SESSION["age2"];
									$pnr2=(rand(8000,20000));
									$query1="insert into details values('$name2',$age2,$pnr2,$qt,'$rt',$st)";
									mysql_query($query1) or die (mysql_error()); 
									$_SESSION["pnr2"]=$pnr2;
									break;
								case 3:
									$name3=$_SESSION["panme2"];
									$age3=$_SESSION["age2"];
									$pnr3=(rand(8000,20000));
									$query1="insert into details values('$name3',$age3,$pnr3,$qt,'$rt',$st)";
									mysql_query($query1) or die (mysql_error()); 
									$_SESSION["pnr3"]=$pnr3;
									break;
								case 4:
									$name4=$_SESSION["panme2"];
									$age4=$_SESSION["age2"];
									$pnr4=(rand(8000,20000));
									$query1="insert into details values('$name4',$age4,$pnr4,$qt,'$rt',$st)";
									mysql_query($query1) or die (mysql_error()); 
									$_SESSION["pnr4"]=$pnr4;
									break;
								}
					
				}
			 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=final.php">';
			}
				mysql_close();
				
	?>
	</body></html>