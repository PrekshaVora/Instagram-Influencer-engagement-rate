<?php include('../Project/validations.php') ?>   <!--include php file-->
<!DOCTYPE html>
<html>
<head>
<title>Aptitude test</title>
<link rel="stylesheet" type="text/css" href="../Project/css/style.css">
<link rel="stylesheet" type="text/css" href="../Project/css/modal.css">
<link rel="stylesheet" type="text/css" href="../Project/css/login.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!--Animate css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <!---Font Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body style=" ">
 
<!--NAVIGATION-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
              <div class="container">
                    <a class="navbar-brand" href="#" style="color: white">APTITUDE Quizone</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto" >
                        <li class="nav-item active">
                          <a class="nav-link" href="#" style="color: white">Home </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#practice" style="color: white; transition: all .25s ease-in-out;">Practice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#loginsignup" style="color: white">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#loginsignup"style="color: white">Sign up</a>
                        </li>
                      </ul>
                    </div>
                    </div>
  
</nav>
<!--CAROUSEL-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="../Project/assets/img1.jpg" class="d-block w-100" alt="img1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="animated bounceInRight" style="animation-delay: 1s; font-style: italic; font-size: 40px">"All our dreams can come true—
                              if we have the courage to pursue them."" —Walt Disney
                              </h5>
                            <p class="animated bounceInLeft" style="animation-delay: 2s; font-style: italic">
                              Half of our dreams don't get fulfilled only because we stop pursuing them. It is important to give time to yourself and participate in the process of self-analysis.
                            </p>
                            <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">
                                More info
                            </a></p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="../Project/assets/img2.jpg" class="d-block w-100" alt="img2">
                        <div class="carousel-caption d-none d-md-block">
                                <h5 class="animated slideInDown" style="animation-delay: 1s">Second slide label</h5>
                                <p class="animated fadeInUp" style="animation-delay: 2s">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                                <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">
                                    More info
                                </a></p>
                            </div>
                      </div>
                      <div class="carousel-item">
                        <img src="../Project/assets/img3.jpg" class="d-block w-100" alt="img3">
                        <div class="carousel-caption d-none d-md-block">
                                <h5 class="animated zoomIn" style="animation-delay: 1s">Third slide label</h5>
                                <p class="animated fadeInLeft" style="animation-delay: 2s">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                                <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">
                                    More info
                                </a></p>
                            </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
</div>
<div id="practice"class="grey" style="background-color: rgba(247, 189, 52,0.3);">
<div style="background:brown; color:cornsilk;"><center><h2>Questionaries</h2></center></div>
 <!--CARDS-->       
<div class="container"style="margin-top:3%; margin-bottom:0; ">
    <div class="row justify-content-center " style="">
        <div class="col-sm-4 py-3 py-sm-0">
                <div class="card  box-shadow card-conatiner">
                        <img class="card-img-top" src="../Project/assets/img4.jpg" alt="imag4">
                        <div class="card-body text-center">
                           
                          <h1 class="card-title">Numerical </h1>
                          <p>Sample text</p>
                          <a href="#" class="btn btn-success" style="margin-top:70px; width:150px;">Attempt</a>
                        </div>
                      </div>
        </div>
        <div class="col-sm-4 py-3 py-sm-0">
                <div class="card  box-shadow">
                        <img class="card-img-top" src="../Project/assets/img5.jpg" alt="img5">
                        <div class="card-body text-center">
                            
                          <h1 class="card-title">Verbal </h1>
                          <p>Sample text</p>
                          <a href="#" class="btn btn-success" style="margin-top:70px; width:150px;">Attempt</a>
                        </div>
                      </div>
        </div>
        <div class="col-sm-4 py-3 py-sm-0">
                <div class="card  box-shadow ">
                        <img class="card-img-top" src="../Project/assets/img6.jpg" alt="img6">
                        <div class="card-body text-center">
                            
                          <h1 class="card-title">Reasoning </h1>
                          <p>Sample text</p>
                          <a href="#" class="btn btn-success" style="margin-top:70px; width:150px;">Attempt</a>
                        </div>
                      </div>
        </div>
    </div>                                                                                                                            
    <br>
    <div ><button style="margin:0 auto; display: block; width:200px;"class="btn btn-outline-success">View More</button></div>
    <br>

  
</div>
</div>
 <!-- Return to Top -->
 <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>


 <!--Login and signup-->                                    
<div id="loginsignup"class=" container-fluid" style="background-color: rgba(143, 38, 6, 0.6);s;">
<br><br>
  <div class="loginpart">
  <center>
    <div class=" wrapper">
        <div class="title-text">
          <div class="title login">Login Form</div>
          <div class="title login">Signup Form</div>
        </div>
        
        <div class="form-container">
            <div class="slide-controls">                                    
              <input type="radio" name="slider" id="login" checked>
              <input type="radio" name="slider" id="signup">
              <label for="login" class="slide login">Login</label>
              <label for="signup" class="slide signup">Signup</label>
              <div class="slide-tab"></div>
              </div>
          <div class="form-inner">
          <?php $message="";?>
            <form action="../Project/nav.php" method="POST" class="login" >   <!--Action to thane same page since validations.php is included-->
            <?php echo display_error(); ?>
              <div class="field">
                <input type="text" placeholder="Email Address"required name="username"></div>
              <div class="field">
                  <input type="password" placeholder="Password" required name="password"></div>
                <div class="pass-link"><a href="../Project/forget-password.php">Forgot password?</a></div>
                <div class="field">
                    <input type="submit" value="Login" name="login"></div>
                  <div class="signup-link">Not a member?<a href="#">Signup now</a></div>
                 
          
            </form>                                                                                                                                                         
            <form action="../Project/registration.php" method="POST" class="signup" >
              <div class="field">
                <input type="text" placeholder="Username"required name="username"></div>
                <div class="field">
                  <input type="text" placeholder="Email Address"required name="email"></div>
                <div class="field">
                    <input type="password" placeholder="Password" required name="password"></div>
                    <div class="field">
                        <input type="password" placeholder="Confirm Password" required name="confirmpassword"></div>
                  <div class="field">
                      <input type="submit" name="signup" value="Signup" href="#"></div>
              </form>
          </div>
        </div>
      </div>
      </center>
</div>
<br>
<br>
</div>
    
  </div>
</div>

<!---FOOTER-->
<footer style="margin-top: 0;">
    <div class="main-content">
      <div class="left box">
        <h2>
About us</h2>
<div class="content">
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
<div class="social">
            <a href="#"><span class="fab fa-facebook-f"></span></a>
            <a href="#"><span class="fab fa-twitter"></span></a>
            <a href="#"><span class="fab fa-instagram"></span></a>
            <a href="#"><span class="fab fa-youtube"></span></a>
          </div>
</div>
</div>
<div class="center box">
        <h2>
Address</h2>
<div class="content">
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text">Birendranagar, Surkhet</span>
          </div>
<div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">+089-765432100</span>
          </div>
<div class="email">                                             
            <span class="fas fa-envelope"></span>
            <span class="text">abc@example.com</span>
          </div>
</div>
</div>
<div class="right box">
        <h2>
Contact us</h2>
<div class="content">
          <form action="#">
            <div class="email">
              <div class="text">
Email *</div>
<input type="email" required>
            </div>
<div class="msg">
              <div class="text">
Message *</div>

<!-- NOTE: Due to more textarea tag I got an error. So I changed the textarea name to changeit. Please change that changeit name to textarea -->
<changeit id="msgForm" rows="2" cols="25" required></changeit> <!-- replace this changeit name to textarea -->
</div>        
            <br />
<div class="btn">
<button type="submit">Send</button>
            </div>
<div class="bottom">
<center>
        <span class="credit">Created By <a href="https://youtube.com/c/codingnepal">Aishwarya & Shweta</a> | </span>
        <span class="far fa-copyright"></span> 2020 All rights reserved.
      </center>
</div>

</form>
</div>
</div>
</div>
</footer>

  <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script>
// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>

<!---Login and signup-->
<script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = (()=>{
      loginForm.style.marginLeft = "-50%";
      loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (()=>{
      loginForm.style.marginLeft = "0%";
      loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (()=>{
      signupBtn.click();
      return false;
    });
  </script>
</body>
</html>


