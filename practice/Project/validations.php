<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'wdl');

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}


// call the login() function if register_btn is clicked
if (isset($_POST['login'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// storing user input values in variables
	$username = $_POST['username'];
	$password = $_POST['password'];

		$query = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1"; //query for checking username and password
		$results = mysqli_query($db, $query);                                                     

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {
					
				$_SESSION['user'] = $logged_in_user;                                           //store the username in session variable
				$_SESSION['success']  = "You are now logged in";

				header('location: admindashboard.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: userdashboard.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");             //if wrong username and password is entered
		}
	}


//code to UPDATE data
if (isset($_POST['update'])) {
	update();
}
function update(){
	global $db, $username, $errors;

	$fullname=$_POST['fullname'];                     //store user input using POST method
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$postalcode=$_POST['postalcode'];

 $reg="UPDATE user SET fullname='$fullname',mobile='$mobile',address='$address',city='$city',country='$country',postalcode='$postalcode'  WHERE username = '".$_SESSION['user']['username']."'"; //query to store user input in database
	mysqli_query($db,$reg);  
	header('location: ../Project/user.php');//running the query
}

//code to Change Password
if(isset($_POST['changepass'])){
	changepass();
}
function changepass(){
	global $db, $username, $errors;
	$newpass=$_POST['newpass'];
	$confirmnewpass=$_POST['confirmnewpass'];

	if($newpass!=$confirmnewpass){
		echo '<script>alert("Passwords does not match");</script>';

	}
	else{
		$reg="UPDATE user SET password='$newpass',confirmpass='$confirmnewpass' WHERE username = '".$_SESSION['user']['username']."'";
		mysqli_query($db,$reg);  
		?>
		<script type="text/javascript">
			alert("Password updated successfully");
		</script>
		<?php
		//header('location: ../Project/user_settings.php');//running the query
	}

}
// ...
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}
//Code for PRofile image
    if(isset($_POST['submit'])){                //If upload button is clicked
        move_uploaded_file($_FILES['file']['tmp_name'],"assets/faces/".$_FILES['file']['name']);   //The uploaded filed will be placed in assets/faces folder
        $con = mysqli_connect("localhost","root","","wdl");                                         //make connection
        $q = mysqli_query($con,"UPDATE user SET Profile_image = '".$_FILES['file']['name']."' WHERE username = '".$_SESSION['user']['username']."'");         //update the image in database
        ?>
        <script type="text/javascript">
        	window.open("../Project/admin_user.php");
        </script>
        <?php
   		//header('location:../Project/admin_user.php');
    }

//Code for forget password.......
if(isset($_POST['check-email'])){
	global $db, $username, $errors;
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $check_email = "SELECT password FROM user WHERE useremail='$email'";
        echo $check_email;
        $run_sql = mysqli_query($db, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            //$code = rand(999999, 111111);
            //$insert_code = "UPDATE usertable SET code = $code WHERE email = '$email'";
            //$run_query =  mysqli_query($con, $insert_code);
            //if($run_query){
                $subject = "Password Reset Email";
                //$message = "Your password reset code is $code";
                $message = "Your password is";
                $sender = "From: shahiprem7890@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: ../Project/nav.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }
        //else{
           // $errors['email'] = "This email address does not exist!";
       // }
   // }

?>