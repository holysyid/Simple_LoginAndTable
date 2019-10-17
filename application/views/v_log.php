<!DOCTYPE html>
<html>
<head>
	<title>belajarcrud Membuat login dengan codeigniter</title>
</head>
<body >
	<!-- buat view berhasil loginnya -->
	<h1 align="center">yay Login berhasil !</h1>
	<h2 align="center">Hai, <?php echo $nama; ?></h2>
	<a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a>
</body>
</html>