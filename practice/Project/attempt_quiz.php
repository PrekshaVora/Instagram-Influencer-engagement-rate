<?php          
include('../Project/validations.php');
?>    
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../Project/user_dashboard/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../Project/user_dashboard/assets/img/logo/logo1.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Quizone - User Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../Project/user_dashboard/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <style>
  .logo_text
{
	font-family: 'Roboto Slab', serif;
	font-size: 36px;
	font-weight: 700;
	line-height: 0.75;
	color: white;
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

  .card-footer{
    display:inline-block;
    width: 100%;
  }
  



  </style>
  </head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="brown" data-background-color="white" data-image="../Project/user_dashboard/assets/img/sidebar-3.jpg">
  
		
		<div class="logo" style="background-image:url(../Project/user_dashboard/assets/banner.jpg)">
      <a href="#" class="simple-text logo-normal"><div class="logo_text">Quiz<span>one</span></div><br></a>     
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
              ?>
              </div>
            </div>
            <a class="collapsed" data-toggle="collapse" href="#collapseExample" aria-expanded="false">
            <?php if (isset($_SESSION['success'])) : ?><?php endif ?>
            <span style="color:white;"> 
            <?php  if (isset($_SESSION['user'])) : ?><strong><?php echo $_SESSION['user']['username']; ?></strong>
              <small><i  style="color: #fff;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> <br></small>
            <?php endif ?>
            </span> 
            </a>
          </div>
        </div>
      </div>
      <div class="sidebar-wrapper">
          <ul class="nav">
              <li class="nav-item   ">
                <a class="nav-link" href="../Project/userdashboard.php">
                  <i class="material-icons">dashboard</i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="../Project/user.php">
                  <i class="material-icons">person</i>
                  <p>User Profile</p>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="../Project/attempt_quiz.php">
                  <i class="material-icons">school</i>
                  <p>Attempt Quiz</p>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="./results.html">
                  <i class="material-icons">emoji_events</i>
                  <p>Results</p>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="../Project/user_settings.php">
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
            <a class="navbar-brand" href="javascript:;" style="font-family: Roboto Slab; font-size: 26px">Add Quiz</a>
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
                  <a class="dropdown-item" href="../Project/user.php">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../Project/logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="../Project/user/assets/img/img4.jpg" alt="Card image cap">
              <div class="card-body">
                <h3 class="card-title">Numerical</h3>
                <p class="card-text"><h5>Essentially a maths test, numerica reasoning will ask quetions regarding statistics, percentage and figures.</h5></p>
              </div>
              <div class="card-footer">
                <a  class="btn btn-success" href="../Project/startquiz.php" style="color:white;width:50%">Attempt</a>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="../Project/user/assets/img/img5.jpg" alt="Card image cap">
              <div class="card-body">
                <h3 class="card-title">Verbal</h3>
                <p class="card-text"><h5>Verbal testa measure an individual's understanding of language.The test will usually including answering quetions in relation to a paragraph of text.</h5></p>
              </div>
              <div class="card-footer">
                <a  class="btn btn-success" href="../Project/startquiz.php" style="color:white;width:50%">Attempt</a>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="../Project/user/assets/img/img6.jpg" alt="Card image cap">
              <div class="card-body">
                <h3 class="card-title">Mechanical Reasoning</h3>
                <p class="card-text"><h5>Mechanical tests show how an individual is able to apply technical ideas to problem solving.</h5></p>
              </div>
              <div class="card-footer">
                <a  class="btn btn-success" href="../Project/startquiz.php" style="color:white;width:50%">Attempt</a>
              </div>
            </div>
          </div>
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="../Project/user/assets/img/img7.jpg" alt="Card image cap">
              <div class="card-body">
                <h3 class="card-title">Data Checking</h3>
                <p class="card-text"><h5>These are also known as error checking tests and measure a candidates accuracy and attention to detail.</h5></p>
              </div>
              <div class="card-footer">
                <a  class="btn btn-success" href="../Project/startquiz.php" style="color:white;width:50%">Attempt</a>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="../Project/user/assets/img/img8.jpg" alt="Card image cap">
              <div class="card-body">
                <h3 class="card-title">Abstract Reasonig</h3>
                <p class="card-text"><h5>This is also reffered to as diagrammatic reasoning and relates to spotting trends and rules within sets of data.</h5></p>
              </div>
              <div class="card-footer">
                <a  class="btn btn-success" href="../Project/startquiz.php" style="color:white;width:50%">Attempt</a>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="../Project/user/assets/img/img9.jpg" alt="Card image cap">
              <div class="card-body">
                <h3 class="card-title">Spatial Ability</h3>
                <p class="card-text"><h5>Displays a person's aptitude for visualising images and 3D shapes.</h5></p>
              </div>
              <div class="card-footer">
                <a  class="btn btn-success" href="../Project/startquiz.php" style="color:white;width:50%">Attempt</a>
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
   <script src="../Project/user_dashboard/assets/js/core/jquery.min.js"></script>
  <script src="../Project/user_dashboard/assets/js/core/popper.min.js"></script>
  <script src="../Project/user_dashboard/assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../Project/user_dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../Project/user_dashboard/assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../Project/user_dashboard/assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../Project/user_dashboard/assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../Project/user_dashboard/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../Project/user_dashboard/assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../Project/user_dashboard/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../Project/user_dashboard/assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../Project/user_dashboard/assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../Project/user_dashboard/assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../Project/user_dashboard/assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../Project/user_dashboard/assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../Project/user_dashboard/assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../Project/user_dashboard/assets/js/plugins/arrive.min.js"></script>
  <!-- Chartist JS -->
  <script src="../Project/user_dashboard/assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../Project/user_dashboard/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../Project/user_dashboard/assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
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