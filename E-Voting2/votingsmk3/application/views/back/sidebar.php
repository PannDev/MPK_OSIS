<?php
$gkc = $this->db->get('kelas')->result();
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/template/backend/') ?>dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('userName') ?></p>
                <a href="#"><?php echo $this->session->userdata('identity'); ?></a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu</li>
            <li>
                <a href="<?php echo base_url('admin') ?>">
                    <i class="fa fa-home"></i> <span>Dashboard</span>
                </a>
            </li>
            <!-- ./Dashboard -->
            <li>
                <a href="<?php echo base_url('admin/filemanager') ?>">
                    <i class="fa fa-folder"></i> <span>Filemanager</span>
                </a>
            </li>
            <!-- ./Filemanager -->
            <li>
                <a href="<?php echo base_url('admin/kelas') ?>">
                    <i class="fa fa-list"></i> <span>Kelas</span>
                </a>
            </li>
            <!-- ./Kelas -->
            <li>
                <a href="<?php echo base_url('admin/pemilih') ?>">
                    <i class="fa fa-users"></i> <span>Data Pemilih</span>
                </a>
            </li>
            <!-- ./Data Pemilih -->
            <li>

                <a data-toggle="modal" data-target="#myModal" href="#myModal">
                    <i class="fa fa-print"></i> <span>Cetak Kartu Pemilih</span>
                </a>
                <!-- ./Cetak Kartu Pemilih -->
            </li>
            <li>
                <a href="<?php echo base_url('admin/kandidat') ?>">
                    <i class="fa fa-user"></i> <span>Kandidat</span>
                </a>
            </li>
            <!-- ./Kandidat -->
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-stats"></i>
                    <span>Laporan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo base_url('admin/laporan/daftar_hadir') ?>" target="_blank">
                            <i class="fa fa-print"></i> Daftar Hadir
                        </a>
                    </li>
                </ul>
            </li>
            <!-- ./Laporan -->
            <li class="treeview">
                <a href="#">
                    <i class="ion ion-pie-graph"></i>
                    <span>Realtime Count</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo base_url('admin/perolehan') ?>">
                            <i class="ion ion-pie-graph"></i> <span>Hasil Perolehan</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>User Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo base_url('admin/auth') ?>">
                            <i class="fa fa-users"></i> User List
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/auth/group') ?>">
                            <i class="fa fa-users"></i> User Group
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url('admin/settings') ?>">
                    <i class="fa fa-wrench"></i> <span>Settings</span>
                </a>
            </li>
            <!-- ./Settings -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cetak Kartu Pemilih</h4>
            </div>
            <form action="<?= base_url('admin/printcard'); ?>" target="_blank" method="post">
                <div class="modal-body">
                    <div class="row">
                        <label class="col-sm-4" for="">Pilih Kelas</label>
                        <div class="col-sm-8">
                            <select name="cetakKelas" id="cetakKelas" class="form-control">
                                <option value="">Semua Kelas</option>
                                <?php foreach ($gkc as $kls) : ?>
                                    <option value="<?= $kls->idkelas; ?>"><?= $kls->kelas; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Cetak</button>
                </div>
            </form>
        </div>
    </div>
</div>