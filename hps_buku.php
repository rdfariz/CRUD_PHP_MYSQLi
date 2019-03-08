<!DOCTYPE html>
<html>
<head>
	<title>Hapus Buku</title>
	<link rel="stylesheet" type="text/css" href="CSS/sidebar.css">
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
</head>
<body>
	<div id="container">
		<ul class="nav nav-pills nav-stacked sidebar">
			 <li role="presentation"><a href="index.php">Tambah Mahasiswa</a></li>
			 <li role="presentation"><a href="tambah_buku.php">Tambah Buku</a></li>
			 <li role="presentation"><a href="pinjam_buku.php">Peminjaman Buku</a></li>
			 <li role="presentation"><a href="hapusmhs.php">Hapus Mahasiswa</a></li>
       <li role="presentation" class="active"><a href="hps_buku.php">Hapus Buku</a></li>
			 <li role="presentation"><a href="lihatdata.php">Lihat Data</a></li>
			 <li role="presentation"><a href="cari.php">Cari</a></li>
			 <li role="presentation"><a href="update.php">Update</a></li>
		</ul>
		<div id="content">
			<form class="form-horizontal" method="post">
				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Nama Buku</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Buku" name="nama_buku">
				    </div>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success" name="hapus">Hapus Buku</button>
					</div>
  				</div>
			</form>
			<?php
				include("config.php");
				if (isset($_POST['hapus'])) {
					$nama_buku=$_POST['nama_buku'];
					$query="delete from buku where nama_buku='$nama_buku'";
					$hapus=mysqli_query($conn, $query);
					if($hapus==true){
						?>
						<script type="text/javascript">alert('Data berhasil dihapus!');</script>
						<?php
					}else{
						?>
						<script type="text/javascript">alert('Gagal!');</script>
						<?php
					}
				}
			?>
		</div>
	</div>
</body>
</html>