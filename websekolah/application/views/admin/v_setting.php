<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>

<?php
    echo form_open_multipart('admin/setting');
?>

<div class="col-md-12">
<h3>-- Kepala sekolah --</h3><br>
    <div class="col-sm-4 text-center">
    <!-- <label>Foto Kepala Sekolah</label><br> -->
    <img src="<?= base_url('setting/foto_kepsek/'.$setting->foto_kepsek)?>" width="150px">
    </div>
    <div class="form-group col-md-4">
        <label>Nama</label>
        <input class="form-control" type="text" name="kepala_sekolah" placeholder="Nama Kepala Sekolah" value="<?= $setting->kepala_sekolah ?>">
    </div>
    <div class="form-group col-md-4">
        <label>NIP</label>
        <input class="form-control" type="text" name="nip" placeholder="NIP Kepala Sekolah" value="<?= $setting->nip ?>">
    </div>
    <div class="form-group col-md-8">
        <label>Ubah Foto Kepala Sekolah</label>
        <input type="file" class="form-control" name="foto_kepsek">
    </div>
</div>
<br>
<div class="col-md-12">
<h3> -- Informasi Sekolah --</h3><br>
    <div class="col-sm-4 text-center">
    <label>Logo Sekolah</label><br>
    <img src="<?= base_url('setting/foto_sekolah/'.$setting->logo_sekolah)?>" width="150px">
    </div>
    <div class="form-group col-md-4">
        <label>Nama</label>
        <input class="form-control" type="text" name="nama_sekolah" placeholder="Nama Sekolah" value="<?= $setting->nama_sekolah ?>">
    </div>
    <div class="form-group col-md-4">
        <label>NPSN</label>
        <input class="form-control" type="text" name="npsn_sekolah" placeholder="NPSN Sekolah" value="<?= $setting->npsn_sekolah ?>">
    </div>
    <div class="form-group col-md-4">
        <label>No Telp <a data-toggle="tooltip" data-placement="top" title="NO TELP HARUS DI AWALI DENGAN 62 KARENA LANGSUNG DIRECT KE LINK WHATSAPP "><i class="fa fa-info-circle"></i></a></label>
        <input class="form-control" type="text" name="no_telepon" placeholder="NIS" value="<?= $setting->no_telepon ?>">
    </div>
    <div class="form-group col-md-4">
        <label>Email Sekolah</label>
        <input class="form-control" type="text" name="email_sekolah" placeholder="NIS" value="<?= $setting->email_sekolah ?>">
    </div>
    <!-- <div class="form-group col-md-4">
        <label>Ubah Logo Sekolah</label>
        <input type="file" class="form-control" name="logo_sekolah" >
    </div> -->
    <div class="form-group col-md-8">
        <label>Alamat Sekolah</label>
        <input class="form-control" type="text" name="alamat" placeholder="NIS" value="<?= $setting->alamat ?>">
    </div>
</div>

<div class="col-sm-12">
    <div class="form-grup col-sm-6">
        <label>Visi  
        <a data-toggle="tooltip" data-placement="top" title="Untuk saat ini enter menggunakan script <br> "><i class="fa fa-info-circle"></i></a></label>
        <textarea class="form-control" name="visi" id="" cols="30" rows="10"><?= $setting->visi ?></textarea>
    </div>

    <div class="form-grup col-sm-6">
        <label>Misi <a data-toggle="tooltip" data-placement="top" title="Untuk saat ini enter menggunakan script <br> "><i class="fa fa-info-circle"></i></a></label>
        <textarea class="form-control" name="misi" id="" cols="30" rows="10"><?= $setting->misi ?></textarea><br>
    </div>

    
</div> 

<div class="col-md-12">
    <!-- <h3>-- Informasi Lain --</h3> -->
    <div class="form-grup col-sm-12 text-right">
    <button type="submit" class="btn btn-success">Simpan</button><br>
</div>
</div>


<?php 
form_close();
?>