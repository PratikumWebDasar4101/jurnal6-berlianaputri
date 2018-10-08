<?php 
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$password = $_POST['password'];
	$fakultas = $_POST['fakultas'];
	$jk = $_POST['jk'];
	$kelas = $_POST['kelas'];
	$hobi = $_POST['hobi'];
	$alamat = $_POST['alamat'];

	$db = new mysqli("localhost", "root", "", "wedasar");	

	$sql = "INSERT INTO registrasi(nim, nama, kelas, jenis_kelamin, hobi, fakultas, alamat, password)
			VALUES ('$nim', '$nama', '$kelas', '$jk', '$hobi', '$fakultas', '$alamat', '$password')";

	if (mysqli_query($db, $sql)) {
		echo "New record created successfully";
	}else{
		echo "Error : " . $sql . "<br>" . mysqli_error($db);
	}

mysqli_close($db);
echo "<br><br>";
echo "<a href = formlogin.php>LOGIN";

?>
