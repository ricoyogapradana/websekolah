<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
        Edit Data Guru
        </div>
        <div class="panel-body">
            <?php

            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');

                if (isset($error_upload)) {
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                }

                echo form_open_multipart('guru/edit/'.$guru->id_guru);
            ?>
            
            <div class="form-group col-md-12">
                <label>NIP</label>
                <input class="form-control" type="text" value="<?= $guru->nip ?>"  name="nip" placeholder="NIP" required>
            </div>

            <div class="form-group col-md-12">
                <label>Nama Guru</label>
                <input class="form-control" type="text" value="<?= $guru->nama_guru ?>" name="nama_guru" placeholder="Nama Guru" required>
            </div>

            <div class="form-group col-md-6">
                <label>Tempat Lahir</label>
                <input class="form-control" type="text" value="<?= $guru->tempat_lahir ?>" name="tempat_lahir" placeholder="Tempat Lahir" required>
            </div>

            <div class="form-group col-md-6">
                <label> Tanggal Lahir <a data-toggle="tooltip" data-placement="top" title="Bisa juga menggunakan format (YYYY-mm-dd)"><i class="fa fa-info-circle"></i></a></label>
                <input class="form-control" type="text" value="<?= $guru->tgl_lahir ?>" name="tgl_lahir" id="tanggal" placeholder="Tanggal Lahir" required>
            </div>

            <div class="form-group col-md-6">
                <label>Mata Pelajaran</label>
                <select name="id_mapel" class="form-control">
                    <option value="<?= $guru->id_mapel ?>"><?= $guru->nama_mapel ?></option>
                    <?php foreach ($mapel as $key => $value) { ?>
                        <option value="<?= $value->id_mapel ?>"><?= $value->nama_mapel ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label>Pendidikan</label>
                <input class="form-control" type="text" value="<?= $guru->pendidikan ?>" name="pendidikan" placeholder="Pendidikan" required>
            </div>

            <div class="form-group col-md-6">
                <label>Foto Guru <br> Saat Ini</label>
                <img src="<?= base_url('foto_guru/'.$guru->foto_guru) ?>" width="150px" alt="">
            </div>

            <div class="form-group col-md-6">
                <label>Ganti Foto Guru</label>
                <input type="file" class="form-control" name="foto_guru">
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