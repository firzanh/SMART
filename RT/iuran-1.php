<?php
// Kredensial database
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '12345';
$dbName = 'dapur';
// menghubungkan ke db
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
// mendapatkan data dari db
$result = $db->query("SELECT keterangan,rating FROM bhs_pemrograman WHERE status = '1' ORDER BY rating DESC");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../style/RT/iuran-1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/RT/iuran-1.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Home</title>
</head>
<body class="body">

	<!-- navbar -->
	<nav class="navbar sticky-top navbar-expand-lg navbar-light d-flex">
		<a class="navbar-brand navbar-start" href="#"><img src="../img/logo.png" width = "140"; height = "45"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Linimasa</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Peringkat</a>
				</li>
				<div class="login">	
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Akun
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
				</div>
			</ul>
		</div>
	</nav>

	<!--banner-->
	<div class="jumbotron">
		
	</div>

	<!-- tombol keatas -->
	<button onclick="topFunction()" id="myBtn" title="Kembali ke Atas"><i class="material-icons">
		arrow_upward
	</i></button>

	<!--dashboard-->
	<div class="container-fluid">
		<div class="row">
			<!--expand dashboard-->
			<div class="container-fluid menu">
				<button class="btn btn-sm mt-2 btn-menu" type="button" data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false" aria-controls="collapseExample" style="font-size: 15px;margin-left: -10px">
					Menu
					<i class="material-icons" style="font-size: 15px">
						expand_more
					</i>
				</button>
			</div>
			<div class="collapse" id="collapseMenu">
				<div class="card-body sidenav-c mt-4 col-12 col-sm-12 col-md-12 col-lg-3" id="collapseMenu" style="background-color: #232D3F">	
					<center>
						<a href="pengumuman-1.php" class="btn btn-dashboard" role="button"">
							Pengumuman
						</a>
						<a href="iuran-1.php" class="btn btn-dashboard btn-primary" role="button" id="btn-sekarang">
							Info Iuran
						</a>
						<a href="proker-1.php" class="btn btn-dashboard btn-primary" role="button">
							Program Kerja
						</a>
						<a href="blusukan-1.php" class="btn btn-dashboard btn-primary" role="button">
							Laporan Blusukan
						</a>
						<a href="#" class="btn btn-dashboard btn-primary" role="button">
							Data Warga
						</a>
						<a href="#" class="btn btn-dashboard btn-primary" role="button" style="padding-bottom: 60px;">
							Persentase <br>Kehadiran Warga
						</a>
						<a href="#" class="btn btn-dashboard btn-primary" role="button">
							Laporan Warga
						</a>
					</center>
				</div>
			</div>
			<div class="card-body sidenav mt-4 col-12 col-sm-12 col-md-4 col-lg-3" style="background-color: #232D3F">	
				<center>
					<a href="pengumuman-1.php" class="btn btn-dashboard btn-primary" role="button">
						Pengumuman
					</a>
					<a href="iuran-1.php" class="btn btn-dashboard btn-primary" role="button" id="btn-sekarang">
						Info Iuran
					</a>
					<a href="proker-1.php" class="btn btn-dashboard btn-primary" role="button">
						Program Kerja
					</a>
					<a href="blusukan-1.php" class="btn btn-dashboard btn-primary" role="button">
						Laporan Blusukan
					</a>
					<a href="#" class="btn btn-dashboard btn-primary" role="button">
						Data Warga
					</a>
					<a href="#" class="btn btn-dashboard btn-primary" role="button" style="padding-bottom: 60px;">
						Persentase <br>Kehadiran Warga
					</a>
					<a href="#" class="btn btn-dashboard btn-primary" role="button">
						Laporan Warga
					</a>
				</center>
			</div>

			<!-- Card buat pengumuman iuran-->
			<div class="card card-b-pengumuman mt-4 col-11 col-sm-11 col-md-11 col-lg-8 p-0">
				<div class="card-body" style="font-size: 18px; color: #00acec;">
					<center>
						<div class="col-12 col-sm-12 col-md-12 col-lg-12">
							<h5 id="j-buat-pengumuman" style="color: #19B4ED">Buat Pengumuman Iuran</h5><br>
							<form>
								<div class="form-group">
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Tulis Judul Pengumuman Iuran"></textarea>
								</div>
								<div class="form-group">
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Tulis Isi Pengumuman Iuran"></textarea>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text mata-uang">Rp</span>
										</div>
										<input type="text" class="form-control total-iuran" placeholder="Total Iuran">
									</div>
								</div>
								<a href="#" class="btn btn-primary col-sm-4 col-md-3 col-lg-3 offset-lg-8" role="button" id="btn-umumkan">
									UMUMKAN!
								</a>
							</form>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>

	<!-- baris-2 -->
	<div class="container-fluid container-pengumuman">
		<div class="row">

			<!-- Card table riwayat pengumuman iuran-->
			<div class="card card-r-pengumuman card-tabel mt-4 col-12 col-sm-12 col-md-12 col-lg-11 p-0">
				<div class="card-body">
					<div class="table-responsive-md">
						<table class="table table-striped table-sm">
							<h5 style="color: #19B4ED">Riwayat Pengumuman</h5>
							<thead>
								<tr>
									<th scope="col">Hapus</th>
									<th scope="col">Tanggal</th>
									<th scope="col">Judul</th>
									<th scope="col">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="#" class="btn btn-danger" role="button" id="btn-x">
										X
									</a></td>
									<th  id="tanggal" style="padding-top: 15px;font-weight: normal" scope="row">01/02/2018</th>
									<td style="padding-top: 15px">Mark</td>
									<td style="padding-top: 15px">Mark</td>
								</tr>
								<tr>
									<td><a href="#" class="btn btn-danger" role="button" id="btn-x">
										X
									</a></td>
									<th  style="padding-top: 15px;font-weight: normal" scope="row">2</th>
									<td style="padding-top: 15px">Jacob</td>
									<td style="padding-top: 15px">Jacob</td>
								</tr>
								<tr>
									<td><a href="#" class="btn btn-danger" role="button" id="btn-x">
										X
									</a></td>
									<th  style="padding-top: 15px;font-weight: normal" scope="row">3</th>
									<td style="padding-top: 15px">Larry</td>
									<td style="padding-top: 15px">Jacob</td>
								</tr>
								<tr>
									<td><a href="#" class="btn btn-danger" role="button" id="btn-x">
										X
									</a></td>
									<th  style="padding-top: 15px;font-weight: normal" scope="row">4</th>
									<td style="padding-top: 15px">Larry</td>
									<td style="padding-top: 15px">Jacob</td>
								</tr>
								<tr>
									<td><a href="#" class="btn btn-danger" role="button" id="btn-x">
										X
									</a></td>
									<th  style="padding-top: 15px;font-weight: normal" scope="row">5</th>
									<td style="padding-top: 15px">Larrsssssssssssssssssssssssssssssssy</td>
									<td style="padding-top: 15px">Jacob</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>