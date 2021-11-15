<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('download/add') ?>" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        <div class="panel-body">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Keterangan</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($download as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->ket_file ?></td>
                        <td><?= $value->file ?></td>
                        <td>
                            <a href="<?= base_url('download/edit/'.$value->id_file) ?>" class="btn btn-sm btn-success" ><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger tombol-hapus" href="<?= base_url('download/delete/'.$value->id_file) ?>">  <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>