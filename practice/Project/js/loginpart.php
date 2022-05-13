<?php
if($_POST){
	$sql_host="localhost";
	$sql_username="root";
	$sql_password='';
	$sql_database="wdl";
	function connect_db() {
	global $sql_host, $sql_username, $sql_password, $sql_database;
	$conn=new mysqli($sql_host,$sql_username,$sql_password);
	if(mysqli_connect_error($conn) !== null) {
	return false;
	}
	$conn -> select_db($sql_database);
	return $conn;
	}
	$conn = connect_db();
	
	 if(isset($_POST['login']) ){
	$username = $_POST['username'];
	$password = $_POST['userpass'];
	$passwordHashed = password_hash($password, PASSWORD_BCRYPT);
	$sql = "Select * From user Where username = '$username'";
	$sql = $conn->query($sql);
	if($sql){
	$sql = $sql->fetch_assoc();
	if(password_verify($password, $sql['userpass'])){
		
	session_start();
	$_SESSION['username'] = $username;
	echo 'You have successfully logged-in';
	//header('location: account.php');
	}
	}else{
	//header('location: index.php');
	exit();
	}
	}
	}else{
	//header('location: index.php');
	exit();
	}
	//header('location: index.php');
	*/








?>