<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Bengkel AHASS 9023 Dinoyo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/skins/_all-skins.min.css">
  <!-- Datatable -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.css"/>
  <script src="<?php echo base_url()?>assets/js/jquery-2.2.3.min.js"></script>
  <script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
  <!-- timepicker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/timepicker/bootstrap-timepicker.css"/>
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.css"/>
  <script src="<?php echo base_url()?>assets/plugins/timepicker/bootstrap-timepicker.js"></script>
  <script src="<?php echo base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
  <!-- Date Picker -->
  <!-- Datatables -->
  <link href="<?php echo base_url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  
  <!-- iCheck -->
  <link href="<?php echo base_url()?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
  <!-- JQVMap -->
  <link href="<?php echo base_url()?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
  
  <!-- Date Picker -->

  <!-- NProgress -->
  <link href="<?php echo base_url()?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?php echo base_url()?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Custom Theme Style --> 
  <!-- iCheck -->
  <link href="<?php echo base_url()?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
  <!-- JQVMap -->
  <link href="<?php echo base_url()?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
  
  <!-- Date Picker -->
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">SIAHAS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" data-toggle="tooltip" data-placement="buttom" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
            <li><a href="<?php echo base_url('login/logout'); ?>"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
          <!-- User Account: style can be found in dropdown.less -->
        
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/img/administrator.png'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><h4>Admin</h4></p>
        </div>
      </div>

      <!-- search form -->
      <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="glyphicon glyphicon-home"></i> <span>Home</span>
        </a>
      </li>
      <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-th-list"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Sukucadang'); ?>"><i class="fa fa-circle-o"></i>Data Suku Cadang</a></li>
            <li><a href="<?php echo base_url('Supplier'); ?>"><i class="fa fa-circle-o"></i>Data Supplier</a></li>
            <li><a href="<?php echo base_url('Pegawai'); ?>"><i class="fa fa-circle-o"></i>Data Pegawai</a></li>
            <li><a href="<?php echo base_url('Pengguna'); ?>"><i class="fa fa-circle-o"></i>Data Pengguna</a></li>
          </ul>
        </li>
      <li>
        <a href="<?php echo base_url('Layanan'); ?>">
          <i class="glyphicon glyphicon-th"></i> <span>Layanan</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('Penjualan'); ?>">
          <i class="glyphicon glyphicon-collapse-up"></i> <span>Penjualanan Suku Cadang</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('Pembelian'); ?>">
          <i class="glyphicon glyphicon-collapse-down"></i> <span>Pembelian Suku Cadang</span>
        </a>
      </li>
      <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-th-list"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('LapSukucadang'); ?>"><i class="fa fa-circle-o"></i>Laporan Suku Cadang</a></li>
            <li><a href="<?php echo base_url('LapLayanan'); ?>"><i class="fa fa-circle-o"></i>Laporan Layanan</a></li>
            <li><a href="<?php echo base_url('LapPenjualan'); ?>"><i class="fa fa-circle-o"></i>Laporan Penjualan</a></li>
            <li><a href="<?php echo base_url('LapPembelian'); ?>"><i class="fa fa-circle-o"></i>Laporan Pembelian</a></li>
          </ul>
        </li>
    </ul>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
    </section>
    <!-- /.sidebar -->
  </aside>