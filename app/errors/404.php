<!DOCTYPE html>
<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="<?= _WEB_PUBLIC ?>/admin/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Error | 404 Not Found</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= _WEB_PUBLIC ?>/admin/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= _WEB_PUBLIC ?>/admin/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= _WEB_PUBLIC ?>/admin/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= _WEB_PUBLIC ?>/admin/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= _WEB_PUBLIC ?>/admin/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= _WEB_PUBLIC ?>/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?= _WEB_PUBLIC ?>/admin/vendor/css/pages/page-misc.css" />
    <!-- Helpers -->
    <script src="<?= _WEB_PUBLIC ?>/admin/vendor/js/helpers.js"></script>

    <script src="<?= _WEB_PUBLIC ?>/admin/js/config.js"></script>
</head>

<body>
    <!-- Content -->

    <!-- Error -->
    <div class="container-xxl container-p-y">
        <div class="misc-wrapper">
            <h2 class="mb-2 mx-2">Page Not Found 😢</h2>
            <p class="mb-4 mx-2">Oops! 😖 The requested URL was not found on this server.</p>
            <div>
                <img src="<?= _WEB_PUBLIC ?>/admin/img/404.svg" alt="page-misc-error-light" width="500" class="img-fluid" data-app-dark-img="illustrations/page-misc-error-dark.png" data-app-light-img="illustrations/page-misc-error-light.png" />
            </div>
            <a href="<?= _WEB_ROOT ?>" class="btn btn-primary mt-3"><i class="bx bx-left-arrow-alt"></i> Back to home</a>
        </div>
    </div>
    <!-- /Error -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= _WEB_PUBLIC ?>/admin/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= _WEB_PUBLIC ?>/admin/vendor/libs/popper/popper.js"></script>
    <script src="<?= _WEB_PUBLIC ?>/admin/vendor/js/bootstrap.js"></script>
</body>

</html>