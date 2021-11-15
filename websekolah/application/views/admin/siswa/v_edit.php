<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
        Formulir Tambah Siswa
        </div>
        <div class="panel-body">
            <?php

                if (isset($error_upload)) {
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                }

                echo form_open_multipart('siswa/edit/'.$siswa->id_siswa);
            ?>
            
            <div class="form-group col-md-6">
                <label>NIS</label>
                <input class="form-control" type="text" value="<?= $siswa->nis ?>" name="nis" placeholder="NIS" required>
            </div>

            <div class="form-group col-md-6">
                <label>Nama Siswa</label>
                <input class="form-control" type="text" value="<?= $siswa->nama_siswa ?>" name="nama_siswa" placeholder="Nama Siswa" required>
            </div>

            <div class="form-group col-md-6">
                <label>Tempat Lahir</label>
                <input class="form-control" type="text" value="<?= $siswa->tempat_lahir ?>" name="tempat_lahir" placeholder="Tempat Lahir" required>
            </div>

            <div class="form-group col-md-6">
                <label>Tanggal Lahir</label>
                <input class="form-control" type="text" value="<?= $siswa->tgl_lahir ?>" name="tgl_lahir" id="tanggal" placeholder="Tanggal Lahir" required>
            </div>

            <div class="form-group col-md-6">
                <label>Kelas</label>
                <select name="kelas" class="form-control">
                        <option value="<?= $siswa->kelas ?>"><?= $siswa->kelas ?></option>
                        <!-- Kelas 10 -->
                            <option value="">--Kelas 10--</option>
                        <option value="X TAV">X TAV</option>
                            <option value="X TAV 1">X TAV 1</option>
                            <option value="X TAV 2">X TAV 2</option>
                            <option value="X TAV 3">X TAV 3</option>
                        <option value="X TKR">X TKR</option>
                            <option value="X TKR 1">X TKR 1</option>
                            <option value="X TKR 2">X TKR 2</option>
                            <option value="X TKR 3">X TKR 3</option>
                        <option value="X TKJ">X TKJ</option>
                            <option value="X TKJ 1">X TKJ 1</option>
                            <option value="X TKJ 2">X TKJ 2</option>
                            <option value="X TKJ 3">X TKJ 3</option>
                        <!-- Kelas 11 -->
                            <option value="">--Kelas 11--</option>
                        <option value="XI TAV">XI TAV</option>
                            <option value="XI TAV 1">XI TAV 1</option>
                            <option value="XI TAV 2">XI TAV 2</option>
                            <option value="XI TAV 3">XI TAV 3</option>
                        <option value="XI TKR">X TKR</option>
                            <option value="XI TKR 1">XI TKR 1</option>
                            <option value="XI TKR 2">XI TKR 2</option>
                            <option value="XI TKR 3">XI TKR 3</option>
                        <option value="XI TKJ">XI TKJ</option>
                            <option value="XI TKJ 1">XI TKJ 1</option>
                            <option value="XI TKJ 2">XI TKJ 2</option>
                            <option value="XI TKJ 3">XI TKJ 3</option>
                        <!-- Kelas 12 -->
                            <option value="" class="center-text">--Kelas 12--</option>
                        <option value="XII TAV">XII TAV</option>
                            <option value="XII TAV 1">XII TAV 1</option>
                            <option value="XII TAV 2">XII TAV 2</option>
                            <option value="XII TAV 3">XII TAV 3</option>
                        <option value="XII TKR">XII TKR</option>
                            <option value="XII TKR 1">XII TKR 1</option>
                            <option value="XII TKR 2">XII TKR 2</option>
                            <option value="XII TKR 3">XII TKR 3</option>
                        <option value="XII TKJ">XII TKJ</option>
                            <option value="XII TKJ 1">XII TKJ 1</option>
                            <option value="XII TKJ 2">XII TKJ 2</option>
                            <option value="XII TKJ 3">XII TKJ 3</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label>Foto Siswa</label>
                <input type="file" class="form-control" name="foto_siswa">
            </div>

            <div class="form-group col-md-6">
                <label>Foto Siswa Saat Ini</label>
                <img src="<?= base_url('foto_siswa/'.$siswa->foto_siswa) ?>" alt="" width="150px">
            </div>

            <div class="form-group col-md-6">
                <label>Status Siswa</label>
                <select name="status_siswa" class="form-control">
                        <option value="<?= $siswa->status_siswa ?>"><?= $siswa->status_siswa ?></option>
                        <!-- Kelas 10 -->
                        <option value="">------------------------</option>
                        <option value="SISWA AKTIF">SISWA AKTIF</option>
                        <option value="TA 2019/2020">TA 2019/2020</option>
                </select>
            </div>


            <div class="form-group col-md-12">
            <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>

            <?php echo form_close();?>
        </div>
    </div>
</div>