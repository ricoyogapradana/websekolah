<!-- Home -->

<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('') ?>">Home</a></li>
								<li><?= $title ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>


    <div class="courses">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img class="img-thumbnail img-fluid" src="<?= base_url('setting/foto_kepsek/'.$sekolah->foto_kepsek)?>" width="250px"><br>
                    <h4><?= $sekolah->kepala_sekolah?></h4>
                    <h4>NIP : <?= $sekolah->nip?></h4><br><hr>
                </div>
                <div class="col-md-8 ">
                    <div class="text-center">
                    <label class="" for=""><h3 ><?= $sekolah->nama_sekolah?></h3>
                    <p>Alamat : <?= $sekolah->alamat?></p></label>
                    </div>
                    
                    <hr>
                    <div class="">
                        <h3>Visi</h3><br>
                        <p><?= $sekolah->visi ?></p><br>
                    </div>
                    <div class="">
                        <h3>Misi</h3><br>
                        <p><?= $sekolah->misi ?></p><br>
                    </div>
                    <hr>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $sekolah->no_telepon?>" class="btn btn-success"><i class="fa fa-whatsapp text-white "> <?= $sekolah->no_telepon ?></i></a>
                    <a href="mailto:<?= $sekolah->email_sekolah?>" class="btn btn-info"><i class="fa fa-envelope-o"> <?= $sekolah->email_sekolah ?></i></a>
                    
                </div>
                
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