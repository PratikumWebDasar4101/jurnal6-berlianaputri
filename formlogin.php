<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<table>
		<form action="checklogin.php" method="post">
			<tr>
				<td>NIM</td>
				<td> : </td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td> : </td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name=login Value="Login"></td>
			</tr>
		</form>
	</table>
</body>
</html>