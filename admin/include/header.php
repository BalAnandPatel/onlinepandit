<?php
include "../constant.php";
date_default_timezone_set('Asia/Kolkata');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="description" content="Shyamavsvss Krishi limited">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="Mrityunjay Singh">
  <title>Online Pandit</title>
  <!-- jsGrid -->
  <link rel="stylesheet" href="../common/plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="../common/plugins/jsgrid/jsgrid-theme.min.css">
  <!---link to style sheet----->
  <link rel="stylesheet" href="../common/css/style.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../common/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../common/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../common/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../common/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../common/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../common/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../common/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../common/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../common/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../common/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../common/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../img/5a018de87ca233f48ba6270f.png" alt="Logo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="adm_dashboard.php" role="button"><i
              class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="adm_dashboard.php" class="nav-link">HOME</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="adm_dashboard.php" class="nav-link">PROFILE</a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="adm_dashboard.php" class="nav-link">Contact</a>
      </li> -->
        <li class="nav-item d-none d-sm-inline-block">
          <a href="logout.php" class="nav-link">LOGOUT</a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="adm_dashboard.php">
            <i class="fab fa-facebook-square fa-lg"></i>
          </a>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="adm_dashboard.php">
            <i class="fab fa-twitter-square fa-lg"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adm_dashboard.php" role="button">
            <i class="fab fa-invision fa-lg"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="adm_dashboard.php" role="button">
            <i class="fas fa-expand-arrows-alt fa-lg"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="adm_dashboard.php" class="brand-link">
        <img src="../img/5a018de87ca233f48ba6270f.png" alt="Logo" class="brand-image img-circle elevation-3"
          style="opacity: 1">
        <span class="brand-text font-weight-light"><b>Admin</b></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="adm_dashboard.php" class="nav-link">
                <i class="nav-icon fa fa-upload"></i>
                <p>
                  Pooja
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="insert_events.php" class="nav-link">
                    <i class="fas fa-arrow-alt-circle-right"></i>
                    <p>Add Pooja</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="events_record.php" class="nav-link">
                    <i class="fas fa-arrow-alt-circle-right"></i>
                    <p>Pooja List</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="adm_dashboard.php" class="nav-link">
                <i class="nav-icon fa fa-upload"></i>
                <p>
                  Media & Gallery
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="upload_gallery_image.php" class="nav-link">
                    <i class="fas fa-arrow-alt-circle-right"></i>
                    <p>Upload Gallery Images</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="gallery_record.php" class="nav-link">
                    <i class="fas fa-arrow-alt-circle-right"></i>
                    <p>Gallery Records</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="adm_dashboard.php" class="nav-link">
                <i class="nav-icon fa fa-upload"></i>
                <p>
                  Notification
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="insert_notification.php" class="nav-link">
                    <i class="fas fa-arrow-alt-circle-right"></i>
                    <p>Add Notification</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="notification_list.php" class="nav-link">
                    <i class="fas fa-arrow-alt-circle-right"></i>
                    <p>Notification Record</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon fa fa-upload"></i>
                <p>
                  Booking
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="pending_booking.php" class="nav-link">
                    <i class="fas fa-arrow-alt-circle-right"></i>
                    <p>Pending Booking</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="completed_booking.php" class="nav-link">
                    <i class="fas fa-arrow-alt-circle-right"></i>
                    <p>Completed Booking</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="contact_list.php" class="nav-link">
                <i class="nav-icon fas fa-phone"></i>
                <p>Contact List</p>
              </a>
            </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>