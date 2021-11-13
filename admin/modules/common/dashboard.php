<?php if (!defined('IN_SITE')) die ('The request not found'); ?>
<?php include_once('widgets/header.php'); ?>
<div id="menu">
</div>
<div>
        <li><a href="?m=user&a=profile">PROFILE</a></li>
        <li><a href="#">PAYSLIP</a></li>
        <li><a href="#">RESET PASSWORD</a></li>
</div>

<?php if (is_user()){ ?>
<div>
<li><a href="#">SUPPORT</a></li>
</div>
<?php } ?>
<?php if (is_admin()){ ?>
<div>
    <li><a href="#">ADMIN</a>
      <ul><li><a href="#">SETTING</a></li>
          <li><a href="#">LIST EMPLOYEE </a></ul></li>
</div>
<?php } ?>
<?php if (is_accountant()){ ?>
<div>
    <li><a href="#">SUPPORT</a></li>
    <li><a href="#">ACCOUNTANT</a>
      <ul><li><a href="#">UPLOAD PAYSLIP</a></li>
          <li><a href="#">REPORT FAILED PAYSLIP</a></ul></li>
</div>
<?php } ?>









