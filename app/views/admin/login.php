<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?php echo _WEB_PUBLIC; ?>/admin/" data-template="vertical-menu-template-free">

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
  <!-- Page -->
  <link rel="stylesheet" href="<?php echo _WEB_PUBLIC; ?>/admin/vendor/css/pages/page-auth.css" />
  <!-- Helpers -->
  <script src="<?php echo _WEB_PUBLIC; ?>/admin/vendor/js/helpers.js"></script>

  <script src="<?php echo _WEB_PUBLIC; ?>/admin/js/config.js"></script>
</head>

<body>
  <!-- Content -->

  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <img src="<?php echo _WEB_PUBLIC; ?>/clients/images/logo.png" alt="" width="200">
            </div>
            <!-- /Logo -->
            <div class="d-flex justify-content-center mb-2" id="error"><b><span class="text-danger"></span></b></div>
            <form id="formAuthentication" class="formAuthentication" method="POST">
              <div class="mb-3">
                <label for="ussername" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus value="<?php if (isset($_COOKIE['username'])) echo $_COOKIE['username'] ?>" required />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password'] ?>" required />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-me" <?php if (isset($_COOKIE['username'])) echo 'checked' ?> />
                  <label class="form-check-label" for="remember-me">Remember account for 1 day</label>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>

  <?= $data['test']['pass'] ?>

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="<?php echo _WEB_PUBLIC; ?>/admin/vendor/libs/jquery/jquery.js"></script>
  <script src="<?php echo _WEB_PUBLIC; ?>/admin/vendor/libs/popper/popper.js"></script>
  <script src="<?php echo _WEB_PUBLIC; ?>/admin/vendor/js/bootstrap.js"></script>
  <script src="<?php echo _WEB_PUBLIC; ?>/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="<?php echo _WEB_PUBLIC; ?>/admin/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="<?php echo _WEB_PUBLIC; ?>/admin/js/main.js"></script>

  <!-- Page JS -->

  <script>
    $('#formAuthentication').on('submit', () => {
      var user = $('#username').val();
      var pass = $('#password').val();
      var rem = $('#remember-me').is(':checked') ? 1 : 0;
      $.ajax({
        url: '<?= _WEB_ROOT ?>/login-process',
        method: 'POST',
        dataType: 'json',
        data: {
          user: user,
          pass: pass,
          rem: rem
        },
        success: function(data) {
          $('.text-danger').html(data);
        }
      })

      return false
    })
  </script>
</body>

</html>