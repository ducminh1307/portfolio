<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?= _WEB_ROOT ?>/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= _WEB_PUBLIC ?>/clients/images/favicon.png" type="image/x-icon">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/clients/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/clients/css/vendor/aos.css">
    <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/clients/css/plugins/feature.css">
    <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/clients/css/vendor/slick.css">
    <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/clients/css/vendor/slick-theme.css">

    <link type="text/css" rel="stylesheet" href="<?= _WEB_PUBLIC ?>/tinymce/skins/ui/oxide/content.min.css" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="<?= _WEB_PUBLIC ?>/tinymce/skins/content/default/content.min.css" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="<?= _WEB_PUBLIC ?>/tinymce/plugins/mediaembed/content.min.css" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="<?= _WEB_PUBLIC ?>/tinymce/plugins/pageembed/css/empa30.css" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= _WEB_PUBLIC ?>/clients/css/style_detail.css">
</head>

<body class="white-version">
    <?php $this->view('blocks/header') ?>

    <?php $this->view($page, $data) ?>

    <!-- Back to  top Start -->
    <div class="backto-top">
        <div>
            <i data-feather="arrow-up"></i>
        </div>
    </div>
    <!-- Back to top end -->

    <script src="<?php echo _WEB_PUBLIC; ?>/clients/js/vendor/jquery.js"></script>
    <script src="<?php echo _WEB_PUBLIC; ?>/clients/js/vendor/aos.js"></script>
    <script src="<?php echo _WEB_PUBLIC; ?>/clients/js/vendor/bootstrap.js"></script>
    <script src="<?php echo _WEB_PUBLIC; ?>/clients/js/vendor/wow.js"></script>
    <script src="<?php echo _WEB_PUBLIC; ?>/clients/js/vendor/feather.min.js"></script>

    <script src="<?php echo _WEB_PUBLIC; ?>/clients/js/main_detail.js"></script>
</body>

</html>