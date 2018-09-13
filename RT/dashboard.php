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
	<link rel="stylesheet" type="text/css" href="../style/RT/dashboard.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/RT/dashboard.js"></script>
	<script src="../js/counter.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['keterangan', 'rating'],
				<?php
				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
						echo "['".$row['keterangan']."', ".$row['rating']."],";
					}
				}
				?>
				]);
			var options = {
				title: "Persentase Kehadiran Warga dalam Kegiatan RT",
				titlePosition: 'none',
				height: 500,
				backgroundColor: '#563D7C',
				colors:['#00ff84','#00acec','#ca0088'],
				fontName: 'montserrat',
				fontSize: 14,
				backgroundColor: '#FFFFFF',
				chartArea:{left:20,right:20,top:10,width:'100%',height:'75%'},
				legend:{
					position: 'bottom'
				}
			};
			var w = window.innerWidth;
			if(w<=360){
				var options = {
					colors:['#00ff84','#00acec','#ca0088'],
					chartArea:{left:20,right:20,top:10,width:'100%',height:'75%'},
					legend: 'none'
				};
			}
			var chart = new google.visualization.PieChart(document.getElementById('piechart'));
			chart.draw(data, options);
		}
	</script>
	<title>Home</title>
</head>
<body class="body">

	<nav class="navbar sticky-top navbar-expand-lg navbar-light d-flex">
		<a class="navbar-brand navbar-start" href="#"><img src="../img/logo.png" width = "140"; height = "45"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item active">
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
							<a class="dropdown-item" href="#topbar">Action</a>
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

	
	<div class="container-fluid">

		<!--baris 1-->
		<div class="row">
			<!--dashboard mini-->
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
						<a href="data-warga-1.php" class="btn btn-dashboard btn-primary" role="button">
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
			<!--dashboard Desktop-->
			<div class="card-body sidenav mt-4 col-12 col-sm-12 col-md-12 col-lg-3" style="background-color: #232D3F; height: 100%">	
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
					<a href="data-warga-1.php" class="btn btn-dashboard btn-primary" role="button">
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

			<!-- Card Diagram Pie-->
			<div class="card card-diagram mt-4 col-11 col-sm-10 col-md-7 col-lg-4 p-0">
				<div class="card-body" style="font-size: 18px; color: #00acec; opacity: 0.8">
					<center>Persentase Kehadiran Warga dalam Kegiatan RT</center>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12">	
						<center><div id="piechart"></div></center>	
					</div>
				</div>
			</div>

			<!-- Card Captionnya Diagram-->
			<div class="card card-c-diagram mt-4 col-11 col-sm-10 col-md-4 col-lg-4 p-0">
				<div class="card-body">
					<h6 style="color: #19B4ED">Total Warga (Kepala Keluarga) :</h6>
					<!-- Warga | Kepala Keluarga -->
					<div class="counter">
						<i class="material-icons">
							group
						</i>
						<h4 class="timer count-title count-number" data-to="180" data-speed="1500"></h4>
						Warga
					</div>
					<br>
					<div class="counter">						
						<i class="material-icons">
							person
						</i>
						<h4 class="timer count-title count-number" data-to="45" data-speed="5000"></h4>
						Kepala Keluarga
					</div>
					<br>	
					<h6 style="color: #19B4ED">Total Program Kerja Tuntas :</h6>
					<!-- TOTAL PROKER | TUNTAS -->
					<div class="counter">
						<i class="material-icons">
							work
						</i>
						<h4 class="timer count-title count-number" data-to="20" data-speed="3000"></h4>
						Program Kerja
					</div>
					<br>
					<div class="counter">
						<i class="material-icons">
							check_box
						</i>
						<h4 class="timer count-title count-number" data-to="5" data-speed="5000"></h4>
						Tuntas
					</div>
					<br>
					<h6 style="color: #19B4ED">Total Persentase Kehadiran Warga :</h6>
					<i class="material-icons" style="color:#32FF9C">
						check
					</i><h4> 54.5</h4>% Hadir
					<br> 
					<i class="material-icons" style="color:#32BCEF">
						remove
					</i><h4> 30.3</h4>% Izin 
					<br>
					<i class="material-icons" style="color:#D4329F">
						clear
					</i><h4> 15.2</h4>% Alfa
					<br>
					<br>
					<h6 style="color: #19B4ED">Total Kepala Keluarga Telah Dikunjungi :</h6>
					<i class="material-icons">
						done_outline
					</i>
					<h4> 5</h4> dari <h4>45</h4> Kepala Keluarga
					<br>
					<br>
					<h6 style="color: #19B4ED">Total Laporan (Ditindak) :</h6>
					<i class="material-icons">
						error
					</i>
					<h4> 53</h4> Laporan <h4>(20</h4> Laporan <h4>)</h4>
					<style type="text/css">
					h4{
						color: #FFA500;
						display: inline;
					}
				</style>
			</div>
		</div>
	</div>
</div>

<!-- baris-2 -->
<div class="container-fluid container-laporan">
	<div class="row">

		<!-- Card table laporan warga-->
		<div class="card card-tabel-laporan mt-4 col-11 col-sm-10 col-md-11 col-lg-8 p-0">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-striped table-sm">
						<h5 style="color: #19B4ED">Laporan Warga RT</h5>
						<thead>
							<tr>
								<th scope="col">Tanggal</th>
								<th scope="col">Nama Pelapor</th>
								<th scope="col" style="width: 500px">Judul</th>
								<th scope="col"> </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th  id="tanggal" style="padding-top: 15px;;font-weight: normal" scope="row">01/02/2018</th>
								<td style="padding-top: 15px">Mark</td>
								<td style="padding-top: 15px">Otto</td>
								<td><a href="#" class="btn btn-laporan btn-primary" role="button">
									Detail
								</a></td>
							</tr>
							<tr>
								<th  style="padding-top: 15px;font-weight: normal" scope="row">2</th>
								<td style="padding-top: 15px">Jacob</td>
								<td style="padding-top: 15px">Thornton</td>
								<td><a href="#" class="btn btn-laporan btn-primary" role="button">
									Detail
								</a></td>
							</tr>
							<tr>
								<th  style="padding-top: 15px;font-weight: normal" scope="row">3</th>
								<td style="padding-top: 15px">Larry</td>
								<td style="padding-top: 15px">the Bird</td>
								<td><a href="#" class="btn btn-laporan btn-primary" role="button">
									Detail
								</a></td>
							</tr>
							<tr>
								<th  style="padding-top: 15px;font-weight: normal" scope="row">4</th>
								<td style="padding-top: 15px">Larry</td>
								<td style="padding-top: 15px">the Bird</td>
								<td><a href="#" class="btn btn-laporan btn-primary" role="button">
									Detail
								</a></td>
							</tr>
							<tr>
								<th  style="padding-top: 15px;font-weight: normal" scope="row">5</th>
								<td style="padding-top: 15px">Larry</td>
								<td style="padding-top: 15px">the Bird</td>
								<td><a href="#" class="btn btn-laporan btn-primary" role="button">
									Detail
								</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- baris-3 -->
<div class="container-fluid container-proker">
	<div class="row">

		<!-- Card table program kerja/kegiatan-->
		<div class="card card-tabel-proker mt-4 col-11 col-sm-10 col-md-11 col-lg-8 p-0">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-striped table-sm">
						<h5 style="color: #19B4ED">Program Kerja/Kegiatan RT</h5>
						<thead>
							<tr>
								<th scope="col">Akan Dikerjakan</th>
								<th scope="col">Sedang Dikerjakan</th>
								<th scope="col">Selesai Dikerjakan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row" style="font-weight: normal">1</th>
								<td>Mark</td>
								<td>Otto</td>
							</tr>
							<tr>
								<th scope="row" style="font-weight: normal">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
							</tr>
							<tr>
								<th scope="row" style="font-weight: normal">3</th>
								<td>Larry</td>
								<td>the Bird</td>
							</tr>
							<tr>
								<th scope="row" style="font-weight: normal">4</th>
								<td>Larry</td>
								<td>the Bird</td>
							</tr>
							<tr>
								<th scope="row" style="font-weight: normal">5</th>
								<td>Larry</td>
								<td>the Bird</td>
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