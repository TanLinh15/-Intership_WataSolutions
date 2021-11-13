<html>
<body>
    

<?php include_once('widgets/headerlogin.php'); ?>


<section class="clean-block clean-pricing dark">
    <div class="container">
        <div class="block-heading">
            <h2>PROFILE</h2>
        </div>
        <div class="row">
                    <div class="col-md-5">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                        </div>
                        <p>ID: 00000</p>
                    </div>
        <div class="prolie-form">
        <form method="POST">
                    <div class="for-name">
                        <label>Fullname:</label>
                        <div class="form-pass-signup">
                            <input type="First Name" placeholder="First Name" required class="form-control" />
                            <input type="Last Name" placeholder="Last Name" required class="form-control" />
                        </div>
                    </div>
                    
                    <div class="for-birth">
                        <form class = "container">
                            <label >Date of Birth:</label>
                            <SELECT id ="year" name = "yyyy" onchange="change_year(this)"  >
                            </SELECT>
                            <SELECT  id ="month" name = "mm" onchange="change_month(this)">
                            </SELECT>
                            <SELECT id ="day" name = "dd" >
                            </SELECT>
                        </form>
                    </div>
                    
                    <br>

                    <div class="for-gender">
                        <label>Gender: </label>
                    <select id="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    </div>
                    
                    <div class="for-email">
                        <label>Email:</label>
                        <input type="Email" placeholder="Email" required class="form-control"/>
                    </div>
                    
                    <div class="for-phone">
                        <label>Phone number:</label>
                        <input type="Phone Number" placeholder="Phone Number" required class="form-control"/>
                    </div>
                    
                    <div class="for-address">
                        <label>Address:</label>
                        <input type="Address"placeholder="Address"required class="form-control"/>
                    </div>

                    <div class="btn-update">
                        <input  type="submit" value="UPDATE" class="" />
                    </div>
                
            </form>
        </div>
    </div>
</div>
</section>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="/assets/js/smoothproducts.min.js"></script>
    <script src="/assets/js/theme.js"></script>
    <script src="/assets/js/code.js"></script>
</body>

</html>
 