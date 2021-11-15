<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
        Tambah Pengumuman
        </div>
        <div class="panel-body">
            <?php
                echo form_open_multipart('pengumuman/add');
            ?>
            
            <div class="form-group col-md-12">
                <label>Judul Pengumuman</label>
                <input class="form-control" type="text" name="judul_pengumuman" placeholder="Judul Pengumuman" required>
            </div>

            <div class="form-group col-md-12">
                <label>Isi Pengumuman</label>
                <textarea name="isi_pengumuman" class="form-control" placeholder="Isi Pengumuman" id="" cols="30" rows="10" required></textarea>
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