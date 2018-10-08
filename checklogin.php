<?php 
	$db = new mysqli("localhost", "root", "", "wedasar");
	$nim = $_POST['nim'];
	$password = $_POST['password'];
	$sql = mysqli_query($db, "SELECT * from registrasi WHERE nim='$nim' && password='$password'");

	$no = mysqli_num_rows($sql);
	
	if ($no ==1) {
		session_start();
		$_SESSION['nim'] = $nim;
		header("Location: list.php");
	}else{
		header("Location: registrasi.php");
	}

?>