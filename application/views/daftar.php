<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>
	<body>
	<p></p>
	<div class="container">
		<div class="card">
			<div class="card-header">Halaman Mendaftarkan Akun Baru</div>
			<div class="card-body">
				<?php
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
				<form method="post" action="<?php echo base_url(); ?>index.php/daftar/proses">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Username Anda">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password Anda">
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Anda">
					</div>
					<button type="submit" class="btn btn-primary">Daftar</button>
				</form>
			</div>
		</div>
	</div>
	</body>
</html>