<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicons -->
	<link href="../assets/img/icon.png" rel="icon">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- Main CSS File -->
	<link href="../assets/css/admin-style.css" rel="stylesheet">

	<title>AdminHub</title>
	<!-- framework CSS Files -->
	<link href="../assets/framework/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/framework/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="<?= base_url('dashboard'); ?>" class="brand textdecoration-none">
			<div class="nav-logo">
				<img src="../assets/img/icon.png">
				<span>Admin Page</span>
			</div>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="<?= base_url('dashboard'); ?>" class="textdecoration-none">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url("semuaRuangan"); ?>" class="textdecoration-none">
					<i class='bx bi bi-building'></i>
					<span class="text">Semua Ruangan</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('ruanganTerpakai'); ?>" class="textdecoration-none">
					<i class='bx bi bi-building-fill-lock'></i>
					<span class="text">Ruangan Terpakai</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('ruanganTidakTerpakai'); ?>" class="textdecoration-none">
					<i class='bx bi bi-building-fill-exclamation'></i>
					<span class="text">Ruangan Tidak Terpakai</span>
				</a>
			</li>
			<li>
				<a href="ruanganTerpinjam.html" class="textdecoration-none">
					<i class='bx bi bi-building-check'></i>
					<span class="text">Ruangan Terpinjam</span>
				</a>
			</li>
			<li>
				<a href="notifikasi.html" class="textdecoration-none">
					<i class='bx bi bi-bell'></i>
					<span class="text">Notifikasi</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url("daftarAccount"); ?>" class="textdecoration-none">
					<i class="bx bi bi-person-circle"></i>
					<span class="text">Daftar Acount</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu" class="textdecoration-none">
			<li>
				<a href="<?= base_url('logout'); ?>" class="logout textdecoration-none">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main class="padding-top-main">
			<ul class="box-info">
				<li>
					<i class="bx bi bi-building"></i>
					<span class="text">
						<h3>100</h3>
						<p>Total Semua Ruang</p>
					</span>
				</li>
				<li>
					<i class='bx bi-building-check'></i>
					<span class="text">
						<h3>80</h3>
						<p>Total Ruang Terpakai</p>
					</span>
				</li>
				<li>
					<i class='bx bi-building-add'></i>
					<span class="text">
						<h3>20</h3>
						<p>Total Ruang Kosong</p>
					</span>
				</li>
			</ul>
			<ul class="box-info">
				<li>
					<i class='bx bi-bell'></i>
					<span class="text">
						<h3>12</h3>
						<p>Total Semua Notifikasi</p>
					</span>
				</li>
				<li>
					<i class='bx bi-clock'></i>
					<span class="text">
						<h3>6</h3>
						<p>Total Ruangan Sedang Terpinjam</p>
					</span>
				</li>
				<li>
					<i class='bx bi-clipboard-data'></i>
					<span class="text">
						<h3>24</h3>
						<p>Total Ruangan Terpinjam</p>
					</span>
				</li>
				<li>
					<i class='bx bi-person'></i>
					<span class="text">
						<h3>24</h3>
						<p>Total Akun Terdaftar</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Ruang Terpakai</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>No. Ruang</th>
								<th>Durasi</th>
								<th>Mata Kuliah</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="../assets/img/icon.png">
									<p style="margin-top: 18px;">KU 01 03</p>
								</td>
								<td>10:00 - 12:30 Pm</td>
								<td>Ekonomi</td>
								<td><span class="status completed">Ongoing</span></td>
							</tr>
							<tr>
								<td>
									<img src="../assets/img/icon.png">
									<p style="margin-top: 18px;">KU 01 03</p>
								</td>
								<td>10:00 - 12:30 Pm</td>
								<td>Ekonomi</td>
								<td><span class="status completed">Ongoing</span></td>
							</tr>
							<tr>
								<td>
									<img src="../assets/img/icon.png">
									<p style="margin-top: 18px;">KU 01 03</p>
								</td>
								<td>10:00 - 12:30 Pm</td>
								<td>Ekonomi</td>
								<td><span class="status completed">Ongoing</span></td>
							</tr>
							<tr>
								<td>
									<img src="../assets/img/icon.png">
									<p style="margin-top: 18px;">KU 01 03</p>
								</td>
								<td>10:00 - 12:30 Pm</td>
								<td>Ekonomi</td>
								<td><span class="status completed">Ongoing</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Ruangan Sedang Terpinjam</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>No. Ruang</th>
								<th>Durasi</th>
								<th>Mata Kuliah</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="../assets/img/icon.png">
									<p style="margin-top: 18px;">KU 01 03</p>
								</td>
								<td>10:00 - 12:30 Pm</td>
								<td>Ekonomi</td>
								<td><span class="status completed">Ongoing</span></td>
							</tr>
							<tr>
								<td>
									<img src="../assets/img/icon.png">
									<p style="margin-top: 18px;">KU 01 03</p>
								</td>
								<td>10:00 - 12:30 Pm</td>
								<td>Ekonomi</td>
								<td><span class="status completed">Ongoing</span></td>
							</tr>
							<tr>
								<td>
									<img src="../assets/img/icon.png">
									<p style="margin-top: 18px;">KU 01 03</p>
								</td>
								<td>10:00 - 12:30 Pm</td>
								<td>Ekonomi</td>
								<td><span class="status completed">Ongoing</span></td>
							</tr>
							<tr>
								<td>
									<img src="../assets/img/icon.png">
									<p style="margin-top: 18px;">KU 01 03</p>
								</td>
								<td>10:00 - 12:30 Pm</td>
								<td>Ekonomi</td>
								<td><span class="status completed">Ongoing</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="../assets/js/admin-script.js"></script>
</body>

</html>