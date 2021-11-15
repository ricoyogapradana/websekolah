<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('berita/add') ?>" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        <div class="panel-body">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Berita</th>
                        <th>Tanggal Rilis</th>
                        <th>Gambar</th>
                        <th>Pembuat Berita</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($berita as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->judul_berita ?></td>
                        <td><?= $value->tgl_berita ?></td>
                        <td><img src="<?= base_url('gambar_berita/'.$value->gambar_berita) ?>" width="150px" alt=""></td>
                        <td><?= $value->nama_user ?></td>
                        
                        <td>
                            <a href="<?= base_url('berita/edit/'.$value->id_berita) ?>" class="btn btn-sm btn-success" ><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger tombol-hapus" href="<?= base_url('berita/delete/'.$value->id_berita) ?>">  <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>