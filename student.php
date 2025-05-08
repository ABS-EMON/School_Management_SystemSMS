<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ABS EMONS</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
		<img src="img/3.jpg" style="margin-left:90px;" class="sha">	<br><br>
			<div id="section">
			<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content">
					
						<h3 >View Student Details</h3><br>
					
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
							<th>S.No</th>
							<th>Roll No</th>
							<th>Name</th>
							<th>Father Name</th>
							<th>DOB</th>
							<th>Gender</th>
							<th>Phone</th>
							<th>Mail</th>
							<th>Address</th>
							<th>Class</th>
							<th>Sec</th>
							<th>Image</th>
						</tr>
						<?php
							$s="select * from student_login"; //where SID={$_SESSION["AID"]}
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo"
										<tr>
											<td>{$i}</td>
											<td>{$r["SRNO"]}</td>
											<td>{$r["SNAME"]}</td>
											<td>{$r["SFNAME"]}</td>
											<td>{$r["SDOB"]}</td>
											<td>{$r["SGEN"]}</td>
											<td>{$r["SPNO"]}</td>
											<td>{$r["SMAIL"]}</td>
											<td>{$r["SPADDR"]}</td>
											<td>{$r["SCLASS"]}</td>
											<td>{$r["SSEC"]}</td>
											<td><img src='{$r["SIMG"]}' height='70' width='70'></td>
											
										</tr>
									
									
									
									";
									//	<th>Delete</th>
									//<td><a href='stud_delete.php?id={$r["SID"]}' class='btnr'>Delete</a><td>
								}
							}
							else
							{
								echo "No Record Found";
							}
						
						?>
						
					</table>
				
				</div>
		
				
				
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>