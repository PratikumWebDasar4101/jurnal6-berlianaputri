<?php 
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$password = $_POST['password'];
	$fakultas = $_POST['fakultas'];
	$jk = $_POST['jk'];
	$kelas = $_POST['kelas'];
	$hobi = $_POST['hobi'];
	$alamat = $_POST['alamat'];
	$id = $_POST['id'];

	$db = new mysqli("localhost", "root", "", "wedasar");	

	$sql =	"UPDATE registrasi SET nim='$nim', nama='$nama', kelas='$kelas', jenis_kelamin='$jk', hobi='$hobi',
			fakultas='$fakultas', alamat='$alamat', password='$password' WHERE id='$id'";


if (mysqli_query($db, $sql)) {

	echo "Update successfully";

}else{

	echo "Error : " . $sql . "<br>" . mysqli_error($db);

}



mysqli_close($db);

echo "<br>";

echo "<a href = list.php>Lihat List Data";
?>