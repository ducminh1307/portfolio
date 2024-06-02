<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?= _WEB_ROOT ?>/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ?></title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="shortcut icon" href="<?php echo _WEB_PUBLIC; ?>/clients/images/favicon.png" type="image/x-icon">
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/clients/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/clients/css/vendor/slick.css">
    <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/clients/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/clients/css/vendor/aos.css">
    <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/clients/css/plugins/feature.css">
    <!-- Style css -->
    <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/clients/css/style.css">


</head>

<body class="template-color-1 spybody white-version" data-spy="scroll" data-target=".navbar-example2" data-offset="150">

    <?php $this->view('blocks/header') ?>

    <main class="main-page-wrapper">

        <?php $this->view($page, $data) ?>

        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->

    </main>

    <!-- JS ============================================ -->
    <script src="<?php echo _WEB_PUBLIC; ?>/clients/js/vendor/jquery.js"></script>
    <script src="<?php echo _WEB_PUBLIC; ?>/clients/js/vendor/modernizer.min.js"></script>
    <script src="<?php echo _WEB_PUBLIC; ?>/clients/js/vendor/feather.min.js"></script>
    <script src="<?php echo _WEB_PUBLIC; ?>/clients/js/vendor/slick.min.js"></script>
    <script src="<?php echo _WEB_PUBLIC; ?>/clients/js/vendor/bootstrap.js"></script>
    <script src="<?php echo _WEB_PUBLIC; ?>/clients/js/vendor/text-type.js"></script>
    <script src="<?php echo _WEB_PUBLIC; ?>/clients/js/vendor/wow.js"></script>
    <script src="<?php echo _WEB_PUBLIC; ?>/clients/js/vendor/aos.js"></script>
    <script src="<?php echo _WEB_PUBLIC; ?>/clients/js/vendor/particles.js"></script>
    <!-- main JS -->
    <script src="<?php echo _WEB_PUBLIC; ?>/clients/js/main.js"></script>
</body>

</html>