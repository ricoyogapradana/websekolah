<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
        Formulir Tambah Guru
        </div>
        <div class="panel-body">
            <?php

                if (isset($error_upload)) {
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                }

                echo form_open_multipart('guru/add');
            ?>
            
            <div class="form-group col-md-12">
                <label>NIP</label>
                <input class="form-control" type="text" name="nip" placeholder="NIP" required>
            </div>

            <div class="form-group col-md-12">
                <label>Nama Guru</label>
                <input class="form-control" type="text" name="nama_guru" placeholder="Nama Guru" required>
            </div>

            <div class="form-group col-md-6">
                <label>Tempat Lahir</label>
                <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
            </div>

            <div class="form-group col-md-6">
                <label>Tanggal Lahir <a data-toggle="tooltip" data-placement="top" title="Bisa juga menggunakan format (YYYY-mm-dd)"><i class="fa fa-info-circle"></i></a></label>
                <input class="form-control" type="text" name="tgl_lahir" id="tanggal" placeholder="Tanggal Lahir" required>
            </div>

            <div class="form-group col-md-6">
                <label>Mata Pelajaran</label>
                <select name="id_mapel" class="form-control">
                    <option value="">--Pilih Mata Pelajaran--</option>
                    <?php foreach ($mapel as $key => $value) { ?>
                        <option value="<?= $value->id_mapel ?>"><?= $value->nama_mapel ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label>Pendidikan</label>
                <input class="form-control" type="text" name="pendidikan" placeholder="Pendidikan" required>
            </div>

            <div class="form-group col-md-12">
                <label>Foto Guru</label>
                <input type="file" class="form-control" name="foto_guru" required>
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