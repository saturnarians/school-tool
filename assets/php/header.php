<?php
require_once 'assets/php/session.php';
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ucfirst(basename($_SERVER['PHP_SELF'],'.php')); ?>|School Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">

        @import url('https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800;900&display=swap');
        *{
            font-family: 'Maven Pro', Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
            <!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-light navbar-light">
    
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link <?=(basename($_SERVER['PHP_SELF'])=="home.php")?"active":"";?>"
       href="index.php"><i class="fa-solid fa-wand-magic-sparkles">

       </i> Kanmiragi</a>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
    </li>
    <li class="nav-item">
      <a class="nav-link <?=(basename($_SERVER['PHP_SELF'])=="home.php")?"active":"";?>"
       href="home.php"></i>&nbsp;Home</a>
    </li>
    <li class="nav-item"> 
      <a class="nav-link <?=(basename($_SERVER['PHP_SELF'])=="profile.php")?"active":"";?>"
       href="profile.php"></i>Profile</a>
    </li>
    <li class="nav-item"> 
      <a class="nav-link" href="#"><i class="fas fa-cog"></i>&nbsp;Settings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?=(basename($_SERVER['PHP_SELF'])=="feedback.php")?"active":"";?>"
       href="feedback.php"></i>&nbsp;Feedback</a> 
    </li>
   <li class="nav-item">
      <a class="nav-link <?=(basename($_SERVER['PHP_SELF'])=="notifications.php")?"active":"";?>"
       href="notifications.php"></i>&nbsp;Notifications</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="assets/php/logout.php"><i class="fa-sharp fa-light fa-power-off"></i>
      &nbsp;Log Out </a>
    </li>
    <li class="nav-item dropdown">
       <a href="#" class="nav-link dropdown-toggle" 
       id="navbardrop" data-toggle="dropdown">
       <i class="fas fa-user-cog"></i> &nbsp;Hi,&nbsp;<?= $fname; ?>
    </a> 
    </li>
  </ul>
      
</nav>