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
    
    if(isset($_POST['signup']) ){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpass'];
    $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
    $confirmpasswordHashed = password_hash($confirmpassword, PASSWORD_BCRYPT);
    //sanitize your input	
    $username = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $confirmpassword = mysqli_real_escape_string($conn, $confirmpassword);
    $passwordHashed = mysqli_real_escape_string($conn, $passwordHashed);
    $confirmpasswordHashed = mysqli_real_escape_string($conn, $confirmpasswordHashed);
    //check for existing record
    $sql = "Select user.username From user Where username = '$username'";
    $sql = $conn->query($sql);
    $sql = $sql->fetch_assoc();
    if($sql){
        echo "<h1>Record already Exists!!!</h1";
    //header('location: register.php');
    exit();
    }else{
    $sql = "Insert Into user (username, useremail, userpass,confirmpass) VALUES ('$username', '$email', '$passwordHashed','
    $confirmpasswordHashed')";
    $sql = $conn->query($sql);
    if($sql){
    echo "Registration succesful. You may <a href= 'nav.php'>login</a> now";
    //header('location: index.php');
    }
    //$sql = $sql->fetch_assoc();
    //echo $username.$email.$password;
    }
    }
}

?>