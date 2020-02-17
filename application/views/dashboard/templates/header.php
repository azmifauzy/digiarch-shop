
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Digiarch.</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/staradmin/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/staradmin/assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/staradmin/assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/staradmin/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/staradmin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/staradmin/assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/css/dashboard.css">
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/staradmin/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/staradmin/assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="<?= base_url(''); ?>assets/staradmin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="<?= base_url('dashboard') ?>">
            <h1 class="">Digiarch.</h1>
          <a class="navbar-brand brand-logo-mini" href="<?= base_url('dashboard') ?>">
            <img src="<?= base_url(''); ?>assets/staradmin/assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <?php if ($this->session->userdata('id')) : ?>
            <li class="nav-item font-weight-semibold d-none d-lg-block">Balance : Rp. <?= number_format($user["balance"], 0, ',', '.'); ?>,-</li>
            <?php else: ?>
            <li class="nav-item font-weight-semibold d-none d-lg-block">Balance : Rp. 0,-</li>
            <?php endif ?>
            <li class="nav-item dropdown language-dropdown">
              <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-0 mr-md-3">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>
                </div>
                <span class="profile-text font-weight-medium d-none d-md-block">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>English
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-id"></i>
                  </div>Indonesia
                </a>
              </div>
            </li>
          </ul>
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?= base_url(''); ?>assets/staradmin/assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?= base_url(''); ?>assets/staradmin/assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?= base_url(''); ?>assets/staradmin/assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-outline"></i>
                <span class="count bg-success">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-settings m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                    <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li>
            <?php if ($this->session->userdata('id')): ?>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="<?= base_url(''); ?>assets/img/db_img/user_img/<?= $this->session->userdata('img'); ?>" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="<?= base_url(''); ?>assets/img/db_img/user_img/<?= $this->session->userdata('img'); ?>" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold"><?= $this->session->userdata('name'); ?></p>
                  <p class="font-weight-light text-muted mb-0"><?= $this->session->userdata('email'); ?></p>
                </div>
                <a class="dropdown-item" href="<?= base_url('profile/') . $this->session->userdata('id') ?>">My Profile<i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item" href="<?= base_url('profile/') . $this->session->userdata('id') ?>">My Store<i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item" href="<?= base_url('home/signOut') ?>">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
            <?php else: ?>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="<?= base_url(''); ?>assets/img/db_img/user_img/default.png" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="<?= base_url(''); ?>assets/img/db_img/user_img/default.png" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Guest User</p>
                  <a href="<?= base_url('') ?>" class="text-primary">Sign in</a> or
                  <a href="<?= base_url('') ?>" class="text-primary">Sign up</a>
                </div>
              </div>
            </li>
            <?php endif ?>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="<?= base_url('profile/') . $this->session->userdata('id') ?>" class="nav-link">
                <div class="profile-image">
                  <?php if ($this->session->userdata('id')) : ?>
                  <img class="img-xs rounded-circle" src="<?= base_url(''); ?>assets/img/db_img/user_img/<?= $this->session->userdata('img'); ?>" alt="profile image">
                  <?php else: ?>
                   <img class="img-xs rounded-circle" src="<?= base_url(''); ?>assets/img/db_img/user_img/default.png" alt="profile image">   
                  <?php endif ?>
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <?php if ($this->session->userdata('id')) : ?>
                  <p class="profile-name"><?= $this->session->userdata('name'); ?></p>
                  <p class="designation"><small><?= $this->session->userdata('role'); ?></small></p>
                  <?php else: ?>
                  <p class="profile-name">Guest Users</p>
                  <p class="designation"><small>Guest Users</small></p>
                  <?php endif ?>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(''); ?>">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Landing Page</span>
              </a>
            </li>
            <?php if ($this->session->userdata('role') === "admin"): ?>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <i class="menu-icon typcn typcn-coffee"></i>
                  <span class="menu-title">Admin Menu</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('dashboard/transactions'); ?>">Transactions</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('dashboard/users'); ?>">Users Settings</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('dashboard/items'); ?>">Items Settings</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('dashboard/topup'); ?>">Topup Request</a>
                    </li>
                  </ul>
                </div>
              </li>
            <?php endif ?>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">