<?php
    require_once 'assets/php/auth.php';
    $user = new Auth();
    if(isset($_GET['email']) && isset($_GET['token'])){
        $email = $user->test_input($_GET['email']);
        $token = $user>test_input($_GET['token']);

        $auth_user = $user->restore_pass_auth($email, $token);
        if($auth_user != null){
            if(isset($_POST['submit'])){
                $newpass =$_POST['pass'];
                $cnewpass = $_POST['cpass'];
                $hnewpass = password_hash($newpass, PASSWORD_DEFAULT);
                if()
            };
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Manager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css"  href="css/style.css">
</head>
<body>
        <div class="container">
            <!-- Login Form Starts Here-->
            <div class="row justify-content-center wrapper" >
            <div class="col-lg-10 my-auto">
                <div class="card-group myShadow">
                <div class="card justify-content-center rounded-left myColor p-4">
                <h1 class="text-center font-weight-bold text-white">Reset Your Password, Folks.</h1>
                    <hr class="my-3 bg-light myHr">
                    
                </div>
                    <div class="card rounded-right p-4" style="flex-grow:1.2;">
                    <h1 class="text-center font-weight-bold text-primary">Enter New Password </h1>
                     <hr class="my-3">
                    <form action="#" method="post" class="px-3">
                       
         <div class="input-group input-group-lg form-group">
             <div class="input-group-prepend">
             <span class="input-group-text rounded-0">
                 <i class="far fa-key fa-lg"></i> 
             </span>
             </div>  
             <input type="password" name="pass" 
            class="form-control rounded-0" placeholder="New Password" required minlength="5">
                        </div>
                        <div class="input-group input-group-lg form-group">
             <div class="input-group-prepend">
             <span class="input-group-text rounded-0">
                 <i class="far fa-key fa-lg"></i> 
             </span>
             </div>  
             <input type="password" name="cpass" 
            class="form-control rounded-0" placeholder="Confirm Password" required minlength="5">
                        </div>
                      
                        <div class="form-group">
                            <input type="submit" value="Reset Password" name="submit"
                            class="btn btn-primary btn-lg btn-block myBtn">
                        </div>
                    </form>
                </div>
               
            </div>
            </div>
        </div>
</body>
</html>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.min.js" ></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"></script>
    <script type="text/javascript">