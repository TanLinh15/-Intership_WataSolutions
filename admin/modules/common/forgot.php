
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirm e-mail</title>
	  <meta charset="utf-8">
    <link style="text/css" rel="stylesheet" href="css/style-forgot.css">
</head>
<body class="customer">






    <form method="post" action="<?php echo base_url('admin/?m=common&a=forgot'); ?>">
    <fieldset>
    <td>
      If you countinue, we will send a message to your e-mail adress.<br>
      Click the link in the message, and enter a new password on the page that opens.
    </td>
    <hr>
    <table>
    <tr>
        <td>Enter your e-mail:<td>
        <td><input type="text" name ="Your e-mail" size="30"></td>
    </tr>
    <tr>
	    <td colspan="2" align="left"> <input type="submit" name="btn_submit" value="Send password reset email"></td>
  	</tr>
    <tr>
      <td>
         <a href="<?php echo base_url('admin/?m=common&a=LOGIN'); ?>">Login with another account</a>
      </td>
    </tr>
    </form>










    <?php unset($_SESSION['errors']); ?>