<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
        Tambah Berita
        </div>
        <div class="panel-body">
            <?php

                if (isset($error_upload)) {
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                }

                echo validation_errors('
                    <div class="alert alert-danger alert-dismissible col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>'
                );
                

                echo form_open_multipart('berita/add');
            ?>
            
            <div class="form-group col-md-12">
                <label>Judul Berita</label>
                <input class="form-control" type="text" name="judul_berita" placeholder="Judul Berita" required>
            </div>

            <div class="form-group col-md-12">
                <label>Gambar berita</label>
                <input type="file" class="form-control" name="gambar_berita" required>
            </div>

            <div class="form-group col-md-12">
                <label>Isi berita</label>
                <textarea name="isi_berita" id="editor" required></textarea>
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