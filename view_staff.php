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
		<title>ABS EMON</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	
	<body>
			<?php include"navbar.php";?><br>
			<img src="img/3.jpg" style="margin-left:90px;" class="sha">
				
				<div id="section">
					<?php include"sidebar.php";?><br><br><br>
					
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
					
					<div class="content1">
					
						<h3 > View Teacher's Details</h3><br>
						<form id="frm" autocomplete="off">
									       <label>Teacher's Name</label><br>
										 
									
											
											<select id="txt1" name="txt" required class="input3">
												<?php
													$sl="select* from staff";
													$r=$db->query($sl);
													if($r->num_rows>0)
													{
														echo "<option value=''>Select</option>";
														while($ro=$r->fetch_assoc())
														{
															echo "<option value='{$ro["TNAME"]}'>{$ro["TNAME"]}</option>";
														}
													}
												
												
												?>
													
										
												</select>
											
												<br><br>



									<input type="text" id="txt" class="input">


										


						
						</form>
						<br>
						<div id="box"></div>
						
					</div>	
				</div>
				
				
			<?php include"footer.php";?>
			
			<script>
				$(document).ready(function(){
					$("#txt").keyup(function(){
						var txt=$("#txt").val();
						if(txt!="")
						{
							$.post("search.php",{s:txt},function(data){
								$("#box").html(data);
							});
						}
						
					});
					
					
					
				});
			</script>
	</body>
</html>