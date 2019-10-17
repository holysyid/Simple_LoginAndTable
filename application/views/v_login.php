<!DOCTYPE html>
<html>
<head>
	<title>BelajarCrud Membuat Login Dengan CodeIgniter</title>
</head>
<body>
	
	<form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post"> 	
		<table align="center" cellspacing="20px">
			<tr>
				<!-- form login -->
				<td colspan="2" align="center"><h1>Login form</h1></td>
			</tr>
			<tr>
				<td>nim</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				
				<td colspan="2" align="center"><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>