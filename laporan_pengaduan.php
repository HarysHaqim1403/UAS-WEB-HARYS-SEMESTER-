<!DOCTYPE html>
<html>
<head>
	<title>Menu Pegawai</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Menu Pegawai</h2>
	</div>
	<div class="content">
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="success" >
				<?php 
					echo $_SESSION['success']; 
					unset($_SESSION['success']);
				?>
			</div>
		<?php endif ?>

		<?php  if (isset($_SESSION['user'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['user']['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
			<br>
			<h3>Daftar Pengaduan Masyarakat</h3>
			<table>
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Pelapor</th>
						<th>Jenis Pengaduan</th>
						<th>Tanggal Pengaduan</th>
						<th>Isi Laporan</th>
					</tr>
				</thead>
				<tbody>
				<?php
				//koneksi ke database
				$database = new mysqli("localhost","username","password","database_name");

				//cek koneksi
				if ($database -> connect_errno) {
					echo "Failed to connect to MySQL: " . $database -> connect_error;
					exit();
				}

				//query pengaduan
				$query = "SELECT * FROM pengaduan";
				$result = $database->query($query);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row["id_pengaduan"]. "</td><td>" . $row["nama_pelapor"] . "</td><td>" . $row["jenis_pengaduan"]. "</td><td>" . $row["tanggal_pengaduan"]. "</td><td>" . $row["isi_laporan"]. "</td></tr>";
					}
				} else {
					echo "0 results";
				}
				$database->close();
				?>
				</tbody>
			</table>

		<?php endif ?>
	</div>
		
</body>
</html>