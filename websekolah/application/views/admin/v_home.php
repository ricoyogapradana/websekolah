<div class="row">
    <div class="col-md-8">
    <div class="alert alert-success" role="alert">
        Halo.. <b><?= $this->session->userdata('nama_user'); ?></b>
    </div>
    <div class="card">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>
              <?php
                  date_default_timezone_set("Asia/Jakarta");
                  $b = time();
                  $hour = date("G",$b);
                  if ($hour>=4 && $hour<=10)
                  {
                  echo "<h4>Selamat Pagi</h4>";
                  }
                  elseif ($hour >=11 && $hour<=14)
                  {
                  echo "<h4>Selamat Siang</h4> ";
                  }
                  elseif ($hour >=15 && $hour<=18)
                  {
                  echo "<h4>Selamat Sore</h4>";
                  }
                  elseif ($hour >=19 && $hour<=23)
                  {
                  echo "<h4>Selamat Malam</h4>";
                  }
                  elseif ($hour >=00 && $hour<=3)
                  {
                  echo "<h4>Mimpi Indah</h4>";
                  }
              ?>
            </p>
            <footer class="blockquote-footer">
            
            <?php
                  date_default_timezone_set("Asia/Jakarta");
                  $b = time();
                  $hour = date("G",$b);
                  if ($hour>=4 && $hour<=6)
                  {
                  echo "Sudah sarapan ? ";
                  }
                  elseif ($hour>=7 && $hour<=10)
                  {
                  echo "Selamat beraktivitas ";
                  }
                  elseif ($hour >=11 && $hour<=12)
                  {
                  echo "Udah siang gak istirahat ? ";
                  }
                  elseif ($hour >=13 && $hour<=16)
                  {
                  echo "Selamat beraktivitas ";
                  }
                  elseif ($hour >=17 && $hour<=18)
                  {
                  echo "Udah sore ngapain masih disini.. ?";            
                  }
                  elseif ($hour >=19 && $hour<=20)
                  {
                  echo "Bagaimana hari ini ?";
                  }
                  elseif ($hour >=19 && $hour<=23)
                  {
                  echo "Masih disini aja.. ? ";
                  }
                  elseif ($hour >=00 && $hour<=3)
                  {
                  echo "Gak tidur ?";
                  }
              ?>
            
            <cite title="">

            <?php
                  date_default_timezone_set("Asia/Jakarta");
                  $b = time();
                  $hour = date("G",$b);
                  if ($hour >=11 && $hour<=12)
                  {
                  echo "Nanti lanjutin lagi kerjanya ";
                  }
                  elseif ($hour >=17 && $hour<=18)
                  {
                  echo "Mending istirahat";
                  }
                  elseif ($hour >=19 && $hour<=23)
                  {
                  echo "Jangan begadang terlalu lama..";
                  }
                  elseif ($hour >=00 && $hour<=3)
                  {
                  echo "Kopi enak nih..";
                  }
            ?>
            </cite></footer>
          </blockquote>
        </div>
      </div>
    </div>
    <div class="col-md-4">

    <div class="alert alert-warning" role="alert">
        <i class="fa fa-info text-info"></i><b class="text-info"> INFORMASI </b><hr>
        <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <i class="fa fa-warning text-danger " title="Tekan aku untuk mengetahui perkembangan"> <a target="_blank" class="text text-danger" href="http://covid19.kemkes.go.id/"><b class="text-danger">COVID-19 Alert</b></a>  </i><br>
            <b>Hello..  <?= $this->session->userdata('nama_user'); ?> How are you ? Stay Safe Friend </b>
        </div>
        <div class="alert alert-info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <i class="fa fa-info text-success"> <b>PROTIP</b> </i><br>
            <b>Disarankan Membuka aplikasi admin di DESKTOP </b>
        </div>
    </div>
      <b>Shortcut</b><br><br>
      <a class="btn btn-danger" href="<?= base_url('berita/add') ?>"><i class="fa fa-newspaper-o fa-fw"></i> Buat Berita</a>
      <a class="btn btn-warning" href="<?= base_url('pengumuman/add') ?>"><i class="fa fa-file fa-fw"></i> Buat Pengumuman</a>
      <br><br><b>Shortcut User</b>
      <br><br><a class="btn btn-info" href="<?= base_url('guru/add') ?>"><i class="fa fa-users fa-fw"></i> Tambah Guru</a>
      <a class="btn btn-primary" href="<?= base_url('siswa/add') ?>"><i class="fa fa-mortar-board fa-fw"></i> Tambah Siswa</a>
      <!-- <br><br><a class="btn btn-danger align-right" href="<?= base_url('login/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a> -->
    
      
      
    </div>
  </div>


