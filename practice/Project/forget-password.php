<?php 
/*
 require("/PHPMailer-master/src/PHPMailer.php");
    require("/PHPMailer-master/src/SMTP.php");
    require("/PHPMailer-master/src/Exception.php");

$conn= new mysqli("localhost","root","","wdl");
if($_POST){

    $email=$_POST['email'];
    $select_query=mysqli_query($conn,"select * from user where useremail='{$email}'") or die(mysqli_error($conn));
    $count=mysqli_num_rows($select_query);
    $row=mysqli_fetch_array($select_query);

    if($count>0){
        //Import PHPMailers classes in global namespace 
       // echo $row['password'];
        require '../Project/vendor/autoload.php';
        $mail=new PHPMailer(true);
        try{
            $mail->SMTPDebug=0;
            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';;
            $mail->SMTPAuth=true;
            $mail->Username='spa.cambay@gmail.com';
            $mail->Password='abc@123456789';
            $mail->SMTPSecure='tls';
            $mail->Port=587;

            $mail->setForm('spa.cambay@gmail.com','Spa Demo');
            $mail->addAddress($email,$email);
            
            $mail->isHTML(true);
            $mail->Subject='Forget Password';
            $mail->Body="Hi $email your Password is {$row['password']}";
            $mail->AltBody="Hi $email your Password is {$row['password']}";

            $mail->send();
            echo 'Your Password has been sent on your Email ID.';
        }catch (Exception $e){
            echo 'Email could not be sent.';
            echo 'Mailer Error:'.$mail->errorInfo;
        }
        
        

    }
    else{
        echo "<script>alert('Email Not Found')</script>";
    }


    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Forgot Password</title> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" 
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

*/
?>

<?php
session_start();
$conn= new mysqli("localhost","root","","wdl");
if(isset($_POST['submit']))
{
    $user_id = $_POST['email'];
    $result = mysqli_query($conn,"SELECT * FROM user where useremail='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);
    $fetch_user_id=$row['useremail'];
    $email_id=$row['useremail'];
    $password=$row['password'];
    if($user_id==$fetch_user_id) {
                $to = $email_id;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: password@studentstutorial.com" . "\r\n" .
                "CC: somebodyelse@example.com";
                mail($to,$subject,$txt,$headers);
            }
                else{
                    echo 'invalid userid';
                }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Email:</td><td><input type='text' name='email'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>