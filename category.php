<!doctype html>
<html lang="th">

<head>
    <title>Poolvilla</title>
    <?php require('inc_header.php'); ?>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <script src="js/owl.carousel.min.js"></script>
</head>

<body>
    <?php require('inc_navbar.php'); ?>
    <div class="bg-orange-light2">
        <div class="row g-1">
            <div class="col-lg-2 col-12">
                <input class="form-control emptytwo orange" type="text" id="iconified" placeholder="&#xF002;  *country*" aria- label="default input example">
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="bg-white-form">
                    <div class="row g-0">
                        <div class="col-6">
                            <div class="line-check-in">
                                <label class="top-text-form" for="check-in">Check in</label>
                                <div class="row g-0">
                                    <div class="col-2 text-center text-orange">
                                        <i class="far fa-calendar check-calender"></i>
                                    </div>
                                    <div class="col-10">
                                        <input class="form-control orange-check check-in-out" id="datepicker" type="text" placeholder="mm/dd/yyyy">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="top-text-form" for="check-in">Check out</label>
                            <div class="row g-0">
                                <div class="col-2 text-center text-orange">
                                    <i class="far fa-calendar check-calender"></i>
                                </div>
                                <div class="col-10">
                                    <input class="form-control orange-check check-in-out" id="datepicker2" type="text" placeholder="mm/dd/yyyy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="bg-white-form">
                    <label class="top-text-form" for="check-in">Guest</label>
                    <div class="row g-0">
                        <div class="col-1 text-center text-orange">
                            <i class="fas fa-user check-calender"></i>
                        </div>
                        <div class="col-11">
                            <div class="row g-2">

                                <div class="col-4">
                                    <div class="row g-2">
                                        <label for="inputPassword" class="col-4 text-tiny text-orange">Adult</label>

                                        <div class="col-8 mt-0">
                                            <div class="input-group input-number">
                                                <button class="btn sub" type="button" id="sub">-</button>
                                                <input class="input-number border-0 text-center field " placeholder="" type="text" id="1" value="1">
                                                <button class="btn add" type="button" id="add">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row g-2">
                                        <label for="inputPassword" class="col-4 text-tiny text-orange">Kid</label>
                                        <div class="col-8 mt-0">
                                            <div class="input-group input-number">
                                                <button class="btn sub2" type="button" id="sub2">-</button>
                                                <input class="input-number border-0 text-center field2 " placeholder="" type="text" id="1" value="1">
                                                <button class="btn add2" type="button" id="add2">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row g-2">
                                        <label for="inputPassword" class="col-4 text-tiny text-orange">Room</label>
                                        <div class="col-8 mt-0">
                                            <div class="input-group input-number">
                                                <button class="btn sub3" type="button" id="sub3">-</button>
                                                <input class="input-number border-0 text-center field3 " placeholder="" type="text" id="1" value="1">
                                                <button class="btn add3" type="button" id="add3">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-12">
                <a class="btn-search two" href="#">search</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="clearfix mt-2">
            <div class="float-start">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="bread" href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Catergory</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="head-text-index">Enjoy with</div>
        <div class="line-bottom-head-text"></div>
        <div class="row mt-5">
            <div class="col-sm-4 col-6">
                <div class="frame-item box-destination">
                    <a href="category_travel.php" class="">
                        <img src="images/man-riding-his-surfboard-having-good-time.jpg" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">Beach</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-6">
                <div class="frame-item box-destination">
                    <a href="category_travel.php" class="">
                        <img src="images/cities%20(2).jpg" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">Advanture</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-6">
                <div class="frame-item box-destination">
                    <a href="category_travel.php" class="">
                        <img src="images/cities%20(3).jpg" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">Natural</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-6">
                <div class="frame-item box-destination">
                    <a href="category_travel.php" class="">
                        <img src="images/cities%20(4).jpg" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">City</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-6">
                <div class="frame-item box-destination">
                    <a href="category_travel.php" class="">
                        <img src="images/cities%20(5).jpg" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">Entertainment</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-6">
                <div class="frame-item box-destination">
                    <a href="category_travel.php" class="">
                        <img src="images/cities%20(6).jpg" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">Private Tour</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="space-footer"></div>
    <?php require('inc_footer.php'); ?>
</body>

</html>

<script>
    $('#iconified').on('keyup', function() {
        var input = $(this);
        if (input.val().length === 0) {
            input.addClass('empty');
        } else {
            input.removeClass('empty');
        }
    });
</script>



<!-- ???????????????????????????-??????  -->
<script>
    var unit = 1;
    var total;
    // if user changes value in field
    $('.field').change(function() {
        unit = this.value;
    });
    $('.add').click(function() {
        unit++;
        var $input = $(this).prevUntil('.sub');
        $input.val(unit);
        unit = unit;
    });
    $('.sub').click(function() {
        if (unit > 0) {
            unit--;
            var $input = $(this).nextUntil('.add');
            $input.val(unit);
        }
    });
</script>

<script>
    var unit2 = 1;
    var total;
    // if user changes value in field
    $('.field2').change(function() {
        unit2 = this.value;
    });
    $('.add2').click(function() {
        unit2++;
        var $input = $(this).prevUntil('.sub2');
        $input.val(unit2);
        unit2 = unit2;
    });
    $('.sub2').click(function() {
        if (unit2 > 0) {
            unit2--;
            var $input = $(this).nextUntil('.add2');
            $input.val(unit2);
        }
    });
</script>

<script>
    var unit3 = 1;
    var total;
    // if user changes value in field
    $('.field3').change(function() {
        unit3 = this.value;
    });
    $('.add3').click(function() {
        unit3++;
        var $input = $(this).prevUntil('.sub3');
        $input.val(unit3);
        unit3 = unit3;
    });
    $('.sub3').click(function() {
        if (unit3 > 0) {
            unit3--;
            var $input = $(this).nextUntil('.add3');
            $input.val(unit3);
        }
    });
</script>