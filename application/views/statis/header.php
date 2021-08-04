<html>
	<head>
		<title>C ARM Linux Compiler</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	</head>
	<body>
	<p></p>
	<div class="container-fluid">
		<div class="card">
			<div class="card-header">Dashboard</div>
            <div class="card-body">
				<?php
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
                
				<?php
				if($this->session->flashdata('success_scdisimpan') !='')
				{
					echo '<div class="alert alert-info" role="alert">';
					echo $this->session->flashdata('success_scdisimpan');
					echo '</div>';
				}
				?>

				<?php
					$navaktif = $this->session->userdata('navaktif');
				?>
                <center><h1>Selamat Datang <?php echo $this->session->userdata('nama'); ?></h1></center>
                <hr/>
                <ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link <?php if($navaktif=='beranda') {echo 'active';}; ?>" href="beranda">+ Baru</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if($navaktif=='daftarsc') {echo 'active';}; ?>" href="daftarsc">Daftar Source Code</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if($navaktif=='pengaturan') {echo 'active';}; ?>" href="pengaturan">Pengaturan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="profil">Profil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/masuk/logout">Keluar</a>
				</li>
                </ul>