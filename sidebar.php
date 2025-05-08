<div class="sidebar"><br>
<h3 class="text">Dashboard</h3><br><hr><br>
<ul class="s">
<?php
	if(isset($_SESSION["AID"]))
	{
		echo'
			<li class="li"><a href="admin_home.php">School Information</a></li>
			<li class="li"><a href="add_class.php">Add Class</a></li>
			<li class="li"><a href="add_sub.php">Add Subject</a></li>

			<li class="li"><a href="add_staff.php">Add Teacher</a></li>
			<li class="li"><a href="view_staff.php">View Teacher</a></li>
			<li class="li"><a href="view_exam.php">View Exam</a></li>
			<li class="li"><a href="student.php"> View Student</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>
		
		';
		//<li class="li"><a href="set_exam.php">Set Exam</a></li>
		//<li class="li"><a href="student.php"target="_blank"> View Student</a></li>
	
	
	}
	elseif(isset($_SESSION["SID"]))
	{
		echo'
			<li class="li"><a href="students_home.php">Profile</a></li>
			<li class="li"><a href="student_view_class.php">Class</a></li>
			<li class="li"><a href="student_view_exam.php">Exam</a></li>
			<li class="li"><a href="student_view_mark.php">Marks</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>

		
		';
		//<li class="li"><a href="add_mark.php">Add Marks</a></li>
		//<li class="li"><a href="view_stud_teach.php" target="_blank"> View Student</a></li>
		//	<li class="li"><a href="tech_view_exam.php">View Exam</a></li>

	}
	else{
		echo'
			<li class="li"><a href="teacher_home.php">Profile</a></li>
			<li class="li"><a href="handle_class.php">Handled Class</a></li>
			<li class="li"><a href="add_stud.php">Add New Students</a></li>
			<li class="li"><a href="view_stud_teach.php">View Student</a></li>   
            <li class="li"><a href="set_exam.php">Set Exam</a></li>
			<li class="li"><a href="tech_view_exam.php">View Exam</a></li>
			<li class="li"><a href="add_mark.php">Add Marks</a></li>
			<li class="li"><a href="view_mark.php">View Marks</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>

		
		';
		//target="_blank"
	}


?>
	

</ul>

</div>