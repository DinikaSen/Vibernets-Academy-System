<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 15-Sep-18
 * Time: 12:24 AM
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Vibernets Academy</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo URL?>public/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo URL?>public/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo URL?>public/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo URL?>public/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo"">
                <img src="<?php echo URL?>public/images/logo.png" align="center">
              </div>
              <h4 style="padding-bottom: 20px">Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="loginDo" method="post">
                <div class="form-group">
                  <input name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" required autofocus>
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control form-control-lg" id="exampleInputPassword1" required placeholder="Password" autofocus>
                </div>
                <div class="mt-3">
                    <button class="btn btn-block btn-gradient-danger btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                </div>
                  <div class="text-center mt-4 font-weight-light">
                  Forgot password? <a href="register.html" class="text-primary">Get help</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo URL?>public/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo URL?>public/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo URL?>public/js/off-canvas.js"></script>
  <script src="<?php echo URL?>public/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
