<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('pengumuman/add') ?>" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        <div class="panel-body">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Pengumuman</th>
                        <th>Isi Pengumuman</th>
                        <th>Tanggal Rilis</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($pengumuman as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->judul_pengumuman ?></td>
                        <td><?= $value->isi_pengumuman ?></td>
                        <td><?= $value->tgl ?></td>
                        <td>
                            <a href="<?= base_url('pengumuman/edit/'.$value->id_pengumuman) ?>" class="btn btn-sm btn-success" ><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger tombol-hapus" href="<?= base_url('pengumuman/delete/'.$value->id_pengumuman) ?>">  <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>