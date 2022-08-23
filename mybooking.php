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
    <?php require('inc_navbar.php'); ?> 
    <div class="bg-orange">
        <div class="clearfix">
            <div class="float-end width-search">
                <input class="form-control empty orange" type="text" id="iconified" placeholder="&#xF002;  Where  are  you  looking for ?"aria-label="default input example">
            </div>
        </div>
    </div>
    <div class="bg-grey-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="none-mobile">
                        <div class="box-sidebaraccount mt-3">
                            <a  href="mybooking.php"  class="menu-account">
                                <div class="text-menu-account active">
                                    <div class="row">
                                        <div class="col-2"><i class="far fa-calendar"></i></div>
                                        <div class="col-10">My booking</div>
                                    </div>
                                </div>
                            </a>
                            <a  href="review.php"  class="menu-account">
                                <div class="text-menu-account">
                                    <div class="row">
                                        <div class="col-2"><i class="far fa-star"></i></div>
                                        <div class="col-10">Reviews</div>
                                    </div>
                                </div>
                            </a>
                            <a  href="profile.php"  class="menu-account">
                                <div class="text-menu-account">
                                    <div class="row">
                                        <div class="col-2"><i class="far fa-user"></i></div>
                                        <div class="col-10">Profile</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="mt-4"></div>
                    <div class="row">
                        <div>
                            <a class="btn-booking btn_show active">Upcoming</a>
                            <a class="btn-booking btn_show ">Completed</a>
                            <a class="btn-booking btn_show ">Cancelled</a>
                        </div>
                    </div>
                    <div class="clearfix">
                    <div class="float-end">
                        <div class="row g-1">
                            <div class="col-5">
                                <div class="text-sort-by">sort by :</div>
                            </div>
                            <div class="col-7">
                                <div class="dropdown">
                                <button class="btn-sortby dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Best Match
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Best Match</a></li>
                                    <li><a class="dropdown-item" href="#">Popular Properties</a></li>
                                    <li><a class="dropdown-item" href="#">...</a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                        <div>
                            <div class="boxshow">
                                <div class="bg-orange-light3 my-4">
                                    <div class="text-bold text-filter">My Booking</div>
                                    <form class="row g-3 mt-1">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control booking" id="inputPassword2">
                                        </div>
                                        <div class="col-sm-3 col-6">
                                            <button type="submit" class="btn-search-booking">Search</button>
                                        </div>
                                        <div class="col-sm-3 col-6">
                                            <button type="submit" class="btn-clear">Clear</button>
                                        </div>
                                    </form>
                                </div>  
                                <div class="card booking mb-3" href="#">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="images/cities%20(5).jpg" class="img-fluid" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="name-text">poolvilla</div>
                                        <div class="text-grey text-review">Booking ID : 000000000</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="vl-left">
                                            <div class="text-light-grey text-small">Booked on August 19, 2021</div>
                                            <div class="row g-0 mt-2">
                                                <div class="col-5">
                                                    <div class="text-light-grey text-tiny">Check-in</div>
                                                    <div class="row g-0">
                                                        <div class="col-6">
                                                            <div class="text-light-grey text-check">25</div>
                                                        </div>
                                                        <div class="col-6">
                                                             <div class="text-light-grey text-small">Aug</div>
                                                             <div class="text-light-grey text-small">Wed</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="vl-left-dash">
                                                        <div class="text-light-grey text-tiny">Check-out</div>
                                                        <div class="row g-0">
                                                            <div class="col-6">
                                                                <div class="text-light-grey text-check">29</div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="text-light-grey text-small">Aug</div>
                                                                <div class="text-light-grey text-small">Sun</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-price text-grey text-bold text-end mt-4">THB<span class="text-red">3,500</span></div>
                                            
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                                    </div>
                                    <div class="vl-top-book">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <a class="text-blue text-small" data-bs-toggle="modal" data-bs-target="#confirmation">Send Booking Confirmation</a>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="vl-blue">
                                                        <a class="text-blue text-small" href="https://www.google.com/maps/dir//16.487357,102.835101/@16.487645,102.843716,15z?hl=th-TH" target="_blank">View on Map</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal confirmation-->
                                                <div class="modal fade" id="confirmation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Get booking confirmation</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                       <label for="exampleFormControlInput1" class="form-label text-bold text-tiny">Email</label>
                                                        <input type="email" class="form-control" id="exampleFormControlInput1">
                                                      </div>
                                                      <div class="modal-footer">
                                                          <button type="submit" class="btn-search-booking">Send to Email</button>
                                                          <div class="text-light-grey text-center text-tiny">or</div>
                                                          <button type="submit" class="btn-blue">Download</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <a type="submit" class="btn-blue" href="booking_detail.php">View Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-booking"></div>
                            </div>
                            <div class=" boxshow"> 
                                <div class="bg-orange-light3 my-4">
                                    <div class="text-bold text-filter">My Booking</div>
                                    <form class="row g-3">
                                        <div class="col-6">
                                            <input type="text" class="form-control booking" id="inputPassword2">
                                        </div>
                                        <div class="col-3">
                                            <button type="submit" class="btn-search-booking">Search</button>
                                        </div>
                                        <div class="col-3">
                                            <button type="submit" class="btn-clear">Clear</button>
                                        </div>
                                    </form>
                                </div>  
                                <div class="card booking mb-3" href="#">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="images/cities%20(5).jpg" class="img-fluid" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-7">
                                                        <div class="name-text">poolvilla</div>
                                                        <div class="text-grey text-review">Booking ID : 000000000</div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="vl-left">
                                                            <div class="text-light-grey text-small">Booked on August 19, 2021</div>
                                                            <div class="row g-0 mt-2">
                                                                <div class="col-5">
                                                                    <div class="text-light-grey text-tiny">Check-in</div>
                                                                    <div class="row g-0">
                                                                        <div class="col-6">
                                                                            <div class="text-light-grey text-check">25</div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                             <div class="text-light-grey text-small">Aug</div>
                                                                             <div class="text-light-grey text-small">Wed</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-7">
                                                                    <div class="vl-left-dash">
                                                                        <div class="text-light-grey text-tiny">Check-out</div>
                                                                        <div class="row g-0">
                                                                            <div class="col-6">
                                                                                <div class="text-light-grey text-check">29</div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <div class="text-light-grey text-small">Aug</div>
                                                                                <div class="text-light-grey text-small">Sun</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-price text-grey text-bold text-end mt-4">THB<span class="text-red">3,500</span></div>

                                                        </div>
                                                    </div>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                    <div class="vl-top-book">
                                        <div class="row">
                                            <div class="col-sm-9">
                                            </div>
                                            <div class="col-sm-3">
                                                <a type="submit" class="btn-blue" href="booking_detail.php">View Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card booking mb-3" href="#">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="images/cities%20(5).jpg" class="img-fluid" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-7">
                                                        <div class="name-text">poolvilla</div>
                                                        <div class="text-grey text-review">Booking ID : 000000000</div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="vl-left">
                                                            <div class="text-light-grey text-small">Booked on August 19, 2021</div>
                                                            <div class="row g-0 mt-2">
                                                                <div class="col-5">
                                                                    <div class="text-light-grey text-tiny">Check-in</div>
                                                                    <div class="row g-0">
                                                                        <div class="col-6">
                                                                            <div class="text-light-grey text-check">25</div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                             <div class="text-light-grey text-small">Aug</div>
                                                                             <div class="text-light-grey text-small">Wed</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-7">
                                                                    <div class="vl-left-dash">
                                                                        <div class="text-light-grey text-tiny">Check-out</div>
                                                                        <div class="row g-0">
                                                                            <div class="col-6">
                                                                                <div class="text-light-grey text-check">29</div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <div class="text-light-grey text-small">Aug</div>
                                                                                <div class="text-light-grey text-small">Sun</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-price text-grey text-bold text-end mt-4">THB<span class="text-red">3,500</span></div>

                                                        </div>
                                                    </div>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                    <div class="vl-top-book">
                                        <div class="row">
                                            <div class="col-sm-9">
                                            </div>
                                            <div class="col-sm-3">
                                                <a type="submit" class="btn-blue" href="booking_detail.php">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-booking"></div>
                            </div>
                            <div class=" boxshow">
                                <div class="bg-orange-light3 my-4">
                                    <div class="text-bold text-filter">My Booking</div>
                                    <form class="row g-3">
                                        <div class="col-6">
                                            <input type="text" class="form-control booking" id="inputPassword2">
                                        </div>
                                        <div class="col-3">
                                            <button type="submit" class="btn-search-booking">Search</button>
                                        </div>
                                        <div class="col-3">
                                            <button type="submit" class="btn-clear">Clear</button>
                                        </div>
                                    </form>
                                </div>  
                                <div class="card booking mb-3" href="#">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="images/cities%20(5).jpg" class="img-fluid" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-7">
                                                        <div class="name-text">poolvilla</div>
                                                        <div class="text-grey text-review">Booking ID : 000000000</div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="vl-left">
                                                            <div class="text-light-grey text-small">Booked on August 19, 2021</div>
                                                            <div class="row g-0 mt-2">
                                                                <div class="col-5">
                                                                    <div class="text-light-grey text-tiny">Check-in</div>
                                                                    <div class="row g-0">
                                                                        <div class="col-6">
                                                                            <div class="text-light-grey text-check">25</div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                             <div class="text-light-grey text-small">Aug</div>
                                                                             <div class="text-light-grey text-small">Wed</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-7">
                                                                    <div class="vl-left-dash">
                                                                        <div class="text-light-grey text-tiny">Check-out</div>
                                                                        <div class="row g-0">
                                                                            <div class="col-6">
                                                                                <div class="text-light-grey text-check">29</div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <div class="text-light-grey text-small">Aug</div>
                                                                                <div class="text-light-grey text-small">Sun</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-price text-grey text-bold text-end mt-4">THB<span class="text-red">3,500</span></div>

                                                        </div>
                                                    </div>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                    <div class="vl-top-book">
                                        <div class="row">
                                            <div class="col-sm-9">
                                            </div>
                                            <div class="col-sm-3">
                                                <a type="submit" class="btn-blue" href="booking_detail.php">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-booking"></div>
                            </div>
                        </div>   
                </div>
            </div>
        </div>
    </div>
    <?php require('inc_footer.php'); ?> 
</body>
</html>

<script>
    $( '.btn_show' ).click(function (event) {
        var rsnum = $(this).index();
        if (  $( ".boxshow" ).eq(rsnum).is( ":hidden" ) ) {
            $( ".boxshow" ).hide();
            $( ".boxshow" ).eq(rsnum).fadeIn();
        } else {
        }
        event.stopPropagation();
 	});
</script> 