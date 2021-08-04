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
					$varberanda = 'beranda';
					$vardaftarsc = 'daftarsc';
					$varpengaturan = 'pengaturan';
				?>
                <center><h1>Selamat Datang <?php echo $this->session->userdata('nama'); ?></h1></center>
                <hr/>
                <ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link <?php if($navaktif=='beranda') {echo 'active'; $varberanda='#';}; ?>" href="<?php echo $varberanda;?>">+ Baru</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if($navaktif=='daftarsc') {echo 'active'; $vardaftarsc='#';}; ?>" href="<?php echo $vardaftarsc;?>">Daftar Source Code</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if($navaktif=='pengaturan') {echo 'active'; $varpengaturan='#';}; ?>" href="<?php echo $varpengaturan;?>">Pengaturan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Profil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/masuk/logout">Keluar</a>
				</li>
                </ul>