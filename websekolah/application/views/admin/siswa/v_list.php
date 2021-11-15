<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('siswa/add') ?>" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        <div class="panel-body">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
            
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Kelas</th>
                        <th>Foto <a data-toggle="tooltip" data-placement="top" title="Jika dirasa tidak dibutuhkan karena memakan badwith... silahkan edit script upload pada controller/siswa "><i class="fa fa-info-circle"></i></a></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($siswa as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->nis ?></td>
                        <td><?= $value->nama_siswa ?></td>
                        <td><?= $value->tempat_lahir ?></td>
                        <td><?= $value->tgl_lahir ?></td>
                        <td><?= $value->kelas ?></td>
                        <td><img src="<?= base_url('foto_siswa/'.$value->foto_siswa) ?>" alt="<?= $value->nama_siswa ?>" width="100px"></td>
                        <td>
                            <a href="<?= base_url('siswa/edit/'.$value->id_siswa) ?>" class="btn btn-sm btn-success" ><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger tombol-hapus" href="<?= base_url('siswa/delete/'.$value->id_siswa) ?>">  <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>