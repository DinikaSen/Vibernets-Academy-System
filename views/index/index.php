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
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo URL?>public/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo URL?>public/images/logo.png" />
</head>
<body>
<div class="container-scroller">
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="<?php echo URL?>index.php"><img src="<?php echo URL?>public/images/logo.png" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="<?php echo URL?>index.php"><img src="<?php echo URL?>public/images/logo.png" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item d-none d-lg-block full-screen-link">
                    <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count-symbol bg-danger"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <h6 class="p-3 mb-0">Notifications</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="mdi mdi-calendar"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                                <p class="text-gray ellipsis mb-0">
                                    Just a reminder that you have an event today
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                                <p class="text-gray ellipsis mb-0">
                                    Update dashboard
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="mdi mdi-link-variant"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                                <p class="text-gray ellipsis mb-0">
                                    New admin wow!
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                    </div>
                </li>
                <li class="nav-item nav-logout d-none d-lg-block">
                    <a class="nav-link" href="login/index">
                        <button class="btn btn-block btn-lg btn-gradient-danger mb-1"><i class="mdi mdi-login-variant"></i>Sign In</button>
                    </a>
                </li>

            </li>
            </ul>

        </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12" style="padding-top: 50px">
              <span class="d-flex align-items-center purchase-popup">
                  <img src="<?php echo URL?>public/images/logo.png" alt="logo" style="padding-right: 50px; padding-left: 80px"/>
                    <h3 style=" color: #ff394a; text-shadow: 1px 1px black" align="center" >We aim on making a Network specialist...</h3>
              </span>
            </div>
          </div>
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>                 
              </span>
              Dashboard
            </h3>
          </div>
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <h2 class="font-weight-normal mb-3">12
                    <i class="mdi mdi-account-multiple mdi-24px float-right"></i>
                  </h2>
                  <h3 class="mb-4">Students</h3>
                    <a class="nav-link" href="..">
                        <span class="menu-title text-white">More info</span>
                        <i class="mdi mdi-alert-circle-outline align-middle"></i>
                    </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <h2 class="font-weight-normal mb-3">2
                    <i class="mdi mdi-book-open-page-variant mdi-24px float-right"></i>
                  </h2>
                  <h3 class="mb-4"> Active Courses</h3>
                    <a class="nav-link" href="..">
                        <span class="menu-title text-white">More info</span>
                        <i class="mdi mdi-alert-circle-outline align-middle"></i>
                    </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <h2 class="font-weight-normal mb-3">3
                    <i class="mdi mdi-google-circles-extended mdi-24px float-right"></i>
                  </h2>
                  <h3 class="mb-4">Active Batches</h3>
                    <a class="nav-link" href="..">
                        <span class="menu-title text-white">More info</span>
                        <i class="mdi mdi-alert-circle-outline align-middle text"></i>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo URL?>public/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo URL?>public/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo URL?>public/js/off-canvas.js"></script>
  <script src="<?php echo URL?>public/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo URL?>public/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

