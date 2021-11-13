<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/style-login.css">  
    </head>
    <body>
<?php                 
$error = array();
 
// BƯỚC 1: KIỂM TRA NẾU LÀ ADMIN THÌ REDIRECT
if (is_admin()){
    redirect(base_url('admin/?m=common&a=dashboard'));
}
 
// BƯỚC 2: NẾU NGƯỜI DÙNG SUBMIT FORM
if (is_submit('login'))
{    
    // lấy tên đăng nhập và mật khẩu
    $username = input_post('username');
    $password = input_post('password');
     
    // Kiểm tra tên đăng nhập
    if (empty($username)){
        $error['username'] = 'User name can not be blank';
    }
     
    // Kiểm tra mật khẩu
    if (empty($password)){
        $error['password'] = 'Password can not be blank';
    }
     
    // Nếu không có lỗi
    if (!$error)
    {
        // include file xử lý database user
        include_once('database/user.php');
         
        // lấy thông tin user theo username
        $user = db_user_get_by_username($username);
         
        // Nếu không có kết quả
        if (empty($user)){
            $error['username'] = 'Username is incorrect';
        }
        // nếu có kết quả nhưng sai mật khẩu
        else if ($user['password'] != md5($password)){
            $error['password'] = 'Incorrect password';
        }
         
        // nếu mọi thứ ok thì tức là đăng nhập thành công 
        // nên thực hiện redirect sang trang chủ
        if (!$error){
            set_logged($user['username'], $user['level']);
            redirect(base_url('admin/?m=user&a=profile'));
        }
    }
}
 
?>


<form method="post" action="<?php echo base_url('admin/?m=common&a=login'); ?>">
  <div class="login-box">
            <h1>SIGN IN</h1>
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="username" value="" >
                <?php show_error($error, 'username'); ?>
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password" value="">
                <?php show_error($error, 'password'); ?>
            </div>

			<input type="hidden" name="request_name" value="login"/>
            <input class="btn" type="submit" name="login-btn" value="SIGN IN">

			<p><a href="<?php echo base_url('admin/?m=common&a=forgot'); ?>">Forgot password?</a></p>
    </div>
		
  </form>


<?php include_once('widgets/footer.php'); ?>

</body>
</html>