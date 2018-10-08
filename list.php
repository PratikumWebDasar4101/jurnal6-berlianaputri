<table border="1">
	<thead>
		<th>NIM</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Jenis Kelamin</th>
		<th>Hobi</th>
		<th>Fakultas</th>
		<th>Alamat</th>
		<th>Action</th>
	</thead>
	<tbody>
<?php

session_start();
$nim = $_SESSION['nim'];
$db = new mysqli("localhost", "root", "", "wedasar");
$sql = "SELECT * from registrasi WHERE nim='$nim'";
$result = mysqli_query($db, $sql);



if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		echo "<tr>";
		echo "<td>" . $row['nim'] . "</td>";
		echo "<td>" . $row['nama'] . "</td>";
		echo "<td>" . $row['kelas'] . "</td>";
		echo "<td>" . $row['hobi'] . "</td>";
		echo "<td>" . $row['fakultas'] . "</td>";
		echo "<td>" . $row['alamat'] . "</td>";
		echo "<td> <a href='formupdate.php?id=$id'>Update</a></td>";
		echo "</tr>";
	}
}else{
	echo "0 result";
}
mysqli_close($db);
?>

	</tbody>

</table>