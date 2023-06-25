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
  <title>Investment </title>
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
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="images/logo.png" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
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
      </div>
      <div id="right-sidebar" class="settings-panel">
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
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
              <h2>Add Investments</h2>
     <form action="" method="GET">
        <div class="input-group mb-3">
            <input type="text" name="term" id="term" placeholder="Search" required class="form-control" value=""<?php if(isset($_GET['term'])){echo $_GET['term']; } ?>>
            <button type="submit" class="btn btn-primary search-button" style="height:38px;">Search</button>
        </div>
    </form>
     <!-- <input type="text" name="term" id="term" placeholder="search here...." class="form-control">   -->
  </div>
  <div class="col-md-16">
    <div class="card mt-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
                <!-- <thead>
                    <tr>
                        <th>Name</th>
                        <th>Symbol</th>
                        <th>Quantity</th>
                        <th>Avg Buy Price</th>
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody> -->
                    <?php 
                                    $con = mysqli_connect("localhost","root","","my_db");

                                    if(isset($_GET['term']))
                                    {
                                        $filtervalues = $_GET['term'];
                                        $query = "SELECT * FROM mytable WHERE NAME_OF_COMPANY LIKE '%$filtervalues%' ";
                                        $query1 = "SELECT * FROM fd WHERE BANK LIKE '%$filtervalues%' ";
                                        $query2 = "SELECT * FROM mutualfund WHERE name LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);
                                        $query_run1 = mysqli_query($con, $query1);
                                        $query_run2 = mysqli_query($con, $query2);

                                        if(mysqli_num_rows($query_run) != 0)
                                        {
                                          ?>
                                          <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Symbol</th>
                                                <th>Quantity</th>
                                                <th>Avg Buy Price</th>
                                                <th>Year</th>
                                                <th>Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                          <?php
                                            foreach($query_run as $items)
                                            {
                                              ?>
                                                <form action="new.php" method="post">
                                                    <tr>
                                                        <td ><input type="text" id="name1" name="name1" value="<?= $items['NAME_OF_COMPANY']; ?>" style="border:0px" readonly></td>
                                                        <td ><input type="text" id="name2" name="name2" value="<?= $items['SYMBOL']; ?>" style="border:0px" readonly></td>
                                                        <td><input type="text" id="name3" name="name3" value="" required></td>
                                                        <td><input type="text" id="name4" name="name4" value="" required></td>
                                                        <td><input type="text" id="datepicker" name="name5" value="" required pattern="\d{4}"></td>
                                                        <!-- <td><button type="submit" name="submit" class="btn btn-primary">Add</button></td> -->
                                                        <td><input type="submit" name="submit" value="Add" class="btn btn-primary"></td>
                                                    </tr>
                                            </form>
                                                <?php
                                            }
                                        }
                                        if(mysqli_num_rows($query_run1) != 0)
                                        {
                                          ?>
                                          <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>FD Rate</th>
                                                <th>Tenure</th>
                                                <th>Amount</th>
                                                <th>Year</th> 
                                                <th>Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                          foreach($query_run1 as $items)
                                            {
                                              ?>
                                                <form action="new.php" method="post">
                                                    <tr>
                                                        <td ><input type="text" id="name12" name="name12" value="<?= $items['BANK']; ?>" style="border:0px" readonly></td>
                                                        <td ><input type="text" id="name22" name="name22" value="<?= $items['FD_RATES']; ?>" style="border:0px" readonly></td>
                                                        <td><input type="text" id="name32" name="name32" value="" required></td>
                                                        <td><input type="text" id="name42" name="name42" value="" required></td>
                                                        <!-- <input type="hidden" id="name62" name="name62" value="<?= $items['ID']; ?>"> -->
                                                        <td><input type="text" id="datepicker" name="name52" value="" required pattern="\d{4}"></td>
                                                        <td><input type="submit" name="submit" value="Add" class="btn btn-primary"></td>
                                                    </tr>
                                            </form>
                                                <?php
                                            }
                                        }
                                        if(mysqli_num_rows($query_run2) != 0)
                                        {
                                          ?>
                                                <thead>
                                                  <tr>
                                                      <th>Name</th>
                                                      <th>Symbol</th>
                                                      <th>Quantity</th>
                                                      <th>Avg NAV</th>
                                                      <th>Year</th>
                                                      <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <?php
                                            foreach($query_run2 as $items)
                                            {
                                                ?>
                                                <form action="new.php" method="post">
                                                    <tr>
                                                        <td ><input type="text" id="name13" name="name13" value="<?= $items['name']; ?>" style="border:0px" readonly></td>
                                                        <td ><input type="text" id="name23" name="name23" value="<?= $items['symbol']; ?>" style="border:0px" readonly></td>
                                                        <td><input type="text" id="name33" name="name33" value="" required></td>
                                                        <td><input type="text" id="name43" name="name43" value="" required></td>
                                                        <!-- <input type="hidden" id="name62" name="name62" value="<?= $items['ID']; ?>"> -->
                                                        <td><input type="text" id="datepicker" name="name53" value="" required pattern="\d{4}"></td>
                                                        <td><input type="submit" name="submit" value="Add" class="btn btn-primary"></td>
                                                    </tr>
                                            </form>
                                                <?php
                                            }
                                        }
                                        if(mysqli_num_rows($query_run) == 0 && mysqli_num_rows($query_run1) == 0 && mysqli_num_rows($query_run2) == 0)
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                </tbody>
            </table>
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
  <script src="js/dashboard.js"></script>
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
    $(function() {
        $('#datepicker').datepicker({
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'yy',
        onClose: function(dateText, inst) {
          var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
          $(this).datepicker('setDate', new Date(year, 1));
        }
      });

      $("#datepicker").focus(function() {
        $(".ui-datepicker-month").hide();
        $(".ui-datepicker-calendar").hide();
      });

````});
    </script>
</body>

</html>

