
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url("/dassets/assets/vendors/mdi/css/materialdesignicons.min.css")}}">
    <link rel="stylesheet" href="{{url("/dassets/assets/vendors/flag-icon-css/css/flag-icon.min.css")}}">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{url("/dassets/assets/vendors/font-awesome/css/font-awesome.min.css")}}" />
    <link rel="stylesheet" href="{{url("/dassets/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css")}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{url("/dassets/assets/css/style.css")}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{url("/dassets/assets/images/favicon.png")}}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="{{url("/dashboard")}}"><img src="{{url("/dassets/assets/images/logo.svg")}}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="{{url("/dashboard")}}"><img src="{{url("/dassets/assets/images/logo-mini.svg")}}assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-xl-block">
            
          </div>
          <ul class="navbar-nav navbar-nav-right">
            
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="{{url("/dassets/assets/images/faces/face28.png")}}" alt="image">
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">AamirKhan</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                <div class="p-3 text-center bg-primary">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/images/faces/face28.png" alt="">
                </div>
                <div class="p-2">
                  <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Inbox</span>
                    <span class="p-0">
                      <span class="badge badge-primary">3</span>
                      <i class="mdi mdi-email-open-outline ml-1"></i>
                    </span>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Profile</span>
                    <span class="p-0">
                      <span class="badge badge-success">1</span>
                      <i class="mdi mdi-account-outline ml-1"></i>
                    </span>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span>Settings</span>
                    <i class="mdi mdi-settings"></i>
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Lock Account</span>
                    <i class="mdi mdi-lock ml-1"></i>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Log Out</span>
                    <i class="mdi mdi-logout ml-1"></i>
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-success"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0 bg-primary text-white py-4">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
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
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("/dashboard")}}">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                <span class="menu-title">Main Catagroy</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/maincatagery')}}">Add catagroy</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/maincatagery/list')}}">List catagroy</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#sub" aria-expanded="false" aria-controls="auth">
                  <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                  <span class="menu-title">Add Catagroy</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="sub">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/catagery')}}"> Add Catagroy </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/catagery/list')}}">List Catagroy</a></li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#subb" aria-expanded="false" aria-controls="auth">
                  <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                  <span class="menu-title">Add Sub Catagroy</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="subb">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Add Catagroy </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">List Catagroy</a></li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#prod" aria-expanded="false" aria-controls="auth">
                  <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                  <span class="menu-title">Add Products</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="prod">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html">Add Products </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">List Products</a></li>
                  </ul>
                </div>
              </li>

            <li class="nav-item">
              <a class="nav-link" href="{{url('/dashobard/massages')}}">
                <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                <span class="menu-title">Massages</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                <span class="menu-title">User List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                <span class="menu-title">Approve Products</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                <span class="menu-title">Tables</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#admi" aria-expanded="false" aria-controls="auth">
                  <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                  <span class="menu-title">Add Admin</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="admi">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html">Add Admin</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">List Admin</a></li>
                  </ul>
                </div>
              </li>

            
            <li class="nav-item documentation-link">
              <a class="nav-link" href="#" target="_blank">
                <span class="icon-bg">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                </span>
                <span class="menu-title">GO TO STORE</span>
              </a>
            </li>
            
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                  <span class="menu-title">Settings</span>
                </a>
              </div>
            </li>
            
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div>
            </li>
          </ul>
        </nav>
        @yield('dashadmin')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2023 AdNexus Digital</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Built with AMART by Aamirkhan</span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{url("/dassets/assets/vendors/js/vendor.bundle.base.js")}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{url("/dassets/assets/vendors/chart.js/Chart.min.js")}}"></script>
    <script src="{{url("/dassets/assets/vendors/jquery-circle-progress/js/circle-progress.min.js")}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{url("/dassets/assets/js/off-canvas.js")}}"></script>
    <script src="{{url("/dassets/assets/js/hoverable-collapse.js")}}"></script>
    <script src="{{url("/dassets/assets/js/misc.js")}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{url("/dassets/assets/js/dashboard.js")}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>