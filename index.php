<?php
        session_start();
        $mail=$_SESSION['email'];
        $name=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GoGain</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
 
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <!-- Bootstrap Css -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.php">
            <img src="images/logo.png" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.php">
            <img src="images/logo.png" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Hello, <span class="text-black fw-bold"><?=$name?></span></h1>
            <h3 class="welcome-sub-text">Your performance summary this week </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
        <!-- <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-mail icon-lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
            </div>
          </li> -->
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="images/faces/face.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="images/faces/face.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold"><?=$name?></p>
                <p class="fw-light text-muted mb-0"><?=$mail?></p>
              </div>
             
              <a class="dropdown-item" href="logout.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div> -->
      <!-- <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
        </div>
      </div> -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inv.php">
              <i class="mdi mdi-card-text-outline menu-icon"></i>
              <span class="menu-title">Investment</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add.php">
              <i class="mdi mdi-layers-outline menu-icon"></i>
              <span class="menu-title">Add</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="delete.php">
              <i class="mdi mdi-layers-outline menu-icon"></i>
              <span class="menu-title">Delete</span>
            </a>
          </li>
          <!-- <li class="nav-item nav-category">UI Elements</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Forms and Datas</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Form elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">help</li>
          <li class="nav-item">
            <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                   
                  </ul>
                  <div>
                    
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Total Investment</p>
                            <h3 class="rate-percentage">
                            <?php 
                                    require_once "db.php";
                                    $query = "SELECT sum(total) FROM invsm where email='$mail' group by symbol";
                                    $query2 = "SELECT sum(total) FROM invmf where email='$mail' group by symbol";
                                    $query1 = "SELECT Amount FROM invfd where email='$mail' group by name";
                                    $query_run = mysqli_query($conn, $query);
                                    $query_run1 = mysqli_query($conn, $query1);
                                    $query_run2 = mysqli_query($conn, $query2);
                                    $inv=0;
                                    if(mysqli_num_rows($query_run) != 0)
                                    {
                                        foreach($query_run as $items)
                                        {
                                            $inv=$inv+$items['sum(total)'];
                                        }
                                    }
                                    if(mysqli_num_rows($query_run1) != 0)
                                    {
                                        foreach($query_run1 as $items)
                                        {
                                            $inv=$inv+$items['Amount'];
                                        }
                                    }
                                    if(mysqli_num_rows($query_run2) != 0)
                                    {
                                        foreach($query_run2 as $items)
                                        {
                                            $inv=$inv+$items['sum(total)'];
                                        }
                                    }

                                            ?><?= $inv?>
                            </h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">Current Value</p>
                            <h3 class="rate-percentage">
                            <?php 
                                    require_once "db.php";
                                    $query = "SELECT sum(profit) FROM profitsm where email='$mail' group by symbol";
                                    $query2 = "SELECT sum(profit) FROM profitmf where email='$mail' group by symbol";
                                    $query1 = "SELECT profit FROM profitfd where email='$mail' group by symbol";
                                    $query_run = mysqli_query($conn, $query);
                                    $query_run1 = mysqli_query($conn, $query1);
                                    $query_run2 = mysqli_query($conn, $query2);
                                    $ret=0;
                                    if(mysqli_num_rows($query_run) != 0)
                                    {
                                        foreach($query_run as $items)
                                        {
                                            $ret=$ret+$items['sum(profit)'];
                                        }
                                    }
                                    if(mysqli_num_rows($query_run1) != 0)
                                    {
                                        foreach($query_run1 as $items)
                                        {
                                            $ret=$ret+$items['profit'];
                                        }
                                    }
                                    if(mysqli_num_rows($query_run2) != 0)
                                    {
                                        foreach($query_run2 as $items)
                                        {
                                            $ret=$ret+$items['sum(profit)'];
                                        }
                                    }

                                            ?><?= $inv+$ret?>
                            </h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">Returns</p>
                            <h3 class="rate-percentage">
                            <?php 
                                    // require_once "db.php";
                                    // $query = "SELECT sum(total) FROM invsm where email='$mail' group by symbol";
                                    // $query2 = "SELECT sum(total) FROM invmf where email='$mail' group by symbol";
                                    // $query1 = "SELECT Amount FROM invfd where email='$mail' group by name";
                                    // $query_run = mysqli_query($conn, $query);
                                    // $query_run1 = mysqli_query($conn, $query1);
                                    // $query_run2 = mysqli_query($conn, $query2);
                                    // $inv=0;
                                    // if(mysqli_num_rows($query_run) != 0)
                                    // {
                                    //     foreach($query_run as $items)
                                    //     {
                                    //         $inv=$inv+$items['sum(total)'];
                                    //     }
                                    // }
                                    // if(mysqli_num_rows($query_run1) != 0)
                                    // {
                                    //     foreach($query_run1 as $items)
                                    //     {
                                    //         $inv=$inv+$items['Amount'];
                                    //     }
                                    // }
                                    // if(mysqli_num_rows($query_run2) != 0)
                                    // {
                                    //     foreach($query_run2 as $items)
                                    //     {
                                    //         $inv=$inv+$items['sum(total)'];
                                    //     }
                                    // }

                                            ?><?= $ret?>
                            </h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">Returns Percentage</p>
                            <h3 class="rate-percentage">
                            <?php 
                                    // require_once "db.php";
                                    // $query = "SELECT sum(total) FROM invsm where email='$mail' group by symbol";
                                    // $query2 = "SELECT sum(total) FROM invmf where email='$mail' group by symbol";
                                    // $query1 = "SELECT Amount FROM invfd where email='$mail' group by name";
                                    // $query_run = mysqli_query($conn, $query);
                                    // $query_run1 = mysqli_query($conn, $query1);
                                    // $query_run2 = mysqli_query($conn, $query2);
                                    // $inv=0;
                                    // if(mysqli_num_rows($query_run) != 0)
                                    // {
                                    //     foreach($query_run as $items)
                                    //     {
                                    //         $inv=$inv+$items['sum(total)'];
                                    //     }
                                    // }
                                    // if(mysqli_num_rows($query_run1) != 0)
                                    // {
                                    //     foreach($query_run1 as $items)
                                    //     {
                                    //         $inv=$inv+$items['Amount'];
                                    //     }
                                    // }
                                    // if(mysqli_num_rows($query_run2) != 0)
                                    // {
                                    //     foreach($query_run2 as $items)
                                    //     {
                                    //         $inv=$inv+$items['sum(total)'];
                                    //     }
                                    // }

                                            ?><?= round(($ret/($inv+$ret))*100),"%"?>
                            </h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                          </div>
                          <!-- <div>
                            <p class="statistics-title">Page Views</p>
                            <h3 class="rate-percentage" id="testdata">7,682</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">New Sessions</p>
                            <h3 class="rate-percentage">68.8</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Avg. Time on Site</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">New Sessions</p>
                            <h3 class="rate-percentage">68.8</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Avg. Time on Site</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                          </div> -->
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-lg-6 d-flex flex-row" style="position: relative;top: -40px;">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Investment</h4>
                                   <p class="card-subtitle card-subtitle-dash">Total Investment</p>
                                   <!-- <h4 class="card-title">Line chart</h4> -->
                                   <!-- <div class="col-lg-6 grid-margin stretch-card">
                                    
                                  </div> -->
                                  </div>
                                  <!-- <div class="col-lg-6 grid-margin stretch-card">
                                    <div class="card">
                                      <div class="card-body">
                                        
                                      </div>
                                    </div>
                                  </div> -->
                                  
                                </div>
                                
                                <!-- <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                  <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">$36,2531.00</h2><h4 class="me-2">USD</h4><h4 class="text-success">(+1.37%)</h4></div>
                                  <div class="me-3"><div id="marketing-overview-legend"></div></div>
                                </div>
                                <div class="chartjs-bar-wrapper mt-3">
                                  <canvas id="marketingOverview"></canvas>
                                </div> -->
                                <canvas class="my-auto" height="166" width="400" id="lineChart"></canvas>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="card-title card-title-dash">Type By Amount</h4>
                                      </div>
                                      <canvas class="my-auto" id="doughnutChart" height="166" width="500"></canvas>
                                      <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <!-- <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Pending Requests</h4>
                                   <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p>
                                  </div>
                                  <div>
                                    <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new member</button>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </th>
                                        <th>Customer</th>
                                        <th>Company</th>
                                        <th>Progress</th>
                                        <th>Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <img src="images/faces/face1.jpg" alt="">
                                            <div>
                                              <h6>Brandon Washington</h6>
                                              <p>Head admin</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Company name 1</h6>
                                          <p>company type</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">79%</p>
                                              <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">In progress</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <img src="images/faces/face2.jpg" alt="">
                                            <div>
                                              <h6>Laura Brooks</h6>
                                              <p>Head admin</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Company name 1</h6>
                                          <p>company type</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">65%</p>
                                              <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">In progress</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <img src="images/faces/face3.jpg" alt="">
                                            <div>
                                              <h6>Wayne Murphy</h6>
                                              <p>Head admin</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Company name 1</h6>
                                          <p>company type</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">65%</p>
                                              <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-warning" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">In progress</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <img src="images/faces/face4.jpg" alt="">
                                            <div>
                                              <h6>Matthew Bailey</h6>
                                              <p>Head admin</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Company name 1</h6>
                                          <p>company type</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">65%</p>
                                              <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-danger">Pending</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <img src="images/faces/face5.jpg" alt="">
                                            <div>
                                              <h6>Katherine Butler</h6>
                                              <p>Head admin</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Company name 1</h6>
                                          <p>company type</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">65%</p>
                                              <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-success">Completed</div></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                        <!-- <div class="row flex-grow">
                          <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body card-rounded">
                                <h4 class="card-title  card-title-dash">Recent Events</h4>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Change in Directors
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Other Events
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Quarterly Report
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Change in Directors
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="list align-items-center pt-3">
                                  <div class="wrapper w-100">
                                    <p class="mb-0">
                                      <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                  <h4 class="card-title card-title-dash">Activities</h4>
                                  <p class="mb-0">20 finished, 5 remaining</p>
                                </div>
                                <ul class="bullet-line-list">
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                      <p>Just now</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Oliver Noah</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Jack William</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Leo Lucas</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Thomas Henry</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                </ul>
                                <div class="list align-items-center pt-3">
                                  <div class="wrapper w-100">
                                    <p class="mb-0">
                                      <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                      </div>
                    <!-- <div class="container">
                    <div class="row">
                        <h2>Search Here</h2>
                        <form action="" method="GET">
                          <div class="input-group mb-3">
                              <input type="text" name="term" id="term" placeholder="search here...." value="" class="form-control" <?php if(isset($_GET['term'])){echo $_GET['term']; } ?>
                              <button type="submit" class="btn btn-primary">Search</button>
                          </div>
                      </form>
                    </div>
                    </div> -->
                      <!-- <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <h4 class="card-title card-title-dash">Todo list</h4>
                                      <div class="add-items d-flex mb-0">
                                        <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                        <!-- <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                      </div>
                                    </div>
                                    <div class="list-wrapper">
                                      <ul class="todo-list todo-list-rounded">
                                        <li class="d-block">
                                          <div class="form-check w-100">
                                            <label class="form-check-label">
                                              <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                            </label>
                                            <div class="d-flex mt-2">
                                              <div class="ps-4 text-small me-3">24 June 2020</div>
                                              <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                              <i class="mdi mdi-flag ms-2 flag-color"></i>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="d-block">
                                          <div class="form-check w-100">
                                            <label class="form-check-label">
                                              <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                            </label>
                                            <div class="d-flex mt-2">
                                              <div class="ps-4 text-small me-3">23 June 2020</div>
                                              <div class="badge badge-opacity-success me-3">Done</div>
                                            </div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="form-check w-100">
                                            <label class="form-check-label">
                                              <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                            </label>
                                            <div class="d-flex mt-2">
                                              <div class="ps-4 text-small me-3">24 June 2020</div>
                                              <div class="badge badge-opacity-success me-3">Done</div>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="border-bottom-0">
                                          <div class="form-check w-100">
                                            <label class="form-check-label">
                                              <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                            </label>
                                            <div class="d-flex mt-2">
                                              <div class="ps-4 text-small me-3">24 June 2020</div>
                                              <div class="badge badge-opacity-danger me-3">Expired</div>
                                            </div>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                        
                        <!-- <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div>
                                        <h4 class="card-title card-title-dash">Leave Report</h4>
                                      </div>
                                      <div>
                                        <div class="dropdown">
                                          <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <h6 class="dropdown-header">week Wise</h6>
                                            <a class="dropdown-item" href="#">Year Wise</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="mt-3">
                                      <canvas id="leaveReport"></canvas>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                        <!-- <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div>
                                        <h4 class="card-title card-title-dash">Top Performer</h4>
                                      </div>
                                    </div>
                                    <div class="mt-3">
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face1.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                            <small class="text-muted mb-0">162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face2.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                                            <small class="text-muted mb-0">162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face3.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                                            <small class="text-muted mb-0">162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face4.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                                            <small class="text-muted mb-0">162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face5.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                            <small class="text-muted mb-0">Alaska, USA</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- <script src="js/dashboard.js"></script> -->
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- <script src="js/testapi.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <!-- End custom js for this page-->
  <script type="text/javascript">
    $(function() {
        $( "#term" ).autocomplete({
        source: 'ajax-db-search.php',
        });
    });
    </script>
  <script>
    $(function() {
  /* ChartJS
   * -------
   * Data and config for chartjs
   */    
                    
    'use strict';
    var dbData;
     $.ajax({
      url: "chartdb.php",
      method: "GET"
      }).done(function(d) {
          dbData=d;
          //Deal with the response
        //var data2=JSON.parse(dbData);
        var testdata=dbData.split(" ");
        console.log(testdata[0].split(","));
        console.log("Done");
        //console.log(json_encode(dbData));
        //{
            //JSON.stringify(dbData);
        //}
           //Deal with the response
           var total=testdata[1].split(",")
          // const x = document.getElementById("fetchtotal");
          // x.innerHTML = total[total.length-1];
    var data = {
        
        
            // console.log(dbData);
            // echo dbData;
            labels: testdata[0].split(","),
        
        datasets: [{
        label: '# of Votes',
        data: testdata[1].split(","),
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1,
        fill: false
        }]
    
    };
    var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }

    };
    if ($("#lineChart").length) {
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: data,
      options: options
    });
}
});
});
  </script>
  <script>
      $(function() {
        'use strict';
    var dbData;
     $.ajax({
      url: "piedb.php",
      method: "GET"
      }).done(function(d) {
          dbData=d;
          console.log(dbData.split(","));
        if ($("#doughnutChart").length) {
      var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
      var doughnutPieData = {
        datasets: [{
          data: dbData.split(","),
          backgroundColor: [
            "#1F3BB3",
            "#FDD0C7",
            "#52CDFF",
            "#81DADA"
          ],
          borderColor: [
            "#1F3BB3",
            "#FDD0C7",
            "#52CDFF",
            "#81DADA"
          ],
        }],
  
        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
          'Other',
          'Stock',
          'FD',
          'Mutual Fund',
        ]
      };
      var doughnutPieOptions = {
        cutoutPercentage: 50,
        animationEasing: "easeOutBounce",
        animateRotate: true,
        animateScale: false,
        responsive: true,
        maintainAspectRatio: true,
        showScale: true,
        legend: false,
        legendCallback: function (chart) {
          var text = [];
          text.push('<div class="chartjs-legend"><ul class="justify-content-center">');
          for (var i = 0; i < chart.data.datasets[0].data.length; i++) {
            text.push('<li><span style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '">');
            text.push('</span>');
            if (chart.data.labels[i]) {
              text.push(chart.data.labels[i]);
            }
            text.push('</li>');
          }
          text.push('</div></ul>');
          return text.join("");
        },
        
        layout: {
          padding: {
            left: 0,
            right: 0,
            top: 0,
            bottom: 0
          }
        },
        tooltips: {
          callbacks: {
            title: function(tooltipItem, data) {
              return data['labels'][tooltipItem[0]['index']];
            },
            label: function(tooltipItem, data) {
              return data['datasets'][0]['data'][tooltipItem['index']];
            }
          },
            
          backgroundColor: '#fff',
          titleFontSize: 14,
          titleFontColor: '#0B0F32',
          bodyFontColor: '#737F8B',
          bodyFontSize: 11,
          displayColors: false
        }
      };
      var doughnutChart = new Chart(doughnutChartCanvas, {
        type: 'doughnut',
        data: doughnutPieData,
        options: doughnutPieOptions
      });
      document.getElementById('doughnut-chart-legend').innerHTML = doughnutChart.generateLegend();
    };
      });
  });
  </script>
</body>

</html>