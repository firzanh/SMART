<!-- <?php 
require 'functions.php';
if (isset($_POST["register"])) {
	if (register($_POST) > 0) {
		echo "<script>
		alert('user baru berhasil ditambahkan');
		</script>";
	}else{
		echo mysqli_error($conn);
	}
}
 ?> -->
<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
<head>
	<title>Halaman Registrasi</title>
	<style>
		label{
			display: block;
		}
	</style>
</head>
<body>
	<h1>Halaman Registrasi</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="nama_lengkap">Nama Lengkap</label>
				<input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
			</li>
			<li>
				<label for="tempat_lahir">Tempat Lahir</label>
				<input type="text" name="tempat_lahir" id="tanggal_lahir" placeholder="Tempat Lahir">
			</li>
			<li>
				<label for="tanggal_lahir">Tanggal Lahir</label>
				<input type="text" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir">
			</li>
			<li>
				<label for="tempat_tinggal">Tempat tinggal</label>
				<!--dropdown belum/!-->
			</li>
			<li>
				<label for="detail_alamat">Detail Alamat</label>
				<input type="text" name="detail_alamat" id="detail_alamat" placeholder="Detail Alamat">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="email" name="email" id="email" placeholder="email">
			</li>
			<li>
				<label for="password">Kata Sandi :</label>
				<input type="password" name="password" id="password" placeholder="Kata Sandi">
			</li>
    		<li>
				<label for="password2">Konfirmasi Kata Sandi :</label>
				<input type="password2" name="password2" id="password2" placeholder="Konfirmasi Kata Sandi">
			</li>
			<li>
				<button type="submit" name="register">Daftar</button>
			</li>
		</ul>
	</form>
</body>
</html>
