<!doctype html>
<html lang="th">
<head>      
     <title>Poolvilla</title>
    <?php require('inc_header.php'); ?> 
    <link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<script src="js/owl.carousel.min.js"></script>
</head>
<body >
    <?php require('inc_navbar_nonlogin.php'); ?> 
    <div class="bg-grey">
    <div class="container">
        <div class="box-sign">
            <div class="text-head-sign text-orange">Register</div>
            <div class="space-footer mb-3">
              <label for="exampleFormControlInput1" class="form-label text-orange">First Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="space-footer mb-3">
              <label for="exampleFormControlInput2" class="form-label text-orange">Last Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput2">
            </div>
            <div class="space-footer mb-3">
              <label for="exampleFormControlInput3" class="form-label text-orange">Email</label>
              <input type="email" class="form-control" id="exampleFormControlInput3">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput4" class="form-label text-orange">Password</label>
              <input type="password" class="form-control" id="exampleFormControlInput4">
                 <small class="text-light-grey">Use a minimum of 10 characters, including uppercase letters, lowercase letters, and numbers.</small>
            </div>
            
            <div class="mb-3">
              <label for="exampleFormControlInput4" class="form-label text-orange">Confirm Password</label>
              <input type="password" class="form-control" id="exampleFormControlInput4">
            </div>
            <a class="btn-sign" href="index.php">Register</a>
                <div class="box-text-white">
                <div class="text-grey text-tiny">or countinue with</div>
                </div>
            <div class="text-line"></div>
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <button class="btn-facebook">
                        <img src="images/fb.png" class="fb"><span class="">facebook</span>
                    </button>
                </div>
                <div class="col-sm-4">
                    <button class="btn-gmail">
                        <img src="images/gmail.png" class="gm"><span class="">gmail</span>
                    </button>
                </div>
            </div>
            <div class="text-grey text-tiny text-start mt-5">Already have an account?<a href="signin.php" class="text-orange ms-2">Sign in</a></div>
             <div class="space-footer"></div>
             <div class="row justify-content-center">
                 <div class="col-sm-5 col-8 ">
                    <img src="images/register.svg">
                 </div>  
            </div>
        </div>
    </div>
        
        <div class="space-footer"></div>
    </div>
    <?php require('inc_footer.php'); ?> 
</body>
</html>

