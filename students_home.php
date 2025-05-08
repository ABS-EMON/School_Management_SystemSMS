<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["SID"]))
	{
		echo"<script>window.open('students_login.php?mes=Access Denied...','_self');</script>";
		
	}	
	
	
	$sql="SELECT * FROM student_login WHERE SID={$_SESSION["SID"]}";
		$res=$db->query($sql);

		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>EMON</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
		<img src="img/aes.jpg" style="margin-left:90px;" class="sha">
	
			<div id="section">
				<?php include"sidebar.php";?><br>
				<h3 class="text">Welcome <?php echo $_SESSION["SNAME"]; ?></h3><br><hr><br>
				<div class="content">
				
					<h3>Add Profile</h3><br>
				
					<div class="lbox1">
					<?php
						if(isset($_POST["submit"]))
						{
							$target="student_login/";
							$target_file=$target.basename($_FILES["img"]["name"]);
							
							if(move_uploaded_file($_FILES['img']['tmp_name'],$target_file))
							{
								$sql="update student_login set SPNO='{$_POST["pno"]}',SMAIL='{$_POST["mail"]}',SPADDR='{$_POST["addr"]}',SIMG='{$target_file}'where SID={$_SESSION["SID"]}";
								$db->query($sql);
								echo "<div class='success'>Insert Success</div>";
							}
							
						}
					
					
					?>
					
					
					
					
						
					<form  enctype="multipart/form-data" role="form"  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
							<label>  Phone No</label><br>
							<input type="text" maxlength="10" required class="input3" name="pno"><br><br>
							<label>  E - Mail</label><br>
							<input type="email"  class="input3" required name="mail"><br><br>
							<label>  Address</label><br>
							<textarea rows="5" name="addr"></textarea><br><br>
							<label> Image</label><br>
							<input type="file"  class="input3" required name="img"><br><br>
						<button type="submit" class="btn" name="submit">Add Profile Details</button>
						</form>
					</div>
					
					
					
					
					<div class="rbox1">
					<h3> Profile Roll:<?php echo !empty($row["SRNO"]) ? $row["SRNO"] : "Not Assigned"; ?></h3><br>
						<table border="1px">
							<tr><td colspan="2"><img src="<?php echo $row["SIMG"] ?>" height="100" width="100" alt="upload Pending"></td></tr>
							<tr><th>Name </th> <td><?php echo $row["SNAME"] ?> </td></tr>
							<tr><th>CLASS </th> <td><?php echo $row["SCLASS"] ?>  </td></tr>
							<tr><th>GPA </th> <td> <?php echo $row["SGPA"] ?>  </td></tr>
							<tr><th>Phone No </th> <td> <?php echo $row["SPNO"] ?> </td></tr>
							<tr><th>E - Mail </th> <td> <?php echo $row["SMAIL"] ?> </td></tr>
							<tr><th>Address </th> <td> <?php echo $row["SPADDR"] ?> </td></tr>
						</table>
					</div>
				</div>
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>