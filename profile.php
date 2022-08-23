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
                                <div class="text-menu-account ">
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
                                <div class="text-menu-account active">
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
                    <div class="text-title text-grey text-bold mb-3">User Detail</div> 
                    <div class="box-white">
                        <div class="col-sm-8">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-bold text-tiny">First Name</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Thamonchanok">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-bold text-tiny">Last Name</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Sangworavisit">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-bold text-tiny">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"  placeholder="l@info.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-bold text-tiny">Phone Number</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"  placeholder="090-000-0000">
                            </div>
                        </div>
                        <div class="row g-1">
                            <div class="col-sm-4">
                                <button type="submit" class="btn-grey" data-bs-dismiss="modal">Cancel</button>
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn-search-booking">Save</button>
                            </div>
                        </div>
                    </div>
                    <div class="text-title text-grey text-bold mt-4 mb-3">Payment Method</div> 
                    <div class="row mb-3">
                        <div class="col-sm-4 col-6">
                                <div class="box-white visa">
                                    <div class="clearfix mb-2">
                                        <div class="float-start">
                                            <img class="visa-icon" src="images/logo-visa.jpg">
                                        </div>
                                        <div class="float-end">
                                            <a class="text-tiny text-blue" data-bs-toggle="modal" data-bs-target="#edit-card">Edit</a>
                                        </div>
                                    </div>
                                    <div class="text-tiny text-grey">xxxx-xxxx-xxxx-0000</div>
                                    <div class="text-tiny text-grey">*Credit holder name*</div>
                                    <div class="text-tiny text-grey">*dd/yyyy*</div>
                                    <div class="clearfix">
                                        <div class="float-end">
                                            <button type="submit"  class="text-red text-tiny btn-trach"><i class="far fa-trash-alt"></i></button>
                                        </div>
                                    </div>
                                    <!-- Modal edit card-->
                                        <div class="modal fade" id="edit-card" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit credit card</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                    <div class="">
                                                        <label for="exampleFormControlInput2" class="form-label text-bold text-tiny">Credit/debit card number</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput2">
                                                    </div>
                                                    <div class="">
                                                        <label for="exampleFormControlInput3" class="form-label text-bold text-tiny">Card holder name</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput3">
                                                    </div>
                                                    <div class="">
                                                        <label for="exampleFormControlInput3" class="form-label text-bold text-tiny">Expiry date</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput3">
                                                    </div>
                                                    <div class="">
                                                        <label for="exampleFormControlInput3" class="form-label text-bold text-tiny">CVV</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput3">
                                                    </div>
                                              </div>
                                              <div class="modal-footer">
                                                  <div class="row g-1 justify-content-end">
                                                      <div class="col-sm-4">
                                                        <button type="submit" class="btn-grey" data-bs-dismiss="modal">Cancel</button>
                                                        </div>
                                                      <div class="col-sm-4">
                                                        <button type="submit" class="btn-search-booking">Save</button>
                                                      </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                </div>
                            </div>
                        <div class="col-sm-4 col-6">
                                <div class="box-white visa">
                                    <a  data-bs-toggle="modal" data-bs-target="#add-card">
                                        <div class="btn-add text-blue"><i class="fas fa-plus"></i></div>    
                                        <div class="text-tiny text-blue text-center">Add credit card</div>    
                                    </a>
                                </div>
                            </div>
                            <!-- Modal edit card-->
                            <div class="modal fade" id="add-card" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add credit card</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="">
                                                <label for="exampleFormControlInput2" class="form-label text-bold text-tiny">Credit/debit card number</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2">
                                            </div>
                                            <div class="">
                                                <label for="exampleFormControlInput3" class="form-label text-bold text-tiny">Card holder name</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput3">
                                            </div>
                                            <div class="">
                                                <label for="exampleFormControlInput3" class="form-label text-bold text-tiny">Expiry date</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput3">
                                            </div>
                                            <div class="">
                                                <label for="exampleFormControlInput3" class="form-label text-bold text-tiny">CVV</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput3">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="row g-1 justify-content-end">
                                                <div class="col-sm-4">
                                                    <button type="submit" class="btn-grey" data-bs-dismiss="modal">Cancel</button>
                                                </div>
                                                <div class="col-sm-4">
                                                    <button type="submit" class="btn-search-booking">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="text-title text-grey text-bold mb-3 mt-4">Change password</div> 
                    <div class="box-white">
                        <div class="col-sm-8">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-bold text-tiny">Current password</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Current password">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-bold text-tiny">New password</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="New password">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-bold text-tiny">Confirm new password</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"  placeholder="Confirm new password">
                            </div>
                        </div>
                        <div class="row g-1">
                            <div class="col-sm-4">
                                <button type="submit" class="btn-grey" data-bs-dismiss="modal">Cancel</button>
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn-search-booking">Save</button>
                            </div>
                        </div>
                    </div>
                    <div class="space-footer"></div>
                </div>
            </div>
        </div>
    </div>
    <?php require('inc_footer.php'); ?> 
</body>
</html>