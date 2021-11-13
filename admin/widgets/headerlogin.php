<?php if (!defined('IN_SITE')) die ('The request not found'); ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Features - Brand</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="/assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="/assets/css/smoothproducts.css">
    
    <link rel="stylesheet" href="/assets/css/style-menu.css">
    <link rel="stylesheet" href="/assets/css/style-payslip.css">
    <link rel="stylesheet" href="/assets/css/style-profile.css">
    <link rel="stylesheet" href="/assets/css/style-support.css">
    
</head>

<body>
    
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">

<?php include_once('widgets/header.php'); ?>



    <div class="container">
    <a class="navbar-brand logo" href="index.html">Logo</a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span></button>
     <div class="collapse navbar-collapse" id="navcol-1"> 
        <ul class="nav navbar-nav ml-auto">
             <li class="nav-item"><a class="nav-link" href="?m=user&a=profile">PROFILE</a></li>
             <li class="nav-item"><a class="nav-link" href="?m=user&a=payslip">PAYSLIP</a></li>
             <li class="nav-item"><a class="nav-link" href="?m=user&a=resetpw">RESET PASSWORD</a></li>
        </ul>
     </div>
           

           <?php if (is_user()){ ?>
           <div>
           <ul class="nav navbar-nav ml-auto">
           <li class="nav-item"><a class="nav-link" href="?m=user&a=support">SUPPORT</a></li>
           </ul>
           </div>
           <?php } ?>

           <?php if (is_accountant()){ ?>
           <div>
           <ul class="nav navbar-nav ml-auto">
           <li class="nav-item"><a class="nav-link" href="?m=user&a=support">SUPPORT</a></li>
           </ul>
           </div>
           <?php } ?>


           <?php if (is_admin()){ ?>
           <div>
               <!-- <li class="nav-item"><a class="nav-link" href="#">ADMIN</a>
                <ul><li class="nav-item"><a class="nav-link" href="?m=user&a=setting">SETTING</a></li>
                <li class="nav-item"><a class="nav-link" href="?m=user&a=list">LIST EMPLOYEE </a></ul></li> -->

                <div class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">ADMIN</a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="?m=user&a=setting">Setting</a><a class="dropdown-item" href="?m=user&a=list">List Employee</a></div>
                </div>
           </div>
           <?php } ?>

           
           <?php if (is_accountant()){ ?>
           <div>
               <!-- <li><a href="#">ACCOUNTANT</a>
               <ul><li><a href="#">UPLOAD PAYSLIP</a></li>
               <li><a href="#">REPORT FAILED PAYSLIP</a></ul></li> -->
               <div class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">ACCOUNTANT&nbsp;</a>
                <div class="dropdown-menu"><a class="dropdown-item" href="#">Upload Payslip</a><a class="dropdown-item" href="#">Report Fail Payslip</a></div>
            </div>
           </div>
    </div>



<?php } ?>

</nav>









</body>







