<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('guru/add') ?>" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        <div class="panel-body">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama Guru</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Pendidikan</th>
                        <th>Mapel</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($guru as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->nip ?></td>
                        <td><?= $value->nama_guru ?></td>
                        <td><?= $value->tempat_lahir ?></td>
                        <td><?= $value->tgl_lahir ?></td>
                        <td><?= $value->pendidikan ?></td>
                        <td><?= $value->nama_mapel ?></td>
                        <td><img src="<?= base_url('foto_guru/'.$value->foto_guru) ?>" alt="<?= $value->nama_guru ?>" width="100px"></td>
                        <td>
                            <a href="<?= base_url('guru/edit/'.$value->id_guru) ?>" class="btn btn-sm btn-success" ><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger tombol-hapus" href="<?= base_url('guru/delete/'.$value->id_guru) ?>">  <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>