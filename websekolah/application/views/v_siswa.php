<!-- Home -->

<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><?= $title ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
<!-- Contact -->


<!-- Newsletter -->
<div class="contact">

		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Daftar Siswa</h2><br><br>
                    </div>
                        <div class="col-lg-12">
                            <table class="table table-bordered" id="myTable">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="50px">NIS</th>
                                        <th class="text-center">Nama Siswa</th>
                                        <th class="text-center" width="100px">Kelas</th>
                                        <th class="text-center" width="100px">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($siswa as $key => $value) { ?>
                                    <tr>
                                        <td class="text-center"><?= $value->nis ?></td>
                                        <td> <a target="_blank" href="<?= base_url('home/detail_siswa/'.$value->nis) ?>"><?= $value->nama_siswa ?></a></td>
                                        <td> <?= $value->kelas ?></td>
                                        <td class="text-center"> <?= $value->status_siswa ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
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

	<!-- Footer -->