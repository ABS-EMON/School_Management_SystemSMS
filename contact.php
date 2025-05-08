<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>School Management System</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="back">
		<?php include"navbar.php";?>
		<img src="img/2.jpg" width="800">
		
		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<div class="cont">
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					ABS EMON WEB APPLICATION DEVELOPER<BR>
					Atpara,Netrokona,Mymensingh<BR>
					Kaliakoir, Bangladesh Digital Uiversity,<BR>
					Gazipur Hi-Tech City, Dhaka<BR>
					Mail - studentemon555@gmail.com<br>Phone - 01518979969
				</form>
			</div>
		</div>
		<div class="footer">
			<footer><p>Copyright &copy; ABS EMON</p></footer>
		</div>
		<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			
			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>
		
	
		
	</body>
</html>