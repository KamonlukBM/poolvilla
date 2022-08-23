<!doctype html>
<html lang="th">
<head>      
    <title>หน้าแรก</title>
    <?php require('inc_header.php'); ?> 
    <link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<script src="js/owl.carousel.min.js"></script>
</head>
<body >
    <?php require('inc_navbar_hotel_regis.php'); ?> 
    <div class="bg-grey">
    <div class="container">
        <div class="box-sign">
            <div class="text-head-sign text-orange">Sign in to manage your property</div>
            <div class="space-footer mb-3">
              <label for="exampleFormControlInput1" class="form-label text-orange">Email</label>
              <input type="email" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput2" class="form-label text-orange">Password</label>
              <input type="password" class="form-control" id="exampleFormControlInput2">
            </div>
            <div class="clearfix">
                <div class="float-end">
                    <a href="forgot_password.php">
                        <small class="text-orange">forgot password</small>
                    </a>
                </div>
            </div>
            <a class="btn-sign" href="hotel.php">Sing in</a>
             <div class="text-grey text-tiny text-start mt-5">Don't have a parther account?<a href="register_hotel.php" class="text-orange ms-2">Create</a></div>
             <div class="space-footer"></div>
        </div>
    </div>
        <div class="space-footer"></div>
    </div>
    <?php require('inc_footer_hotel_regis.php'); ?> 
</body>
</html>

