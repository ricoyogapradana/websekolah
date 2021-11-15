<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
        Tambah Foto Gallery
        </div>
        <div class="panel-body">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
            <?php

                if (isset($error_upload)) {
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                }

                echo validation_errors('
                    <div class="alert alert-danger alert-dismissible col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>'
                );

                // if ($this->session->flashdata('pesan')) {
                //     echo '<div class="alert alert-success alert-dismissible">
                //         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                //     echo $this->session->flashdata('pesan');
                //     echo '</div>';
                // }
                

                echo form_open_multipart('gallery/add_foto/'.$gallery->id_gallery);
            ?>

            <div class="form-group col-md-6">
                <label>Keterangan Foto</label>
                <input class="form-control" type="text" name="ket_foto" placeholder="Keterangan Foto" required>
            </div>

            <div class="form-group col-md-6">
                <label>Foto</label>
                <input type="file" class="form-control" name="foto" required>
            </div>

            
            <div class="form-group col-md-12">
            <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('gallery') ?>" class="btn btn-warning">Kembali</a>
                <hr>
            </div>

            <?php echo form_close();?>

            
            <?php foreach ($foto as $key => $value) { ?>
                <div class="col-6 col-md-3 text-center">
                    <label for=""><?= $value->ket_foto ?></label><br>
                    <a href="<?= base_url('foto/'.$value->foto) ?>"><img class="rounded img-fluid" src="<?= base_url('foto/'.$value->foto) ?>" width="210px" height="210px"></a>
                    <br>
                    <a href="<?= base_url('gallery/delete_foto/'.$value->id_gallery.'/'.$value->id_foto) ?>" class="btn btn-danger btn-sm btn-block tombol-hapus"><i class="fa fa-trash"></i></a><br>
                </div>
            <?php } ?>
            
            
        </div>
    </div>
</div>