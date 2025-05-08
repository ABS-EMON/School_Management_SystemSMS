<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ABS EMON</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
		
		
		<img src="img/n.gif" style="margin-left:90px;" class="sha">
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > School Information</h3><br>
					<img src="img/g.gif" class="imgs">
					<p class="para">
						Our **School Management System (SMS)** is a comprehensive software solution designed to automate and manage various school operations, from classes and exams to event scheduling.
					</p>
					
					<p class="para">

					It creates an interactive online platform connecting,Admin,teachers, and students, ensuring seamless communication and collaboration. This paperless solution streamlines daily tasks like attendance, making school administration more efficient and productive. With real-time updates, secure data handling, and a user-friendly interface, it meets the needs of modern educational institutions.
					
					</p>
				</div>
				
			</div>
	
		<?php include"footer.php";?>
	</body>
</html>