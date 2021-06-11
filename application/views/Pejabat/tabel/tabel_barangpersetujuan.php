<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daftar Barang Persetujuan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/web_admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/web_admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/web_admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/web_admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/web_admin/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?php echo base_url()?>assets/sweetalert/dist/sweetalert.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/web_admin/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
     <style type="text/css">
    body, html {
      height: auto;
    }
      .sidebar-toggle {
        color: #b2c20a;
        transition: 0.5s;
      }
      .sidebar-toggle:hover{
        color: white;
      }
      .navbar-nav {
        color: #b2c20a;
        transition: 0.5s;
      }
      .hidden-xs{
        color: #b2c20a;
        transition: 0.5s;
      }
      #warna {
        color: #b2c20a;
      }
      #warna:hover {
        color: #057d2d;
        background-color: #b2c20a ;
        border-right: 1px solid #057d2d;
      }
    </style>
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper"> 

  <header class="main-header" style="background-color: #057d2d; color: #b2c20a">
    <!- Logo -->
    <a href="<?=base_url('user')?>" class="logo" style="background-color: #b2c20a">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" style="color: #057d2d"><b>KST</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="color: #057d2d"><b>Menu</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" style="color: #b2c20a;" data-toggle="push-menu" role="button" >
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu" style="background-color: #057d2d">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="warna">
              <!-- <?php foreach($avatar as $a){ ?>
              <img src="<?php echo base_url('assets/upload/user/img/'.$a->nama_file)?>" class="user-image" alt="User Image">
              <?php } ?>
            -->
              <span ><b><?=$this->session->userdata('name')?></b></span>
            </a>
            <ul class="dropdown-menu" style="background-color: #b2c20a">
              <!-- User image -->
              <li class="user-header">
                <!-- <?php foreach($avatar as $a){ ?>
                <img src="<?php echo base_url('assets/upload/user/img/'.$a->nama_file)?>" class="img-circle" alt="User Image">
                <?php } ?> -->

                <p style="color: #057d2d;">
                  <b><?=$this->session->userdata('name')?></b>
                  <small style="color: #057d2d">Last Login : <?=$this->session->userdata('last_login')?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer" style="background-color: #057d2d">
                <div class="pull-left" >
                  <a href="<?=base_url('user/profile')?>" class="btn btn-warning btn-flat"><i class="fa fa-gear" aria-hidden="true"></i> Profile</a>
                </div>
                <div class="pull-right" >
                  <a href="<?= base_url('user/sigout'); ?>" class="btn btn-danger btn-flat"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background-color: #057d2d ; color: #b2c20a;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image" style="margin-bottom:50px">
          <!-- <?php foreach($avatar as $a){ ?>
          <img src="<?php echo base_url('assets/upload/user/img/'.$a->nama_file)?>" class="img-circle" alt="User Image">
          <?php } ?> -->
        </div>
        <div class="pull-left info">
          <p><?=$this->session->userdata('name')?></p>
          <a href="#" style="color: #057d2d ; background-color: #b2c20a;">&nbsp;
            <i class="fa fa-circle text-success" style="color: #057d2d"></i><b> Online </b></a>
        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="border-bottom: 3px solid #b2c20a; font-size: 14px;"><b>Menu Utama</b></li>

        <li>
          <a href="<?php echo base_url('user')?>" id="warna">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
          <!-- <ul class="treeview-menu">
            <li class="active"><a href="<?= base_url('admin') ?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul> -->
        </li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>assets/web_admin/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="<?php echo base_url()?>assets/web_admin/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="<?php echo base_url()?>assets/web_admin/pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="<?php echo base_url()?>assets/web_admin/pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li> -->
        <!-- <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>assets/web_admin/pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="<?php echo base_url()?>assets/web_admin/pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="<?php echo base_url()?>assets/web_admin/pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="<?php echo base_url()?>assets/web_admin/pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>assets/web_admin/pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="<?php echo base_url()?>assets/web_admin/pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="<?php echo base_url()?>assets/web_admin/pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="<?php echo base_url()?>assets/web_admin/pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="<?php echo base_url()?>assets/web_admin/pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="<?php echo base_url()?>assets/web_admin/pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li> -->
        <li class="treeview">
          <a href="#" id="warna">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" >
            <li><a href="<?php echo base_url('Pejabat/form_barangmasuk')?>" id="warna"><i class="fa fa-circle-o"></i> Tambah Data Barang Masuk</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#" id="warna">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('Pejabat/tabel_barangmasuk') ?>" id="warna"><i class="fa fa-circle-o"></i> Tabel Barang Masuk</a></li>
            <li><a href="<?= base_url('Pejabat/tabel_barangkeluar')?>" id="warna"><i class="fa fa-circle-o"></i> Tabel Barang Keluar</a></li>
             <li><a href="<?= base_url('Pejabat/barang_disetujui')?>" id="warna"><i class="fa fa-circle-o"></i> Tabel Barang Persetujuan</a></li>
          </ul>
        <li>
          <a href="<?php echo base_url('Pejabat/setting')?>" id="warna">
         <i class="fa fa-user" aria-hidden="true"></i> <span>Profile</span></a>
        </li>
      </ul>
     
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #b2c20a;">
    <!-- Content Header (Page header) -->
    <ol class="breadcrumb" style="background-color: #EEF2CE; color: black;">
        <li><a href="#"><i class="fa fa-table"></i> Daftar</a></li>
        <li class="active">Tabel Barang Keluar</li>
      </ol>
    <section class="content-header" style="color: #057d2d; margin-bottom: 5px; margin-top: -40px;">
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <!-- /.box -->
          <div class="box box-primary" style="width:100%; background-color: #EEF2CE; color: #057d2d">
           <div class="box-header" style="margin-top : 10px; border-bottom: 2px solid #057d2d; color: #057d2d">
              <h1 class="box-title" style="font-size: 24px; font-family: fantasy;"><i class="fa fa-fw fa-truck" aria-hidden="true"></i> 
              Tabel Barang Persetujuan</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:100%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>

              <a href="<?=base_url('user/tabel_barangmasuk')?>" style="margin-bottom:10px;" type="button" class="btn btn-info" name="tambah_data"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data Keluar</a>
              <a href="<?=base_url('report/barangKeluarManual')?>" style="margin-bottom:10px;" type="button" class="btn btn-warning" name="laporan_data"><i class="fa fa-file-text" aria-hidden="true"></i> Invoice Manual</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="border-bottom: 2px solid #057d2d;">No</th>
                  <th style="border-bottom: 2px solid #057d2d;">ID Transaksi</th>
                  <th style="border-bottom: 2px solid #057d2d;">QR Code</th>
                  <th style="border-bottom: 2px solid #057d2d;">Tanggal Masuk</th>
                  <th style="border-bottom: 2px solid #057d2d;">Tanggal Keluar</th>
                  <th style="border-bottom: 2px solid #057d2d;">Lokasi</th>
                  <th style="border-bottom: 2px solid #057d2d;">Kode Barang</th>
                  <th style="border-bottom: 2px solid #057d2d;">Nama Barang</th>
                  <th style="border-bottom: 2px solid #057d2d;">Satuan</th>
                  <th style="border-bottom: 2px solid #057d2d;">Jumlah</th>
                  <th style="border-bottom: 2px solid #057d2d;">Status</th>
                  <!-- <th></th> -->
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php if(is_array($list_data)){ ?>
                  <?php $no = 1;?>
                  <?php include "phpqrcode/qrlib.php";?> 
                  <?php foreach($list_data as $dd): ?>
                    <td><?=$no?></td>
                    <td><?=$dd->id_transaksi?></td>
                     <td>
                    <?php 
                    $tempdir = "temp/"; //<-- Nama Folder file QR Code kita nantinya akandisimpan
                    if (!file_exists($tempdir))#kalau folder belum ada, maka buat.   
                     mkdir($tempdir);
                    $isi_teks = $dd->id_transaksi;
                    $filename = $isi_teks.".png";
                    $quality = 'H'; //ada 4 pilihan, L (Low), M(Medium), Q(Good), H(High)
                    $ukuran = 5; //batasan 1 paling kecil, 10 paling besar
                    $padding = 0;  
                    QRCode::png($isi_teks,$tempdir.$filename,$quality,$ukuran,$padding);
                    ?>
                    <img width="100px" heigth="100px" src="<?=base_url('temp/'.$filename)?>">
                      </td>
                    <td><?=$dd->tanggal_masuk?></td>
                    <td><?=$dd->tanggal_keluar?></td>
                    <td><?=$dd->lokasi?></td>
                    <td><?=$dd->kode_barang?></td>
                    <td><?=$dd->nama_barang?></td>
                    <td><?=$dd->satuan?></td>
                    <td><?=$dd->jumlah?></td>
                    <td> <a type="button" href="<?=base_url('Pejabat/barang_keluar/'.$dd->id_transaksi)?>" class="btn btn-info" style="width:100%"  name="btn_kembali"><i class="fa fa-arrow-left" aria-hidden="true"></i> Setujui</a></td>
                </tr>
              <?php $no++; ?>
              <?php endforeach;?>
              <?php }else { ?>
                    <td colspan="7" align="center"><strong>Data Kosong</strong></td>
              <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>


        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/web_admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/sweetalert/dist/sweetalert.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/web_admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()?>assets/web_admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/web_admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()?>assets/web_admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/web_admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/web_admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/web_admin/dist/js/demo.js"></script>
<!-- page script -->
<script>
jQuery(document).ready(function($){
      $('.btn-delete').on('click',function(){
          var getLink = $(this).attr('href');
          swal({
                  title: 'Delete Data',
                  text: 'Yakin Ingin Menghapus Data ?',
                  html: true,
                  confirmButtonColor: '#d9534f',
                  showCancelButton: true,
                  },function(){
                  window.location.href = getLink
              });
          return false;
      });
  });

  $(function () {
    $('#example1').DataTable();
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  });


</script>
</body>
</html>
