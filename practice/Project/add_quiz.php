<?php
include('../Project/validations.php');
if (!isAdmin()) {                                 //function to check if the user is admin or not
  $_SESSION['msg'] = "You must log in first";
  header('location: ../Project/nav.php');
}

?>
<!DOCTYPE html>                                                                                                                                                                    
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../Project/admin_dashboard/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../Project/admin_dashboard/assets/img/logo/logo1.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../Project/user_dashboard/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../Project/admin_dashboard/assets/css/add_quiz.css"/>

  <style>
  .logo_text
{
  font-family: 'Roboto Slab', serif;
  font-size: 36px;
  font-weight: 700;
  line-height: 0.75;
  color: #fff;
  vertical-align: middle;
  margin-left: 7px;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.logo_text span
{
  color: #ffba00;
}
.logo .user .photo {
    width: 34px;
    height: 34px;
    overflow: hidden;
    border-radius: 50%;
    float: left;
    margin-right: 11px;
    margin-left: 50px;
    z-index: 5;
    border: 2px solid rgba(255,255,255,.3);}
    .logo .user .photo img{
      width: 100%;
      vertical-align: middle;
      border: 0;
    }
    .logo .user a {
    color:#fff;
    padding: 8px 14px;
    display: block;
    white-space: nowrap;
    font-weight: bold;}
    .logo .user .info>a>span {
    opacity: 1;
    line-height: 20px;
    display: block;
    font-size: 18px;
    position: relative;}
  </style>
  </head>

<body class="">

  <div class="wrapper ">
    <div class="sidebar" data-color="brown" data-background-color="white" data-image="../Project/admin_dashboard/assets/img/sidebar-3.jpg">
    
    <div class="logo" style="background-image:url(../Project/user_dashboard/assets/banner.jpg)">
      <a href="#" class="simple-text logo-normal">
        <div class="logo_text">Quiz<span>one</span></div><br>
      </a>     

    
      <div class="user">
          <div class="info">
            <div class="photo">
                <div class="img" style="background-size:cover;" >
              <?php
            $con = mysqli_connect("localhost","root","","wdl");     //making connection(not needed)
             $q = mysqli_query($con,"SELECT Profile_image from user WHERE username = '".$_SESSION['user']['username']."'");     //selecting Profile image of session user from database and storing in $q
            while($row = mysqli_fetch_assoc($q)){                                                                                //checking if user has set any profile image or not
                    if($_SESSION['user']['Profile_image']==""){                                     //if the user haven't uploaded any proile image
                      echo "<img src='assets/faces/default.png' alt='Profile Pic'>";                   //echo the default image
                    }
                    else{
                         echo "<img src='assets/faces/".$_SESSION['user']['Profile_image']."' alt='Profile Pic'>";                   //echo the profile image

                    }
                  }

        ?></div>
              </div>
            </div>
            <a class="collapsed" data-toggle="collapse" href="#collapseExample" aria-expanded="false">
            <?php if (isset($_SESSION['success'])) : ?>
      
    <?php endif ?>

              <span style="color:white;"> 
              <?php  if (isset($_SESSION['user'])) : ?>
          <strong><?php echo $_SESSION['user']['username']; ?></strong>

          <small>
            <i  style="color: #fff;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
            <br>
          
          </small>

        <?php endif ?>
          </span> 
            </a>
          </div>

        <div class="error success" >
        <h3>
          <?php 
          //  echo $_SESSION['success']; 
          //  unset($_SESSION['success']);
          ?>
        </h3>
      </div>
        
    </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item   ">
            <a class="nav-link" href="../Project/admindashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../Project/admin_user.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../Project/student_list.php">
              <i class="material-icons">content_paste</i>
              <p>Students List</p>
            </a>
          </li>
          <!--
          <li class="nav-item ">
            <a class="nav-link" href="../Project/companies.html">
              <i class="material-icons">card_travel</i>
              <p>Companies</p>
            </a>
          </li>-->
          <li class="nav-item active">
            <a class="nav-link" href="../Project/add_quiz.php">
              <i class="material-icons">school</i>
              <p>Add Quiz</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../Project/admin_results.php">
              <i class="material-icons">emoji_events</i>
              <p>Results</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../Project/admin_notifications.php">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../Project/admin_settings.php">
              <i class="material-icons">settings</i>
              <p>Settings</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;" style="font-family: Roboto Slab; font-size: 26px">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
              
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="./logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="col-12">
              <div class="card">
                <div class="card-body sidebar_quiz d-flex align-items-center">
                  <button class="side_button add_question">Add Question</button>
                  <button class="side_button">Question 1</button>
                  <button  class="side_button">Question 2</button>
                  <button  class="side_button">Question 3</button>
                  <button  class="side_button">Question 4</button>
                  <button  class="side_button">Question 5</button>
                  <button  class="side_button">Question 6</button>
                  <button  class="side_button">Question 7</button>
                  <button  class="side_button">Question 8</button>
                </div>
                
              </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Question no 1</h4>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group mt-3">
                        <label class="bmd-label-floating">Type your question here</label>
                        <textarea id="txtarea" class="form-control" rows="5"></textarea>
                      </div>
                    </div>
                    <div class="container-fluid mt-4">
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                          <div class="row">
                            <div class="col-12 col-sm-12 col-md-8 m-auto">
                              <div class="form-group mt-3">
                                <label class="bmd-label-floating">Time limit in seconds</label>
                                <input type="number" class="form-control"/>
                              </div>
                              <div class="form-group mt-4">
                                <label for="name">Answer Type</label>
                                <div class="checkboxes mt-2">
                                  <label for="x"><input type="radio" name="usage_commit" value="true" checked/> <span>Single Select</span></label>
                                  <label for="z" class="ml-2"><input type="radio" name="usage_commit" value="false"/> <span>Multiple Select</span></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          
                        </div>
                        <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                          <div class="upload_img m-auto">
                            <img src="../Project/assets/add-image.png" class="add_image_icon"/>
                          <div class="edit_icon">
                            <i class="material-icons">edit</i>
                            <input
                              type="file"
                              class="upload-image-input"
                              accept=".jpg,.png,.gif,.jpeg,.bmp,.svg,.giphy"
                            ></input>
                          </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="d-flex flex-wrap align-items-center w-100 mt-5">
                      <div class="col-12 col-md-6">
                        <div class="form-row  mt-3">
                          <div class="form-group col-lg-10 m-lg-auto">
                            <label class="bmd-label-floating">Option 1</label>
                            <input id="txtarea" class="form-control"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-row  mt-3">
                          <div class="form-group col-lg-10 m-lg-auto">
                            <label class="bmd-label-floating">Option 2</label>
                            <input id="txtarea" class="form-control"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-row  mt-3">
                          <div class="form-group col-lg-10 m-lg-auto">
                            <label class="bmd-label-floating">Option 3</label>
                            <input id="txtarea" class="form-control"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-row  mt-3">
                          <div class="form-group col-lg-10 m-lg-auto">
                            <label class="bmd-label-floating">Option 4</label>
                            <input id="txtarea" class="form-control"/>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="#">
                  About Us
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </div>
        </div>
      </footer>
    </div>                                                                                                                                                                      
  </div>
  
  <!--   Core JS Files   -->
 <script src="../Project/admin_dashboard/assets/js/core/jquery.min.js"></script>
  <script src="../Project/admin_dashboard/assets/js/core/popper.min.js"></script>
  <script src="../Project/admin_dashboard/assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../Project/admin_dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../Project/admin_dashboard/assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../Project/admin_dashboard/assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../Project/admin_dashboard/assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../Project/admin_dashboard/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../Project/admin_dashboard/assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../Project/admin_dashboard/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../Project/admin_dashboard/assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../Project/admin_dashboard/assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../Project/admin_dashboard/assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../Project/admin_dashboard/assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../Project/admin_dashboard/assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../Project/admin_dashboard/assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../Project/admin_dashboard/assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../Project/admin_dashboard/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../Project/admin_dashboard/assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../Project/admin_dashboard/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>