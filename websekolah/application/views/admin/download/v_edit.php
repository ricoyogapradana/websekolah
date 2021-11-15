<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
        Edit Data
        </div>
        <div class="panel-body">
            <?php

                if (isset($error_upload)) {
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                }

                echo form_open_multipart('download/edit/'.$download->id_file);
            ?>
            
            <div class="form-group col-md-12">
                <label>Ket File</label>
                <input class="form-control" type="text" value="<?= $download->ket_file ?>" name="ket_file" placeholder="Keterangan File" required>
            </div>

            <div class="form-group col-md-12">
                <label>File</label>
                <input type="file" class="form-control" name="file">
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