<!-- Home -->

<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('') ?>">Home</a></li>
								<li><a href="<?= base_url('home/siswa')?>">Siswa</a></li>
                                <li><?= $nama_siswa->nama_siswa ?> (<?= $nama_siswa->nis?>)</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<div class="about">
		<div class="container">
			<div class="card mb-3  col-md-12" style=""><br>
			<div class="row">
				<div class="col-md-4 text-right">
				<img src="<?= base_url('setting/foto_sekolah/'.$sekolah->logo_sekolah) ?>" width="50px">
				</div>
				<div class="col-md-8">
				<h3><?= $sekolah->nama_sekolah?></h3>
				<p><?= $sekolah->alamat ?></p>
				</div>
			</div>
			<hr>
				<div class="row no-gutters">
					<div class="col-md-4 text-center">
					<img src="<?= base_url('foto_siswa/'.$nama_siswa->foto_siswa) ?>" class="img-thumbnail " width="180px" alt="foto_<?= $nama_siswa->nama_siswa?>">
					</div>
					<div class="col-md-2 col-5">
					<div class="card-body">
						<p class="card-text">
						NIS<br>
						Nama<br>
						Tempat, Tgl Lahir<br>
						Kelas<br>
						Status<br>
						</p>
						
					</div>
					</div>
					<div class="col-md-6 col-7">
					<div class="card-body">
					<p class="card-text">
					: <?= $nama_siswa->nis ?><br>
					: <?= $nama_siswa->nama_siswa?><br>
					: <?= $nama_siswa->tempat_lahir ?>, <?php echo tanggal() ?><br>
					: <?= $nama_siswa->kelas ?><br>
					: <?= $nama_siswa->status_siswa ?>
					</p>
					</div>
					</div>
				</div>
				<hr>
				<p class="card-text text-center"><small class="text-muted">Siswa ini t</small></p>
				</div>
	</div>
</div>












    <div class="newsletter">
		<div class="newsletter_background" style="background-image:url(<?= base_url() ?>template/front-end/images/newsletter_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">sign up for news and offers</div>
							<div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
						</div>

						<!-- Newsletter Form -->
						<div class="newsletter_form_container ml-lg-auto">
							<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
								<input type="email" class="newsletter_input" placeholder="Your Email" required="required">
								<button type="submit" class="newsletter_button">subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>