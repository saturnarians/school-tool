<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('location:home.php');
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
            <div class="row justify-content-center wrapper" id="login-box" >
            <div class="col-lg-10 my-auto">
                <div class="card-group myShadow">
                    <div class="card rounded-left p-4" style="flex-grow:1.4;">
                    <h1 class="text-center font-weight-bold text-primary">Sign in </h1>
                    <hr class="my-3">
                    <form action="#" method="post" class="px-3" id="login-form">
                        <div id="loginAlert">

                        </div>
         <div class="input-group input-group-lg form-group">
             <div class="input-group-prepend">
             <span class="input-group-text rounded-0">
                 <i class="fas fa-envelope fa-lg"></i> 
             </span>
             </div>  
            <input type="email" name="email" id="email" 
          class="form-control rounded-0" placeholder="E-mail" required 
          value="<?php if(isset($_COOKIE['email'])){ echo $_COOKIE['email'];} ?>" > 
        </div>
         <div class="input-group input-group-lg form-group">
             <div class="input-group-prepend">
             <span class="input-group-text rounded-0">
                 <i class="far fa-key fa-lg"></i> 
             </span>
             </div>  
             <input type="password" name="password" id="password" 
            class="form-control rounded-0" placeholder="Password" required
             value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];} ?>"> 
                        </div>
                        <div class="form-group">
                            <div class="custom-control custome-checkbox float-left">
                                <input type="checkbox" name="rem"  class="custom-control-input"
                                 id="customCheck <?php if(isset($_COOKIE['email'])) {?> checked <?php } ?>">
                                <label for="" class="custom-control-label">Remember Me?</label>
                            </div>
                            <div class="forgot float-right">
                              <a href="#" id="forgot-link">Forgot Password</a>  
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Sign in" id="login-btn" 
                            class="btn btn-primary btn-lg btn-block myBtn">
                        </div>
                    </form>
                </div>
                <div class="card justify-content-center rounded-right myColor p-4">
                <h1 class="text-center font-weight-bold text-white">Hello, Folks.</h1>
                    <hr class="my-3 bg-light myHr">
                    <p class="text-center font-weight-bolder text-light lead">Enter your Personal Details, Start Your Journey here!</p>
               <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn"  id="register-link">Sign Up.</button>
                </div>
            </div>
            </div>
        </div>
        <!-- Login Form Ends Here -->
        <!-- Registration form Starts Here-->
        <div class="row justify-content-center wrapper" id="register-box"  style="display:none;">
            <div class="col-lg-10 my-auto">
                <div class="card-group myShadow">
                <div class="card justify-content-center rounded-left myColor p-4">
                <h1 class="text-center font-weight-bold text-white">Welcome Back.</h1>
                    <hr class="my-3 bg-light myHr">
                    <p class="text-center font-weight-bolder text-light lead">Remain connected, please login with your personal info.
               <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn"  id="login-link">Sign In.</button>
               
                </div>
                    <div class="card rounded-right p-4" style="flex-grow:1.4;">
                    <h1 class="text-center font-weight-bold text-primary">Create Account </h1>
                    <hr class="my-3">
                    <form action="#" method="post" class="px-3" id="register-form">
                        <div id="regAlert"></div>
                    <div class="input-group input-group-lg form-group">
             <div class="input-group-prepend">
             <span class="input-group-text rounded-0">
                 <i class="fas fa-user fa-lg"></i> 
             </span>
             </div>  
            <input type="text" name="name" id="name" 
          class="form-control rounded-0" placeholder="Full Name" required  > 
        </div>
       
                    <div class="input-group input-group-lg form-group">
             <div class="input-group-prepend">
             <span class="input-group-text rounded-0">
                 <i class="fas fa-envelope fa-lg"></i> 
             </span>
             </div>  
            <input type="email" name="email" id="remail" 
          class="form-control rounded-0" placeholder="E-mail" required  > 
        </div>
             <div class="input-group input-group-lg form-group">
                         <div class="input-group-prepend">
                         <span class="input-group-text rounded-0">
                             <i class="far fa-key fa-lg"></i> 
                         </span>
                         </div>  
                         <input type="password" name="password" id="rpassword" 
                        class="form-control rounded-0" placeholder="Password" required midlength="5" > 
                                    </div>

                        <div class="input-group input-group-lg form-group">
                               <div class="input-group-prepend">
                               <span class="input-group-text rounded-0">
                                   <i class="far fa-key fa-lg"></i> 
                                                 </span>
                               </div>  
                               <input type="password" name="cpassword" id="cpassword" 
                              class="form-control rounded-0" placeholder="Confirm Password" required midlength="5" > 
                        </div>
                        <div class="form-group">
                           <div id="passError" class="text-danger font-weight-bold" ></div> 
                        </div>
                        <div class="form-group">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Sign Up" id="register-btn" 
                            class="btn btn-primary btn-lg btn-block myBtn">
                        </div>
                    </form>
                </div>
              
            </div>
            </div>
        </div>
        <!-- Registration Form Ends Here-->
        <!-- Forgot Password -->
        <div class="row justify-content-center wrapper" id="forgot-box" style="display:none;" >
            <div class="col-lg-10 my-auto">
                <div class="card-group myShadow">
                <div class="card justify-content-center rounded-left myColor p-4">
                    <h1 class="text-center font-weight-bold text-white">Reset Password</h1>
                    <hr class="my-3 bg-light myHr">
               <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" 
                id="back-link">Back</button>
                </div>
                    <div class="card rounded-right p-4" style="flex-grow:1.4;">
                    <h1 class="text-center font-weight-bold text-primary">Forgot Password?</h1>
                    <hr class="my-3">
                    <p class="lead text-center text-secondary">To reset password, enter the registered email
                         and Password reset instructions would be sent to the registered email address</p>
                    <form action="#" method="post" class="px-3" id="forgot-form">
                        <div id="forgotAlert">
                            
                        </div>
         <div class="input-group input-group-lg form-group">
             <div class="input-group-prepend">
             <span class="input-group-text rounded-0">
                 <i class="fas fa-envelope fa-lg"></i> 
             </span>
             </div>  
            <input type="email" name="email" id="femail" 
          class="form-control rounded-0" placeholder="E-mail" required  > 
        </div>
                        <div class="form-group">
                            <input type="submit" value="Reset Password" id="forgot-btn" 
                            class="btn btn-primary btn-lg btn-block myBtn">
                        </div>
                    </form>
                </div>
                
            </div>
            </div>
        </div>

        <!-- Forgot Password End Here -->
        </div>
  
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.min.js" ></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#register-link").click(function(){
        $("#login-box").hide();
        $("#register-box").show();
        });

        $("#login-link").click(function(){
            $("#login-box").show();
            $("#register-box").hide();
        });
        $("#forgot-link ").click(function(){
            $("#login-box").hide();
            $("#forgot-box").show();
        });
        $("#back-link").click(function(){
            $("#forgot-box").hide();
            $("#login-box").show();
        });
        //Register Ajax Request
        //We would use Jquery to manually check for the HTML validation of the forms.
        $("#register-btn").click(function(e){
         if($("#register-form")[0].checkValidity()){
            //the method below prevents the default method from refreshing.
            e.preventDefault();
            $("#register-btn").val('please wait...'); 
            if($("#rpassword").val() != $("#cpassword").val()){
            $("#passError").text('*password does not match.');
            $("#register-btn").val('Sign Up');
            }
            else{
                $("#passError").text('');
                $.ajax({
                    url: 'assets/php/action.php',
                    method: 'post',
                    data: $("#register-form").serialize()+'&action=register',
                    success:function(response){
                        $("#register-btn").val('Sign Up');
                        if(response === 'register'){
                            window.location = 'home.php';
                        } else{
                            $("#regAlert").html(response);
                        }
                    }
                });
            }
          }
        });
        //LOGIN AJAX REQUEST
        $("#login-btn").click(function(e){
            if($("#login-form")[0].checkValidity()){
                e.preventDefault();

                $("#login-btn").val('please wait...');
                $.ajax({
                  url: 'assets/php/action.php',
                  method: 'post',
                  data: $("#login-form").serialize()+'&action=login', 
                  success:function(response){
                   $("#login-btn").val('Sign in...');
                   if(response=== 'login'){
                    window.location = 'home.php';
                   }
                   else{
                    $("#loginAlert").html(response);
                   }
                  } 
                });
            }
        });
        //Forgot Password Ajax request
        $("#forgot-btn").click(function(e){
            if($("#forgot-form")[0].checkValidity()){
                e.preventDefault();
                $("#forgot-btn").val('please wait...');  
                $.ajax({
                  url:'assets/php/action.php',
                  method: 'post',
                  data:$("#forgot-form").serialize()+'&action=forgot',
                  success:function(response){
                    $("#forgot-btn").val('Reset Password');
                    $("#forgot-form")[0].reset();
                    $("#forgotAlert").html(response);
                  }
                });
            }
        });
    });
    </script>
</body>
</html>  