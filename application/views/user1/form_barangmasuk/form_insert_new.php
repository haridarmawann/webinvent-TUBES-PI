
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
                <a href="<?= base_url('user/index')?>">
                  <i class="nc-icon nc-shop"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="active">
                <a href="<?= base_url('user/tabel_barangmasuk')?>">
                  <i class="nc-icon nc-box-2"></i>
                  <p>Data Barang Masuk</p>
                </a>
              </li>
              <li>
                <a href="<?= base_url('user/tabel_barangkeluar')?>">
                  <i class="nc-icon nc-delivery-fast"></i>
                  <p>Data Barang Keluar</p>
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
                  <a class="dropdown-item" href="<?= base_url('user/sigout')?>">Logout</a>
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
                <h5 class="card-title">Edit Profile</h5>
              </div>
              <div class="card-body">
              <form action="<?=base_url('user/proses_databarang_masuk_insert')?>" role="form" method="post">
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

                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                      <label for="id_transaksi">ID Transaksi</label>
                      <input type="text" name="id_transaksi" class="form-control" readonly="readonly" value="WG-<?=date("Y");?><?=random_string('numeric', 8);?>">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                      <label for="tanggal" >Tanggal</label>
                      <input type="date" name="tanggal"  class="form-control form_datetime" placeholder="Klik Disini">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                      <label for="nama_barang">Lokasi</label>
                  <select class="form-control" name="lokasi">
                    <option value="">-- Pilih --</option>
                    <option value="Aceh">Aceh</option>
                    <option value="Bali">Bali</option>
                    <option value="Bengkulu">Bengkulu</option>
                    <option value="Jakarta">Jakarta Raya</option>
                    <option value="Jambi">Jambi</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Papua">Papua</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                    <option value="Lampung">Lampung</option>
                    <option value="NTB">Nusa Tenggara Barat</option>
                    <option value="NTT">Nusa Tenggara Timur</option>
                    <option value="Riau">Riau</option>
                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                    <option value="Sumatera Barat">Sumatera Barat</option>
                    <option value="Sumatera Utara">Sumatera Utara</option>
                    <option value="Maluku">Maluku</option>
                    <option value="Maluku Utara">Maluku Utara</option>
                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                    <option value="Sulawesi Selatan">Sumatera Selatan</option>
                    <option value="Banten">Banten</option>
                    <option value="Gorontalo">Gorontalo</option>
                    <option value="Bangka">Bangka Belitung</option>
                  </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label for="kode_barang">Kode Barang / Barcode</label>
                      <input type="text" name="kode_barang"  class="form-control" id="kode_barang" placeholder="Kode Barang">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                      <label for="nama_Barang" ">Nama Barang</label>
                      <input type="text" name="nama_barang" class="form-control" id="nama_Barang" placeholder="Nama Barang">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label for="satuan">Satuan</label>
                      <select class="form-control" name="satuan">
                      <option value="" selected="">-- Pilih --</option>
                      <?php foreach($list_satuan as $s){ ?>
                      <option value="<?=$s->kode_satuan?>"><?=$s->nama_satuan?></option>
                      <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                      <label for="jumlah">Jumlah</label>
                      <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="jumlah">
                      </div>
                    </div> 
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                          <button type="reset" name="btn_reset" class="btn btn-primary btn-round">Reset</button>
                          <a type="button" class="btn btn-info btn-round" href="<?=base_url('user/tabel_barangmasuk')?>" name="btn_listbarang"><i class="fa fa-table" aria-hidden="true"></i> Lihat List Barang</a>
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