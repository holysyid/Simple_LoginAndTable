<!DOCTYPE html>
<html>
<head>
	<title>Edit file dari Database</title>
</head>
<body>
	<center>
		<a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a>
		<h1>Edit Datamu Disini</h1>
		<caption><a href="<?php echo base_url('index.php/berhasil'); ?>">Gajadi deh..</a></caption>
		
	</center>
	<?php foreach($mahasiswa as $u){ ?>
	<form action="<?php echo base_url('index.php/berhasil/update'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="NIM" required="" value="<?php echo $u->NIM ?>"></td>
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama" required="" value="<?php echo $u->Nama ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="Alamat" required="" value="<?php echo $u->Alamat ?>" ></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan" ></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>