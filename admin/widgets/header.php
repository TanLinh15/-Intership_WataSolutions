<?php if (!defined('IN_SITE')) die('The request not found'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>PAYSLIP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    
    <div id="header">
        <div>
            Xin chào <?php echo get_current_username(); ?> |
            <a href="<?php echo base_url('admin/?m=common&a=logout'); ?>">Logout</a>
        </div>
    </div>
</body>
</html>