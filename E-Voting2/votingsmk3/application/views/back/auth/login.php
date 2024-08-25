
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <title>E-VOTING | <?= get_pengaturan('penyelenggara') ?></title>
		
        <!-- Vendor -->
        <link href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('assets/other/') ?>sans/vendor/bootstrap-4/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= base_url('assets/other/') ?>assets/plugins/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="<?= base_url('assets/other/') ?>sans/vendor/wow/css/animate.min.css">

        <!--Assets-->
        <link rel="stylesheet" href="<?= base_url('assets/other/') ?>sans/assets/css/front.min.css">
        <link href="<?= get_url_file(get_pengaturan('site_icon')) ?>" rel="shortcut icon">
	</head>

    <body data-spy="scroll" data-target="#menu" data-offset="100">
        <div class="home-wrapper" id="home">
            <div class="home-header">
                <div class="container p-0">
                    <nav class="navbar navbar-expand-lg navbar-light" id="navbar-header">
					                        <a class="navbar-brand" href="javascript:;">
                            <img class='img img-responsive' style='max-width:200px;' src="<?= get_url_file(get_pengaturan('site_logo')) ?>" width='75'>
                            <div class="home-header-text d-none d-sm-block">
                                <h5>E-VOTING</h5>
                                <h4><?= get_pengaturan('penyelenggara') ?> - Provnsi <?= get_pengaturan('provinsi') ?></h4>
								<h6> <?= get_pengaturan('kota') ?> - Kecamatan <?= get_pengaturan('kecamatan') ?></h6>
                                <h6>&copy; <?= get_pengaturan('penyelenggara') ?></h6>
                            </div>
                            <span class="logo-mini-unbk d-block d-sm-none">E-VOTING</span>
                        </a>
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="menu">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo base_url('') ?>" id="link-home">Home</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="home-banner">
                <div class="home-banner-bg home-banner-bg-color"></div>
                <div class="home-banner-bg home-banner-bg-img"></div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-sm-8">
                            <div id="carousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel" data-slide-to="0" class=""></li>
                                    <li data-target="#carousel" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel" data-slide-to="2" class="active"></li>
                                    <li data-target="#carousel" data-slide-to="3" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item">
                                        <div>
                                            <p data-animation="animated slideInRight" data-delay="1s" style="-webkit-animation-delay:1s;animation-delay:1s" class="">
                                              <?= get_pengaturan('info') ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div>
                                            <h5 data-animation="animated fadeInDownBig" style="-webkit-animation-delay:undefined;animation-delay:undefined" class="">
                                                Fitur Aplikasi E-VOTING
                                            </h5>
                                            <h5 data-animation="animated fadeInDownBig" style="-webkit-animation-delay:undefined;animation-delay:undefined" class="">
                                                <?= get_pengaturan('penyelenggara') ?>                                            </h5>
                                            <ul>
                                                <li data-animation="animated flipInX" data-delay="1s" style="-webkit-animation-delay:1s;animation-delay:1s" class="animated flipInX">
                                                    Perhitungan Realtime
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="2s" style="-webkit-animation-delay:2s;animation-delay:2s" class="animated flipInX">
                                                    Cetak Kartu Pemilih
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="3s" style="-webkit-animation-delay:3s;animation-delay:3s" class="animated flipInX">
                                                    Pemilihan Online/Offline
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="carousel-item active">
                                        <div>
                                            <h5 data-animation="animated fadeInDownBig" style="-webkit-animation-delay:undefined;animation-delay:undefined" class="">
                                                Identitas Sekolah
                                            </h5>
                                            <h5 data-animation="animated fadeInDownBig" style="-webkit-animation-delay:undefined;animation-delay:undefined" class="">
                                                <?= get_pengaturan('penyelenggara') ?>                                            </h5>
                                            <ul>
                                                <li data-animation="animated flipInX" data-delay="1s" style="-webkit-animation-delay:1s;animation-delay:1s" class="animated flipInX">
                                                   <?= get_pengaturan('penyelenggara') ?>                                                </li>
                                                <li data-animation="animated flipInX" data-delay="2s" style="-webkit-animation-delay:2s;animation-delay:2s" class="animated flipInX">
                                                   <?= get_pengaturan('alamat') ?>                                                </li>
                                                <li data-animation="animated flipInX" data-delay="3s" style="-webkit-animation-delay:3s;animation-delay:3s" class="animated flipInX">
                                                    Kota <?= get_pengaturan('kota') ?>                                               </li>
                                                <li data-animation="animated flipInX" data-delay="5s" style="-webkit-animation-delay:5s;animation-delay:4s" class="animated flipInX">
                                                     TPS <?= get_pengaturan('tps') ?>                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                  <div class="carousel-item">
                                        <div>
                                            <h5 data-animation="animated fadeInDownBig" style="-webkit-animation-delay:undefined;animation-delay:undefined" class="">
                                                Contact Info
                                            </h5>
                                            <h5 data-animation="animated fadeInDownBig" style="-webkit-animation-delay:undefined;animation-delay:undefined" class="">
                                                 <?= get_pengaturan('penyelenggara') ?>                                            </h5>
                                            <ul>
											    <li data-animation="animated flipInX" data-delay="1s" style="-webkit-animation-delay:1s;animation-delay:1s" class="animated flipInX">
                                                 Operator <?= get_pengaturan('operator') ?>                                                </li>
                                                <li data-animation="animated flipInX" data-delay="1s" style="-webkit-animation-delay:1s;animation-delay:2s" class="animated flipInX">
                                                 <?= get_pengaturan('penyelenggara') ?>                                                </li>
                                                <li data-animation="animated flipInX" data-delay="2s" style="-webkit-animation-delay:2s;animation-delay:3s" class="animated flipInX">
                                                   <?= get_pengaturan('website') ?>                                              </li>
                                                <li data-animation="animated flipInX" data-delay="3s" style="-webkit-animation-delay:3s;animation-delay:4s" class="animated flipInX">
                                                 <?= get_pengaturan('email') ?>                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card card-login">
                                <div class="card-body"><span><span>
                                    <h6 align="center"><b>LOGIN</b></h6>
									<form action='<?= site_url('admin/auth/login') ?>' method='post' name='fmLogin' id='fmLogin' class="validate-form">										
                                        <div class="form-group">
                                            <span class="fa fa-user"></span>
                                            <input type="text" class="form-control" id="identity" name="identity" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <span class="fa fa-key"></span>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        </div>
                                        <button type="submit" name='submit' class="btn btn-primary btn-block btn-login">
                                            Masuk
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <div class="home-content">
                <section class="bg-light statistik" id="statistik">
                    <div class="container">
                        <h5 class="text-center"><?= get_pengaturan('penyelenggara') ?></h5>
                        <h6 class="text-center">E-VOTING</h6>
                        <div class="row mt-4">
                            <div class="col-sm-2">
                                <div class="card mt-2">
                                    <div class="card-header bg-primary">Website</div>
                                    <div class="card-body">
                                        <h2 class="text-center"><font size="2"><?= get_pengaturan('website') ?></font></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card mt-2">
                                    <div class="card-header bg-primary">Provinsi</div>
                                    <div class="card-body">
                                        <h2 class="text-center"><font size="2"><?= get_pengaturan('provinsi') ?></font></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card mt-2">
                                    <div class="card-header bg-secondary">Kota</div>
                                    <div class="card-body">
                                        <h2 class="text-center"><font size="2"><?= get_pengaturan('kota') ?></font></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card mt-2">
                                    <div class="card-header bg-secondary">Kelurahan</div>
                                    <div class="card-body">
                                        <h2 class="text-center"><font size="2"><?= get_pengaturan('kelurahan') ?></font></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card mt-2">
                                    <div class="card-header bg-success">Kecamatan</div>
                                    <div class="card-body">
                                        <h2 class="text-center"><font size="2"><?= get_pengaturan('kecamatan') ?></font></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card mt-2">
                                    <div class="card-header bg-dark">TPS</div>
                                    <div class="card-body">
                                        <h2 class="text-center"><font size="1"><?= get_pengaturan('tps') ?></font></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <div class="home-footer">
                <div class="container text-center">
                    Copyright © <?= date('Y') ?>, <?= get_pengaturan('penyelenggara') ?>
                </div>
            </div>
        </div>
        <!-- Vendor -->
        <script src="<?= base_url('assets/other/') ?>sans/vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="<?= base_url('assets/other/') ?>sans/vendor/jquery/jquery.form.min.js"></script>
        <script src="<?= base_url('assets/other/') ?>sans/vendor/bootstrap-4/js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/other/') ?>sans/vendor/bootstrap-4/js/popper.min.js"></script>


</body>
</html>