<?php
session_start();                             //start session
//header('location:nav.php');                    //If data is inserted successfully u will be navigated to nav.php
$conn = mysqli_connect('localhost','root',''); //make connection
mysqli_select_db($conn,'wdl');                 // select database

$errors   = array(); 

function display_errors() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	

$name=$_POST['username'];                     //store user input using POST method
$email=$_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['confirmpassword'];


$s="select * from user where username='$name'";  //query to check if username exixts
$result=mysqli_query($conn, $s);                 //passing the query in result
$num=mysqli_num_rows($result);                   //check the number of rows for result
if($num==1){
	echo '<script>alert("Username already taken!!!")</script>';
}
if($pass!=$cpass){
	echo '<script>alert("Passwords does not match!!!")</script>';
	//header('location:../Project/nav.php');
	//array_push($errors, "Password and Confirm Password don't match!!!");
}
else{
	$reg="insert into user(username,useremail,password,confirmpass) values ('$name','$email','$pass','$cpass')"; //query to store user input in database
	mysqli_query($conn,$reg);  //running the query
	echo "Registration successful!!!";
	
}
?>