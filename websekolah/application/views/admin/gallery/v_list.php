<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('gallery/add') ?>" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        <div class="panel-body">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Gallery</th>
                        <th>Sampul</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($gallery as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->nama_gallery ?></td>
                        <td class="text-center">
                            <img src="<?= base_url('sampul/'.$value->sampul) ?>" width="150px" alt=""><br>
                            <i class="fa fa-image"> <?= $value->jml_foto ?>  Foto</i><br>
                            <a href="<?= base_url('gallery/add_foto/'.$value->id_gallery) ?>" class="btn btn-success btn-xs"> <i class="fa fa-plus"></i> Tambah Foto</a>
                        </td>
                        <td>
                            <a href="<?= base_url('gallery/edit/'.$value->id_gallery) ?>" class="btn btn-sm btn-success" ><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger tombol-hapus" href="<?= base_url('gallery/delete/'.$value->id_gallery) ?>">  <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>