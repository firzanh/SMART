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
	<link rel="stylesheet" type="text/css" href="../style/RT/blusukan-1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="../js/jquery.min.js"></script>
	<script src="../js/RT/blusukan-1.js"></script>
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
			<div class="container-fluid menu" >
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
						<a href="iuran-1.php" class="btn btn-dashboard btn-primary" role="button">
							Info Iuran
						</a>
						<a href="proker-1.php" class="btn btn-dashboard btn-primary" role="button">
							Program Kerja
						</a>
						<a href="blusukan-1.php" class="btn btn-dashboard btn-primary" role="button">
							Laporan Blusukan
						</a>
						<a href="#" class="btn btn-dashboard btn-primary" role="button"  id="btn-sekarang">
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
					<a href="iuran-1.php" class="btn btn-dashboard btn-primary" role="button">
						Info Iuran
					</a>
					<a href="proker-1.php" class="btn btn-dashboard btn-primary" role="button">
						Program Kerja
					</a>
					<a href="blusukan-1.php" class="btn btn-dashboard btn-primary" role="button">
						Laporan Blusukan
					</a>
					<a href="#" class="btn btn-dashboard btn-primary" role="button" id="btn-sekarang">
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

			
			<!-- Card buat proker-->
			<div class="card card-utama-blusukan mt-4 col-sm-11 col-md-11 col-lg-8 p-0">
				<div class="card-body" style="font-size: 18px;">
					<center>
						<div class="col-sm-12 col-md-12 col-lg-12 card-utama-kunjungan">
							<form class="form-inline">
								<div class="row search">
									<div class="form-group mx-sm-3 mb-2 lg-3 form-cari-warga">
										<input type="password" class="form-control" id="inputPassword2" placeholder="Cari Warga" style="background-color: #2f3c53;color: white">
									</div>
									<button type="submit" class="btn btn-primary mb-2 lg-4 tbl-cari">Cari</button>
									<div class="btn-group dropdown-urutkan">
										<button type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #ca0088">
											Urutkan Berdasarkan
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<button class="dropdown-item" type="button">Action</button>
											<button class="dropdown-item" type="button">Another action</button>
											<button class="dropdown-item" type="button">Something else here</button>
										</div>
									</div>

									<button type="submit" class="btn mb-2 lg-4 tbl-cari">Tambah</button>
								</div>
							</form>
							<br>
							<div class="row">
								<!-- awal dari semua -->
								<div class="col-4 col-sm-4 col-md-3 card-status-kunjungan">
									<div class="card" style="background-color: #5a357e;">
										<div class="card-body p-0">
											<div id="nama">Firza</div>
											<div class="card" style="border-radius: 0px; border-width: 0px">
												<div class="card-body status-warna" style="background-color: #FFFF05;border-radius: 0px;padding: 5%">
													<img src="../img/sample.jpg"">
												</div>
											</div>
											<div class="keterangan" style="text-align: left;margin-left: 2px">
												<div id="kunjungan">Kepala Keluarga : </div>
												<div id="nama">Saya</div>
												<div id="kunjungan">Alamat</div>
												<div id="nama">Jl. Jalan</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 col-sm-4 col-md-3 card-status-kunjungan">
									<div class="card" style="background-color: #9d262a;">
										<div class="card-body p-0">
											<div id="nama">Firza</div>
											<div class="card" style="border-radius: 0px; border-width: 0px">
												<div class="card-body status-warna" style="background-color: #FFFF05;border-radius: 0px;padding: 5%">
													<img src="../img/sample.jpg"">
												</div>
											</div>
											<div class="keterangan" style="text-align: left;margin-left: 2px">
												<div id="kunjungan">Kepala Keluarga : </div>
												<div id="nama">Saya</div>
												<div id="kunjungan">Alamat</div>
												<div id="nama">Jl. Jalan</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 col-sm-4 col-md-3 card-status-kunjungan">
									<div class="card" style="background-color: #5a357e;">
										<div class="card-body p-0">
											<div id="nama">Firza</div>
											<div class="card" style="border-radius: 0px; border-width: 0px">
												<div class="card-body status-warna" style="background-color: #FFFF05;border-radius: 0px;padding: 5%">
													<img src="../img/sample.jpg"">
												</div>
											</div>
											<div class="keterangan" style="text-align: left;margin-left: 2px">
												<div id="kunjungan">Kepala Keluarga : </div>
												<div id="nama">Saya</div>
												<div id="kunjungan">Alamat</div>
												<div id="nama">Jl. Jalan</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 col-sm-4 col-md-3 card-status-kunjungan">
									<div class="card" style="background-color: #9d262a;">
										<div class="card-body p-0">
											<div id="nama">Firza</div>
											<div class="card" style="border-radius: 0px; border-width: 0px">
												<div class="card-body status-warna" style="background-color: #FFFF05;border-radius: 0px;padding: 5%">
													<img src="../img/sample.jpg"">
												</div>
											</div>
											<div class="keterangan" style="text-align: left;margin-left: 2px">
												<div id="kunjungan">Kepala Keluarga : </div>
												<div id="nama">Saya</div>
												<div id="kunjungan">Alamat</div>
												<div id="nama">Jl. Jalan</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 col-sm-4 col-md-3 card-status-kunjungan">
									<div class="card" style="background-color: #9d262a;">
										<div class="card-body p-0">
											<div id="nama">Firza</div>
											<div class="card" style="border-radius: 0px; border-width: 0px">
												<div class="card-body status-warna" style="background-color: #FFFF05;border-radius: 0px;padding: 5%">
													<img src="../img/sample.jpg"">
												</div>
											</div>
											<div class="keterangan" style="text-align: left;margin-left: 2px">
												<div id="kunjungan">Kepala Keluarga : </div>
												<div id="nama">Saya</div>
												<div id="kunjungan">Alamat</div>
												<div id="nama">Jl. Jalan</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 col-sm-4 col-md-3 card-status-kunjungan">
									<div class="card" style="background-color: #5a357e;">
										<div class="card-body p-0">
											<div id="nama">Firza</div>
											<div class="card" style="border-radius: 0px; border-width: 0px">
												<div class="card-body status-warna" style="background-color: #FFFF05;border-radius: 0px;padding: 5%">
													<img src="../img/sample.jpg"">
												</div>
											</div>
											<div class="keterangan" style="text-align: left;margin-left: 2px">
												<div id="kunjungan">Kepala Keluarga : </div>
												<div id="nama">Saya</div>
												<div id="kunjungan">Alamat</div>
												<div id="nama">Jl. Jalan</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 col-sm-4 col-md-3 card-status-kunjungan">
									<div class="card" style="background-color: #5a357e;">
										<div class="card-body p-0">
											<div id="nama">Firza</div>
											<div class="card" style="border-radius: 0px; border-width: 0px">
												<div class="card-body status-warna" style="background-color: #FFFF05;border-radius: 0px;padding: 5%">
													<img src="../img/sample.jpg"">
												</div>
											</div>
											<div class="keterangan" style="text-align: left;margin-left: 2px">
												<div id="kunjungan">Kepala Keluarga : </div>
												<div id="nama">Saya</div>
												<div id="kunjungan">Alamat</div>
												<div id="nama">Jl. Jalan</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 col-sm-4 col-md-3 card-status-kunjungan">
									<div class="card" style="background-color: #5a357e;">
										<div class="card-body p-0">
											<div id="nama">Firza</div>
											<div class="card" style="border-radius: 0px; border-width: 0px">
												<div class="card-body status-warna" style="background-color: #FFFF05;border-radius: 0px;padding: 5%">
													<img src="../img/sample.jpg"">
												</div>
											</div>
											<div class="keterangan" style="text-align: left;margin-left: 2px">
												<div id="kunjungan">Kepala Keluarga : </div>
												<div id="nama">Saya</div>
												<div id="kunjungan">Alamat</div>
												<div id="nama">Jl. Jalan</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 col-sm-4 col-md-3 card-status-kunjungan">
									<div class="card" style="background-color: #5a357e;">
										<div class="card-body p-0">
											<div id="nama">Firza</div>
											<div class="card" style="border-radius: 0px; border-width: 0px">
												<div class="card-body status-warna" style="background-color: #FFFF05;border-radius: 0px;padding: 5%">
													<img src="../img/sample.jpg"">
												</div>
											</div>
											<div class="keterangan" style="text-align: left;margin-left: 2px">
												<div id="kunjungan">Kepala Keluarga : </div>
												<div id="nama">Saya</div>
												<div id="kunjungan">Alamat</div>
												<div id="nama">Jl. Jalan</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 col-sm-4 col-md-3 card-status-kunjungan">
									<div class="card" style="background-color: #5a357e;">
										<div class="card-body p-0">
											<div id="nama">Firza</div>
											<div class="card" style="border-radius: 0px; border-width: 0px">
												<div class="card-body status-warna" style="background-color: #FFFF05;border-radius: 0px;padding: 5%">
													<img src="../img/sample.jpg"">
												</div>
											</div>
											<div class="keterangan" style="text-align: left;margin-left: 2px">
												<div id="kunjungan">Kepala Keluarga : </div>
												<div id="nama">Saya</div>
												<div id="kunjungan">Alamat</div>
												<div id="nama">Jl. Jalan</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 col-sm-4 col-md-3 card-status-kunjungan">
									<div class="card" style="background-color: #9d262a;">
										<div class="card-body p-0">
											<div id="nama">Firza</div>
											<div class="card" style="border-radius: 0px; border-width: 0px">
												<div class="card-body status-warna" style="background-color: #FFFF05;border-radius: 0px;padding: 5%">
													<img src="../img/sample.jpg"">
												</div>
											</div>
											<div class="keterangan" style="text-align: left;margin-left: 2px">
												<div id="kunjungan">Kepala Keluarga : </div>
												<div id="nama">Saya</div>
												<div id="kunjungan">Alamat</div>
												<div id="nama">Jl. Jalan</div>
											</div>
										</div>
									</div>
								</div>	
								<div class="col-4 col-sm-4 col-md-3 card-status-kunjungan">
									<div class="card" style="background-color: #5a357e;">
										<div class="card-body p-0">
											<div id="nama">Firza</div>
											<div class="card" style="border-radius: 0px; border-width: 0px">
												<div class="card-body status-warna" style="background-color: #FFFF05;border-radius: 0px;padding: 5%">
													<img src="../img/sample.jpg"">
												</div>
											</div>
											<div class="keterangan" style="text-align: left;margin-left: 2px">
												<div id="kunjungan">Kepala Keluarga : </div>
												<div id="nama">Saya</div>
												<div id="kunjungan">Alamat</div>
												<div id="nama">Jl. Jalan</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 col-sm-4 col-md-3 card-status-kunjungan">
									<div class="card" style="background-color: #5a357e;">
										<div class="card-body p-0">
											<div id="nama">Firza</div>
											<div class="card" style="border-radius: 0px; border-width: 0px">
												<div class="card-body status-warna" style="background-color: #FFFF05;border-radius: 0px;padding: 5%">
													<img src="../img/sample.jpg"">
												</div>
											</div>
											<div class="keterangan" style="text-align: left;margin-left: 2px">
												<div id="kunjungan">Kepala Keluarga : </div>
												<div id="nama">Saya</div>
												<div id="kunjungan">Alamat</div>
												<div id="nama">Jl. Jalan</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 col-sm-4 col-md-3 card-status-kunjungan">
									<div class="card" style="background-color: #9d262a;">
										<div class="card-body p-0">
											<div id="nama">Firza</div>
											<div class="card" style="border-radius: 0px; border-width: 0px">
												<div class="card-body status-warna" style="background-color: #FFFF05;border-radius: 0px;padding: 5%">
													<img src="../img/sample.jpg"">
												</div>
											</div>
											<div class="keterangan" style="text-align: left;margin-left: 2px">
												<div id="kunjungan">Kepala Keluarga : </div>
												<div id="nama">Saya</div>
												<div id="kunjungan">Alamat</div>
												<div id="nama">Jl. Jalan</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 col-sm-4 col-md-3 card-status-kunjungan">
									<div class="card" style="background-color: #5a357e;">
										<div class="card-body p-0">
											<div id="nama">Firza</div>
											<div class="card" style="border-radius: 0px; border-width: 0px">
												<div class="card-body status-warna" style="background-color: #FFFF05;border-radius: 0px;padding: 5%">
													<img src="../img/sample.jpg"">
												</div>
											</div>
											<div class="keterangan" style="text-align: left;margin-left: 2px">
												<div id="kunjungan">Kepala Keluarga : </div>
												<div id="nama">Saya</div>
												<div id="kunjungan">Alamat</div>
												<div id="nama">Jl. Jalan</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 col-sm-4 col-md-3 card-status-kunjungan">
									<div class="card" style="background-color: #5a357e;">
										<div class="card-body p-0">
											<div id="nama">Firza</div>
											<div class="card" style="border-radius: 0px; border-width: 0px">
												<div class="card-body status-warna" style="background-color: #FFFF05;border-radius: 0px;padding: 5%">
													<img src="../img/sample.jpg"">
												</div>
											</div>
											<div class="keterangan" style="text-align: left;margin-left: 2px">
												<div id="kunjungan">Kepala Keluarga : </div>
												<div id="nama">Saya</div>
												<div id="kunjungan">Alamat</div>
												<div id="nama">Jl. Jalan</div>
											</div>
										</div>
									</div>
								</div>
								<!-- akhir dari ini -->
							</div>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>
	<!-- baris-2 -->
</body>
</html>