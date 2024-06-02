<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?php echo _WEB_PUBLIC; ?>/admin/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title><?php echo ucwords($title); ?></title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?php echo _WEB_PUBLIC; ?>/admin/img/favicon.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/admin/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/admin/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/admin/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/admin/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="<?php echo _WEB_PUBLIC; ?>/admin/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?php echo _WEB_PUBLIC; ?>/admin/js/config.js"></script>

  <!-- Datatable -->
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/5.0.0/css/fixedColumns.dataTables.css">


  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

  <script src="https://cdn.datatables.net/2.0.4/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.0.4/js/dataTables.bootstrap5.js"></script>
  <script src="https://cdn.datatables.net/fixedcolumns/5.0.0/js/dataTables.fixedColumns.js"></script>
  <script src="https://cdn.datatables.net/fixedcolumns/5.0.0/js/fixedColumns.dataTables.js"></script>

  <script src="<?php echo _WEB_PUBLIC; ?>/admin/vendor/libs/popper/popper.js"></script>
  <script src="<?php echo _WEB_PUBLIC; ?>/admin/vendor/js/bootstrap.js"></script>

  <script src="<?=_WEB_PUBLIC?>/tinymce/tinymce.min.js"
        referrerpolicy="origin"></script>

</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <!-- Overlay -->
    <div class="layout-container">
      <!-- Menu -->
      <?php $this->view("blocks/admin/sidebar") ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">

        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->
          </div>
        </nav>
        <!-- / Navbar -->

        <!-- Layout page -->
        <div class="container">

          <?php $this->view($page, $body) ?>

        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <!-- <script src="<?php echo _WEB_PUBLIC; ?>/admin/vendor/libs/jquery/jquery.js"></script> -->

    <script src="<?php echo _WEB_PUBLIC; ?>/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?php echo _WEB_PUBLIC; ?>/admin/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="<?php echo _WEB_PUBLIC; ?>/admin/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?php echo _WEB_PUBLIC; ?>/admin/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>