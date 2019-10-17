<!DOCTYPE html>
<html>
<head>
	<title>Crud dasar dengan CodeIgniter</title>
</head>
<body>
<h2 align="center">Hai, <?php echo $this->session->userdata("Nama"); ?></h2>
	<a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a>
<table style="margin: 20px auto;" border="1">
	<caption><a href="<?php echo base_url('index.php/berhasil/tambah'); ?>"> Tambah Data Disini!</a></caption>
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Alamat</th>



	</tr>
	<?php
	$no=1;
	foreach ($Mahasiswa as $u) {?>
	<tr>
		<td><?php echo $no++?></td>
		<td><?php echo $u->NIM ?></td>
		<td><?php echo $u->Nama ?></td>
		<td><?php echo $u->Alamat ?></td>
		<td><?php echo anchor('berhasil/edit/'.$u->NIM,'Edit');?>
				<?php echo anchor('berhasil/hapus/'.$u->NIM,'Hapus'); ?>		</td>
	</tr>
<?php }?>
</table>
</body>
</html>