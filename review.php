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
                                <div class="text-menu-account active">
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
                            <a class="btn-booking btn_show active">Ready to reviews</a>
                            <a class="btn-booking btn_show ">Published</a>
                        </div>
                        <div>
                            <div class="boxshow">
                                <div class="card booking my-3" href="#">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="images/cities%20(5).jpg" class="img-fluid" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-md-9">
                                        <div class="card-body">
                                            <div class="name-text">poolvilla</div>
                                            <div class="text-orange text-review mt-3 mb-2">On a scale of 0 - 10,How likely is it that you would recommend?</div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                              <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                              <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                              <label class="form-check-label" for="inlineRadio3">3 </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                              <label class="form-check-label" for="inlineRadio4">4</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                              <label class="form-check-label" for="inlineRadio5">5</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6">
                                              <label class="form-check-label" for="inlineRadio6">6</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio7" value="option7">
                                              <label class="form-check-label" for="inlineRadio7">7</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio8" value="option8">
                                              <label class="form-check-label" for="inlineRadio8">8</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio9" value="option9">
                                              <label class="form-check-label" for="inlineRadio9">9</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio10" value="option10">
                                              <label class="form-check-label" for="inlineRadio10">10</label>
                                            </div>
                                            <div class="mt-3">
                                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="write a review..."></textarea>
                                            </div>
                                             <div class="row">
    <div class="col">
      <form action="" method="post" enctype="multipart/form-data" id="form-upload">
        <div class="form-group mt-3">
          <label for="">Upload Images</label>
          <input type="file" class="form-control" name="images[]" multiple id="upload-img" />
        </div>
        <div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>
        <button type="submit" class=" btn-upload-img mt-1">Upload</button>
      </form>
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
                                                <a type="submit" class="btn-blue" data-bs-toggle="modal" data-bs-target="#review">Review</a>
                                            </div>
                                            <div class="modal fade" id="review" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <div class="text-icon-re">
                                                        <i class="fas fa-glass-cheers"></i>
                                                    </div>
                                                    <div class="text-head-sign text-orange">Thank you for review us!</div>
                                                  </div>
                                                  <div class="modal-footer">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boxshow">
                                <div class="card booking my-3" href="#">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="images/cities%20(5).jpg" class="img-fluid" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-10 col-8"> <div class="name-text">poolvilla</div></div>
                                                    <div class="col-sm-2 col-4">
                                                        <div class="point-badge">9.2</div>
                                                    </div>
                                                </div> 
                                                <div class="mt-3">
                                                  <div class="text-tiny text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nibh lacus, convallis nec ipsum at, consectetur rhoncus sem. Praesent sodales ipsum eget ipsum ultrices bibendum sit amet a tellus. Aenean vestibulum ligula magna, at iaculis ex scelerisque vel. Nullam ac elementum ipsum, at mattis sem. Aliquam sapien est, ullamcorper ac auctor vehicula, pulvinar id urna. Integer purus arcu, feugiat sit amet nibh vel, venenatis molestie odio. Aenean at odio luctus, scelerisque purus non, hendrerit lacus.</div>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                    <div class="vl-top-book">
                                        <div class="row">
                                            <div class="col-sm-9"></div>
                                            <div class="col-sm-3">
                                                <a type="submit" class="btn-blue" href="select-rooms.php">See room</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    
    var imgUpload = document.getElementById('upload-img')
  , imgPreview = document.getElementById('img-preview')
  , imgUploadForm = document.getElementById('form-upload')
  , totalFiles
  , previewTitle
  , previewTitleText
  , img;

imgUpload.addEventListener('change', previewImgs, true);

function previewImgs(event) {
  totalFiles = imgUpload.files.length;
  
     if(!!totalFiles) {
    imgPreview.classList.remove('img-thumbs-hidden');
  }
  
  for(var i = 0; i < totalFiles; i++) {
    wrapper = document.createElement('div');
    wrapper.classList.add('wrapper-thumb');
    removeBtn = document.createElement("span");
    nodeRemove= document.createTextNode('x');
    removeBtn.classList.add('remove-btn');
    removeBtn.appendChild(nodeRemove);
    img = document.createElement('img');
    img.src = URL.createObjectURL(event.target.files[i]);
    img.classList.add('img-preview-thumb');
    wrapper.appendChild(img);
    wrapper.appendChild(removeBtn);
    imgPreview.appendChild(wrapper);
   
    $('.remove-btn').click(function(){
      $(this).parent('.wrapper-thumb').remove();
    });    

  }
  
  
}
</script> 