<!doctype html>
<html lang="th">

<head>
    <title>หน้าแรก</title>
    <?php require('inc_header.php'); ?>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <script src="js/owl.carousel.min.js"></script>
</head>

<body>
    <?php require('inc_navbar_hotel.php'); ?>
    <div class="bg-grey">
        <div class="container">
            <div class="box-hotel">
                <div class="text-filter text-grey text-start text-bold">PROPERTY DETAIL</div>
                <div class="vl-filter-hotel">
                    <div class="text-medium text-grey text-bold mt-3">Bedroom</div>
                    <div class="d-flex f-m align-items-start">
                        <div class="nav flex-column col-sm-4 nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link hotel active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Master Bedroom<br><span class="text-tiny text-light-grey">0 beds</span></button>
                            <button class="nav-link hotel" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Second Bedroom<br><span class="text-tiny text-light-grey">0 beds</span></button>
                            <button class="btn-clear"><i class="fas fa-plus-circle me-2"></i>Add more bedroom</button>
                        </div>
                        <div class="tab-content col-xl-7 cols-m-85 ms-sm-5" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="text-medium text-grey  mt-3">Which beds are available in this room?</div>
                                <div class="row mt-4">
                                    <div class="col-sm-5">
                                        <div class="text-tiny text-grey text-bold">Twin bed(s)</div>
                                        <div class="text-tiny text-light-grey">35 - 51 inches wide</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="boxincrease">
                                            <div class="">
                                                <button data-decrease class="butincre minus">- </button>
                                                <input data-value class="butincre value" value="0" />
                                                <button data-increase class="butincre plus">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-5">
                                        <div class="text-tiny text-grey text-bold">Full bed(s)</div>
                                        <div class="text-tiny text-light-grey">52 - 59 inches wide</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="boxincrease">
                                            <div class="">
                                                <button data-decrease class="butincre minus">- </button>
                                                <input data-value class="butincre value" value="0" />
                                                <button data-increase class="butincre plus">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-5">
                                        <div class="text-tiny text-grey text-bold">Queen bed(s)</div>
                                        <div class="text-tiny text-light-grey">60 - 70 inches wide</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="boxincrease">
                                            <div class="">
                                                <button data-decrease class="butincre minus">- </button>
                                                <input data-value class="butincre value" value="0" />
                                                <button data-increase class="butincre plus">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-5">
                                        <div class="text-tiny text-grey text-bold">King bed(s)</div>
                                        <div class="text-tiny text-light-grey">71 - 81 inches wide</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="boxincrease">
                                            <div class="">
                                                <button data-decrease class="butincre minus">- </button>
                                                <input data-value class="butincre value" value="0" />
                                                <button data-increase class="butincre plus">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="vl-filter-hotel">
                                    <div class="row mt-5">
                                        <div class="col-sm-5">
                                            <div class="text-medium text-grey text-bold">Bathroom</div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="boxincrease">
                                                <div class="">
                                                    <button data-decrease class="butincre minus">- </button>
                                                    <input data-value class="butincre value" value="0" />
                                                    <button data-increase class="butincre plus">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-filter-hotel mt-5">
                                    <div class="text-medium text-grey text-bold mt-3">How many guests can stay?</div>
                                    <div class="row mt-3">
                                        <div class="col-sm-5 mb-3">
                                            <div class="text-tiny text-grey text-bold">Adult</div>
                                            <div class="">
                                                <div class="boxincrease">
                                                    <div class="">
                                                        <button data-decrease class="butincre minus">- </button>
                                                        <input data-value class="butincre value" value="0" />
                                                        <button data-increase class="butincre plus">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 mb-3">
                                            <div class="text-tiny text-grey text-bold">Kids</div>
                                            <div class="">
                                                <div class="boxincrease">
                                                    <div class="">
                                                        <button data-decrease class="butincre minus">- </button>
                                                        <input data-value class="butincre value" value="0" />
                                                        <button data-increase class="butincre plus">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" mt-5">
                                    <div class="text-medium text-grey text-bold mt-3">How big is this villa?</div>
                                    <div class="col-sm-12 mt-3">
                                        <div class="text-tiny text-grey text-bold">Villa size (square meters) – optional</div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="text-medium text-grey text-bold mt-5">PROPERTY FACILITIES</div>
                                <div class="vl-filter-hotel">
                                    <div class="text-medium text-grey text-bold mt-3">General</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Free WIFI</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Airport Transfer</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Breakfast</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Smorking Are</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Electric vehicle charging station</label>
                                    </div>
                                </div>
                                <div class="vl-filter-hotel">
                                    <div class="text-medium text-grey text-bold mt-3">Bathroom and toiletries</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Hair dryer</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Bathtub</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Towels</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Toiletries</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Shower</label>
                                    </div>
                                </div>
                                <div class="vl-filter-hotel">
                                    <div class="text-medium text-grey text-bold mt-3">Entertainment</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">TV</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Karaoke</label>
                                    </div>
                                </div>
                                <div class="vl-filter-hotel">
                                    <div class="text-medium text-grey text-bold mt-3">Comforts</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Air conditioner</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Alarm clock</label>
                                    </div>
                                </div>
                                <div class="vl-filter-hotel">
                                    <div class="text-medium text-grey text-bold mt-3">Dining,drinking and snacking</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Free bottle water</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Refrigerator</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Complimentary tea</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Kitchen</label>
                                    </div>
                                </div>
                                <div class="vl-filter-hotel">
                                    <div class="text-medium text-grey text-bold mt-3">Layout and furnishings</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Desk</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Seating area
                                        </label>
                                    </div>
                                </div>
                                <div class="vl-filter-hotel">
                                    <div class="text-medium text-grey text-bold mt-3">Clothing and laundry</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Closet</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Clothes rack</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Ironing facilies</label>
                                    </div>
                                </div>
                                <div class="vl-filter-hotel">
                                    <div class="text-medium text-grey text-bold mt-3">Safety and security feathers</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">In-rooms safe box</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Firts-aid kit
                                        </label>
                                    </div>
                                </div>
                                <div class="file-upload" style="min-width: 200px;">
                                    <div>
                                        <div class="text-medium text-grey text-bold mt-3">Upload a picture of the room</div>
                                        <div class="drag-text image-upload-wrap mt-2">
                                            <i class="far fa-image text-img text-light-grey"></i><br>
                                            <label class="text-medium" for="upFile">BROWSE FILE HERE </label>
                                        </div>
                                        <input id="upFile" type="file" multiple hidden>
                                    </div>
                                    <div id="file-container">
                                        <ul id="fileList" class="row">
                                        </ul>
                                    </div>
                                    <input type="hidden" id="fileArray">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="text-medium text-grey mt-3">Which beds are available in this room?</div>
                                <div class="row mt-4">
                                    <div class="col-sm-5">
                                        <div class="text-tiny text-grey text-bold">Twin bed(s)</div>
                                        <div class="text-tiny text-light-grey">35 - 51 inches wide</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="boxincrease">
                                            <div class="">
                                                <button data-decrease class="butincre minus">- </button>
                                                <input data-value class="butincre value" value="0" />
                                                <button data-increase class="butincre plus">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-5">
                                        <div class="text-tiny text-grey text-bold">Full bed(s)</div>
                                        <div class="text-tiny text-light-grey">52 - 59 inches wide</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="boxincrease">
                                            <div class="">
                                                <button data-decrease class="butincre minus">- </button>
                                                <input data-value class="butincre value" value="0" />
                                                <button data-increase class="butincre plus">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-5">
                                        <div class="text-tiny text-grey text-bold">Queen bed(s)</div>
                                        <div class="text-tiny text-light-grey">60 - 70 inches wide</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="boxincrease">
                                            <div class="">
                                                <button data-decrease class="butincre minus">- </button>
                                                <input data-value class="butincre value" value="0" />
                                                <button data-increase class="butincre plus">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-5">
                                        <div class="text-tiny text-grey text-bold">King bed(s)</div>
                                        <div class="text-tiny text-light-grey">71 - 81 inches wide</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="boxincrease">
                                            <div class="">
                                                <button data-decrease class="butincre minus">- </button>
                                                <input data-value class="butincre value" value="0" />
                                                <button data-increase class="butincre plus">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="vl-filter-hotel">
                                    <div class="row mt-5">
                                        <div class="col-sm-5">
                                            <div class="text-medium text-grey text-bold">Bathroom</div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="boxincrease">
                                                <div class="">
                                                    <button data-decrease class="butincre minus">- </button>
                                                    <input data-value class="butincre value" value="0" />
                                                    <button data-increase class="butincre plus">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-filter-hotel mt-5">
                                    <div class="text-medium text-grey text-bold mt-3">How many guests can stay?</div>
                                    <div class="row mt-3">
                                        <div class="col-sm-5 mb-3">
                                            <div class="text-tiny text-grey text-bold">Adult</div>
                                            <div class="">
                                                <div class="boxincrease">
                                                    <div class="">
                                                        <button data-decrease class="butincre minus">- </button>
                                                        <input data-value class="butincre value" value="0" />
                                                        <button data-increase class="butincre plus">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 mb-3">
                                            <div class="text-tiny text-grey text-bold">Kids</div>
                                            <div class="">
                                                <div class="boxincrease">
                                                    <div class="">
                                                        <button data-decrease class="butincre minus">- </button>
                                                        <input data-value class="butincre value" value="0" />
                                                        <button data-increase class="butincre plus">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" mt-5">
                                    <div class="text-medium text-grey text-bold mt-3">How big is this villa?</div>
                                    <div class="col-sm-12 mt-3">
                                        <div class="text-tiny text-grey text-bold">Villa size (square meters) – optional</div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="text-medium text-grey text-bold mt-5">PROPERTY FACILITIES</div>
                                <div class="vl-filter-hotel">
                                    <div class="text-medium text-grey text-bold mt-3">General</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Free WIFI</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Airport Transfer</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Breakfast</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Smorking Are</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Electric vehicle charging station</label>
                                    </div>
                                </div>
                                <div class="vl-filter-hotel">
                                    <div class="text-medium text-grey text-bold mt-3">Bathroom and toiletries</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Hair dryer</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Bathtub</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Towels</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Toiletries</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Shower</label>
                                    </div>
                                </div>
                                <div class="vl-filter-hotel">
                                    <div class="text-medium text-grey text-bold mt-3">Entertainment</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">TV</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Karaoke</label>
                                    </div>
                                </div>
                                <div class="vl-filter-hotel">
                                    <div class="text-medium text-grey text-bold mt-3">Comforts</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Air conditioner</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Alarm clock</label>
                                    </div>
                                </div>
                                <div class="vl-filter-hotel">
                                    <div class="text-medium text-grey text-bold mt-3">Dining,drinking and snacking</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Free bottle water</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Refrigerator</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Complimentary tea</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Kitchen</label>
                                    </div>
                                </div>
                                <div class="vl-filter-hotel">
                                    <div class="text-medium text-grey text-bold mt-3">Layout and furnishings</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Desk</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Seating area
                                        </label>
                                    </div>
                                </div>
                                <div class="vl-filter-hotel">
                                    <div class="text-medium text-grey text-bold mt-3">Clothing and laundry</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Closet</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Clothes rack</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Ironing facilies</label>
                                    </div>
                                </div>
                                <div class="vl-filter-hotel">
                                    <div class="text-medium text-grey text-bold mt-3">Safety and security feathers</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">In-rooms safe box</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Firts-aid kit
                                        </label>
                                    </div>
                                </div>
                                <div class="file-upload" style="min-width: 200px;">
                                    <div>
                                        <div class="text-medium text-grey text-bold mt-3">Upload a picture of the room</div>
                                        <div class="drag-text image-upload-wrap mt-2">
                                            <i class="far fa-image text-img text-light-grey"></i><br>
                                            <label class="text-medium" for="upFile">BROWSE FILE HERE </label>
                                        </div>
                                        <input id="upFile" type="file" multiple hidden>
                                    </div>
                                    <div id="file-container">
                                        <ul id="fileList" class="row">
                                        </ul>
                                    </div>
                                    <input type="hidden" id="fileArray">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-sm-4 ">
                            <a href="list_property2.php">
                                <div class="btn-grey mt-3">Back</div>
                            </a>
                        </div>
                        <div class="col-sm-4 ">
                            <a href="list_property4.php">
                                <div class="btn-orange mt-3">Next</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-footer"></div>
        </div>
        <?php require('inc_footer_hotel.php'); ?>
</body>

<script>
    $(function() {
        $('[data-decrease]').click(decrease);
        $('[data-increase]').click(increase);
        $('[data-value]').change(valueChange);
    });

    function decrease() {
        var value = $(this).parent().find('[data-value]').val();
        if (value > 0) {
            value--;
            $(this).parent().find('[data-value]').val(value);
        }
    }

    function increase() {
        var value = $(this).parent().find('[data-value]').val();
        if (value < 100) {
            value++;
            $(this).parent().find('[data-value]').val(value);
        }
    }

    function valueChange() {
        var value = $(this).val();
        if (value == undefined || isNaN(value) == true || value <= 0) {
            $(this).val(1);
        } else if (value >= 101) {
            $(this).val(100);
        }
    }
</script>

<script>
    (function hide() {
        $(this).hide();
    })(jQuery);

    $(document).ready(function() {
        //Setto la data-value come oggetto vuoto {}
        $('#fileArray').val(JSON.stringify({}));

        $('#upFile').change(function(e) {
            var files = e.target.files;
            var obj = {};
            for (var i = 0; i <= files.length; i++) {

                var file = files[i];
                var reader = new FileReader();
                // when i == files.length reorder and break
                if (i == files.length) {
                    // need timeout to reorder beacuse prepend is not done
                    if ('0' != files.length) {
                        setTimeout(function() {
                            updateArray(obj);
                        }, 100);
                    }
                    break;
                }

                reader.onload = (function(file, i) {
                    return function(event) {
                        obj[i] = event.target.result;
                        $('#fileList').prepend('<div class="col-sm-4 col-6"><li data-id="' + file.lastModified + '"><div class="file-upload-image"><img class="w-100" src="' + event.target.result + '" onerror="hide()"  /><div class="removeBtn">X</div><div class="separator"><div class="ood">' + file.name + ' </div><div class="clear-both"></div></div> </div></li></div>');
                    };
                })(file, i);

                reader.readAsDataURL(file);
            } // end for;

        });


        $('#fileList').on('click', '.removeBtn', function() {
            var src = $(this).parents('.block').children('img').attr('src');
            $(this).parents('li').remove();
            removeItem(src);
        });


        function removeItem(items) {
            var obj = $('#fileArray').val();
            obj = JSON.parse(obj);

            var y = [];
            if (typeof items != "object") {
                $.each(obj, function(chiave, valore) {
                    if (valore == items) {
                        delete obj[chiave];
                        // esce alla chiave 2
                        return false;
                    }

                });


                $('#fileArray').val(JSON.stringify(obj));

                return false;

                var arr = $('#fileArray').val();

                $.each(JSON.parse(arr), function(c, v) {

                });

            }


            $.each(obj, function(c, v) {

                y.push(v);

            });

            $.each(items, function(c, v) {

                if ($.inArray(v, y) != -1) {

                    return true;
                }
                y.push(v);



            });

            obj = $.extend({}, y);

            return obj;

        }

        function updateArray(items) {

            var newArray = removeItem(items);

            $('#fileArray').val(JSON.stringify(newArray));

            var arr = $('#fileArray').val();

            $.each(JSON.parse(arr), function(c, v) {

            });


        }


    });
</script>

</html>