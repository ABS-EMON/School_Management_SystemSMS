<?php
	include "database.php";
	session_start();
	$s="delete from student_login where SID={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('view_stud_teach.php?mes=Data Deleted','_self');</script>";


?>