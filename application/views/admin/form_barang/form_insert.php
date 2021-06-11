
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
        <?=$this->session->userdata('name')?>
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
            <ul class="nav">
              <li>
                <a href="<?= base_url('admin/index')?>">
                  <i class="nc-icon nc-shop"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li>
                <a href="<?= base_url('admin/tabel_barangmasuk')?>">
                  <i class="nc-icon nc-box-2"></i>
                  <p>Data Barang Masuk</p>
                </a>
              </li>
              <li>
                <a href="<?= base_url('admin/tabel_barangkeluar')?>">
                  <i class="nc-icon nc-delivery-fast"></i>
                  <p>Data Barang Keluar</p>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('admin/tabel_barang')?>">
                  <i class="nc-icon nc-bullet-list-67"></i>
                  <p>Data Jenis Barang</p>
                </a>
              </li>
              <li>
                <a href="<?= base_url('admin/tabel_satuan')?>">
                  <i class="nc-icon nc-box"></i>
                  <p>Data satuan</p>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('admin/profile')?>">
                  <i class="nc-icon nc-circle-10 "></i>
                  <p>User Profile</p>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('admin/users')?>">
                  <i class="nc-icon nc-settings"></i>
                  <p>Admin</p>
                </a>
              </li> 
          <li class="active ">
            <a href="./typography.html">
              <i class="nc-icon nc-simple-add"></i>
              <p>Tambah Data Satuan</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?= base_url('admin/sigout')?>">Logout</a>
                </div>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Tambah Data Jenis Barang</h5>
              </div>
              <div class="card-body">
              <form action="<?=base_url('admin/proses_barang_insert')?>" role="form" method="post">

              <!-- validation -->
              <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:91%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>

              <?php if(validation_errors()){ ?>
              <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong><br> <?php echo validation_errors(); ?>
             </div>
            <?php } ?>
                    <div class="col-md-12 px-5">
                      <div class="form-group">
                      <label for="nama_barang">Jenis barang</label>
                      <input type="text" name="Nama_barang" class="form-control" id="nama_barang" placeholder="Jenis Barang">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="update ml-auto mr-auto">
                          <button type="reset" name="btn_reset" class="btn btn-primary btn-round">Reset</button>
                          <a type="button" class="btn btn-info btn-round" href="<?=base_url('admin/tabel_barang')?>" name="btn_listbarang"><i class="fa fa-table" aria-hidden="true"></i> Lihat List Jenis barang</a>
                          <button type="submit" class="btn btn-success btn-round"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>
                    </div>
                  </div>       
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?=base_url()?>/assets/js/core/jquery.min.js"></script>
  <script src="<?=base_url()?>/assets/js/core/popper.min.js"></script>
  <script src="<?=base_url()?>/assets/js/core/bootstrap.min.js"></script>
  <script src="<?=base_url()?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?=base_url()?>/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?=base_url()?>/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?=base_url()?>/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?=base_url()?>/assets/demo/demo.js"></script>
  <script type="text/javascript">
      $(".form_datetime").datetimepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayBtn: true,
        pickTime: false,
        minView: 2,
        maxView: 4,
      });
      </script>
</body>

</html>