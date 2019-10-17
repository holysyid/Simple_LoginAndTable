<!DOCTYPE html>
<html>
<head>
	<title>Input file Ke Database</title>
</head>
<body>
	<center>
		<a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a>
		<h1>Input Datamu Disini</h1>
		<caption><a href="<?php echo base_url('index.php/berhasil'); ?>">Gajadi deh..</a></caption>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url('index.php/berhasil/tambah_aksi'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="NIM" maxlength="9" required=""></td>
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama" required=""></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="Alamat" required=""></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah" ></td>
			</tr>
		</table>
	</form>	
</body>
</html>