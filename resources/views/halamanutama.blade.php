
<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Sample Page | Mantis Bootstrap 5 Admin Template</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">

  <!-- [Favicon] icon -->
  <link rel="icon" href="{{asset('template/images/favicon.svg')}}" type="image/x-icon"> <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="{{asset('template/fonts/tabler-icons.min.css')}}" >
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="{{asset('template/fonts/feather.css')}}" >
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="{{asset('template/fonts/fontawesome.css')}}" >
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="{{asset('template/fonts/material.css')}}" >
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="{{asset('template/css/style.css')}}" id="main-style-link" >
<link rel="stylesheet" href="{{asset('template/css/style-preset.css')}}" >

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item">
          <a href="/halamanutama" class="pc-link">
            <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item d-inline-flex d-md-none">
      <a
        class="pc-head-link dropdown-toggle arrow-none m-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ti ti-search"></i>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-3">
          <div class="form-group mb-0 d-flex align-items-center">
            <i data-feather="search"></i>
            <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
          </div>
        </form>
      </div>
    </li>
    <li class="pc-h-item d-none d-md-inline-flex">
      <form class="header-search">
        <i data-feather="search" class="icon-search"></i>
        <input type="search" class="form-control" placeholder="Search here. . .">
      </form>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ti ti-mail"></i>
      </a>
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Message</h5>
          <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-x text-danger"></i></a>
        </div>
        <div class="dropdown-divider"></div>
        <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
          <div class="list-group list-group-flush w-100">
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="{{asset('template/images/user/avatar-2.jpg')}}" alt="user-image" class="user-avtar">
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">3:00 AM</span>
                  <p class="text-body mb-1">It's <b>Cristina danny's</b> birthday today.</p>
                  <span class="text-muted">2 min ago</span>
                </div>
              </div>
            </a>
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="{{asset('template/images/user/avatar-1.jpg')}}" alt="user-image" class="user-avtar">
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">6:00 PM</span>
                  <p class="text-body mb-1"><b>Aida Burg</b> commented your post.</p>
                  <span class="text-muted">5 August</span>
                </div>
              </div>
            </a>
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="{{asset('template/images/user/avatar-3.jpg')}}" alt="user-image" class="user-avtar">
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">2:45 PM</span>
                  <p class="text-body mb-1"><b>There was a failure to your setup.</b></p>
                  <span class="text-muted">7 hours ago</span>
                </div>
              </div>
            </a>
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="{{asset('template/images/user/avatar-4.jpg')}}" alt="user-image" class="user-avtar">
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">9:10 PM</span>
                  <p class="text-body mb-1"><b>Cristina Danny </b> invited to join <b> Meeting.</b></p>
                  <span class="text-muted">Daily scrum meeting time</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <div class="text-center py-2">
          <a href="#!" class="link-primary">View all</a>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        data-bs-auto-close="outside"
        aria-expanded="false"
      >
        <img src="{{asset('template/images/user/avatar-2.jpg')}}" alt="user-image" class="user-avtar">
        <span>Aidil Ridha</span>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <div class="d-flex mb-1">
            <div class="flex-shrink-0">
              <img src="{{asset('template/images/user/avatar-2.jpg')}}" alt="user-image" class="user-avtar wid-35">
            </div>
            <div class="flex-grow-1 ms-3">
              <h6 class="mb-1">Aidil Ridha</h6>
              <span>Web designer</span>
            </div>
            <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-power text-danger"></i></a>
          </div>
        </div>
        <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="drp-t1"
              data-bs-toggle="tab"
              data-bs-target="#drp-tab-1"
              type="button"
              role="tab"
              aria-controls="drp-tab-1"
              aria-selected="true"
              ><i class="ti ti-user"></i> Profile</button
            >
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="drp-t2"
              data-bs-toggle="tab"
              data-bs-target="#drp-tab-2"
              type="button"
              role="tab"
              aria-controls="drp-tab-2"
              aria-selected="false"
              ><i class="ti ti-settings"></i> Setting</button
            >
          </li>
        </ul>
        <div class="tab-content" id="mysrpTabContent">
          <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1" tabindex="0">
            <a href="#!" class="dropdown-item">
              <i class="ti ti-edit-circle"></i>
              <span>Edit Profile</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-user"></i>
              <span>View Profile</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-clipboard-list"></i>
              <span>Social Profile</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-wallet"></i>
              <span>Billing</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-power"></i>
              <span>Logout</span>
            </a>
          </div>
          <div class="tab-pane fade" id="drp-tab-2" role="tabpanel" aria-labelledby="drp-t2" tabindex="0">
            <a href="#!" class="dropdown-item">
              <i class="ti ti-help"></i>
              <span>Support</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-user"></i>
              <span>Account Settings</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-lock"></i>
              <span>Privacy Center</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-messages"></i>
              <span>Feedback</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-list"></i>
              <span>History</span>
            </a>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
 </div>
</header>
<!-- [ Header ] end -->



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>Ai - Doorsmeer</h5>
            </div>
            <div class="card-body">
                <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                      <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Total Melihat halaman</h6>
                        <h4 class="mb-3">4,42,236 <span class="badge bg-light-primary border border-primary"><i
                              class="ti ti-trending-up"></i> 59.3%</span></h4>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-xl-3">
                    <div class="card">
                      <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Total Pengguna</h6>
                        <h4 class="mb-3">78,250 <span class="badge bg-light-success border border-success"><i
                              class="ti ti-trending-up"></i> 70.5%</span></h4>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-3">
                    <div class="card">
                      <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Total Order</h6>
                        <h4 class="mb-3">18,800 <span class="badge bg-light-warning border border-warning"><i
                              class="ti ti-trending-down"></i> 27.4%</span></h4>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-3">
                    <div class="card">
                      <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Total Keuntungan</h6>
                        <h4 class="mb-3">Rp 1.000.000 <span class="badge bg-light-danger border border-danger"><i
                              class="ti ti-trending-down"></i> 27.4%</span></h4>

                      </div>
                    </div>
                  </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xl-8">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h5 class="mb-0">Unique Visitor</h5>
                      <ul class="nav nav-pills justify-content-end mb-0" id="chart-tab-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="chart-tab-home-tab" data-bs-toggle="pill" data-bs-target="#chart-tab-home"
                            type="button" role="tab" aria-controls="chart-tab-home" aria-selected="true">Month</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="chart-tab-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#chart-tab-profile" type="button" role="tab" aria-controls="chart-tab-profile"
                            aria-selected="false">Week</button>
                        </li>
                      </ul>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div class="tab-content" id="chart-tab-tabContent">
                          <div class="tab-pane" id="chart-tab-home" role="tabpanel" aria-labelledby="chart-tab-home-tab"
                            tabindex="0">
                            <div id="visitor-chart-1"></div>
                          </div>
                          <div class="tab-pane show active" id="chart-tab-profile" role="tabpanel"
                            aria-labelledby="chart-tab-profile-tab" tabindex="0">
                            <div id="visitor-chart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-xl-4">
                    <h5 class="mb-3">Income Overview</h5>
                    <div class="card">
                      <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
                        <h3 class="mb-3">$7,650</h3>
                        <div id="income-overview-chart"></div>
                      </div>
                    </div>
                  </div>
            </div>

          </div>
        </div>
        <!-- [ sample-page ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
      <div class="row">
        <div class="col-sm my-1">
            <span>Copyright &copy; Aidil Ridha 2025</span>
        </div>
        <div class="col-auto my-1">
          <ul class="list-inline footer-link mb-0">
            <li class="list-inline-item"><a href="../index.html">Home</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer> <!-- Required Js -->
<script src="{{asset('template/js/plugins/popper.min.js')}}"></script>
<script src="{{asset('template/js/plugins/simplebar.min.js')}}"></script>
<script src="{{asset('template/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('template/js/fonts/custom-font.js')}}"></script>
<script src="{{asset('template/js/pcoded.js')}}"></script>
<script src="{{asset('template/js/plugins/feather.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>






<script>layout_change('light');</script>




<script>change_box_container('false');</script>



<script>layout_rtl_change('false');</script>


<script>preset_change("preset-1");</script>


<script>font_change("Public-Sans");</script>




</body>
<!-- [Body] end -->

</html>
