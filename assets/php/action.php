<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
require_once 'auth.php';
//we create an object of the Auth class we already created in the auth.php
$user = new Auth();
//Registration Handler for Ajax requests

if(isset($_POST['action']) && $_POST['action'] == 'register'){
  $name = $user->test_input($_POST['name']);
  $email = $user->test_input($_POST['email']);
  $pass = $user->test_input($_POST['password']);
  //We hash the password as follows
  $hpass = password_hash($pass, PASSWORD_DEFAULT);
  if($user->user_exist($email)){
    echo $user->showMessage('warning','this E-mail is already registered');
  }else{
    if($user->register($name, $email, $hpass)){
      echo 'register';
      $_SESSION['user'] = $email;
    } else{
      echo $user->showMessage('danger','Something went wrong, try again later!'); 
    }
  }
}

//Login Handler for Ajax requests
 if(isset($_POST['action']) && $_POST['action'] == 'login'){
    $email =$user->test_input($_POST['email']);
    $pass =$user->test_input($_POST['password']);

    $loggedInUser = $user->login($email);
    if($loggedInUser != null){
      if(password_verify($pass,$loggedInUser['password'])){
        if(!empty($_POST['rem'])){
          setcookie("email", $email, time()+(30*24*60*60), '/');
          setcookie("password", $pass, time()+(30*24*60*60), '/');
        }
        else{
          setcookie("email","",1,'/');
          setcookie("password", "", 1, '/');
        }
        echo 'login';
        $_SESSION['user'] = $email;
      }
      else{
        echo $user->showMessage('danger','Password is incorrect');      }
    }
      else{
        echo $user->showMessage('danger', 'User Record does not exist');
      }
 }
   //Handle Forgot Password Ajax Request
   if(isset($_POST['action']) && $_POST['action'] == 'forgot'){
    $email = $user->test_input($_POST['email']);
    $user_found = $user->currentUser($email);
    if($user_found != null){
      //UNiqid PHP function would generate ALpha Numeric Xters
      $token = uniqid();
      //the Strshuffle PHP function enables the uniqid to reshuffle everytime it is applied for
      $token = str_shuffle($token);
      $user->forgot_password($token,$email);
      try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = "omosuwaolasunkanmi@gmail.com";
        $mail->Password = "Ijeoma83!";
    
        $mail->SMTPSecure =  PHPMailer::ENCRYPTION_STARTTLS;
        $mail->port = 587;
        $mail->setFrom(Database::USERNAME,'Kanmiragi');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Reset Password';
        $mail->Body = '<h3>Click the link below to reset your Password.
         <br> <a href="http://localhost/user-area/reset-pass.php?email='
         .$email.'&token='.$token.'">
          http://localhost/user-area/reset-pass.php?email='
          .$email.'&token='.$token.'</a><br>Regards<br>Kanmiragi</h3>';
        $mail->send();
        echo $user->showMessage('success','We have sent you the reset link in
         your email ID, please check your mail');
        }
        catch(Exception $e){
          echo $user->showMessage('danger', 'something went wrong. please try again later!');
        }
    }else{
      echo $user->showMessage('info','This e-mail is not registered');
    }
  }
  ?>