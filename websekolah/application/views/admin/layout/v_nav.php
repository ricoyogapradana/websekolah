<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="<?= base_url('mapel') ?>"><i class="fa fa-table fa-fw"></i> Mata Pelajaran</a>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="<?= base_url('guru') ?>"><i class="fa fa-users fa-fw"></i> Guru</a>
                            </li>
                            <li>
                                <a href="<?= base_url('siswa') ?>"><i class="fa fa-mortar-board fa-fw"></i> Siswa</a>
                            </li>
                            <li>
                                <a href="<?= base_url('pengumuman') ?>"><i class="fa fa-file fa-fw"></i> Pengumuman</a>
                            </li>
                            <li>
                                <a href="<?= base_url('berita') ?>"><i class="fa fa-newspaper-o fa-fw"></i> Berita</a>
                            </li>
                            <li>
                                <a href="<?= base_url('gallery') ?>"><i class="fa fa-image fa-fw"></i> Gallery</a>
                            </li>
                            <li>
                                <a href="<?= base_url('download') ?>"><i class="fa fa-download fa-fw"></i> Download</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/setting') ?>"><i class="fa fa-gear fa-fw"></i> Setting</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-10">
                                <h2 class="page-header"><?= $title ?></h2>
                                </div>
                                <div class="col-lg-2 text-right"><br>
                                <h2 class=""><?php date_default_timezone_set("Asia/Jakarta"); echo date("l") ?></h2><label for=""><?php
                                    date_default_timezone_set("Asia/Jakarta");
                                    echo "Tanggal dan Waktu sekarang adalah " . tanggal()." " .date("G:i:s");
                                    ?></label><br>
                                </div>
                            </div>
                            
                        
                    
                