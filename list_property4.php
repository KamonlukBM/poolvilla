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
        <div class="vl-filter-hotel">
          <div class="row">
            <div class="col-sm-6">
              <div class="text-medium text-grey text-bold mt-3">More about villas (English language)</div>
              <div class="col-12 mt-3">
                <textarea rows="3" class="form-control mb-3" type="text"></textarea>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="text-medium text-grey text-bold mt-3">More about villas (Thai language)</div>
              <div class="col-12 mt-3">
                <textarea rows="3" class="form-control mb-3" type="text"></textarea>
              </div>
            </div>

          </div>
        </div>
        <div class="mb-3">
          <div class="text-medium text-grey text-bold mt-3">Frequently asked questions</div>
          <div class="col-12 mt-3">
            <div class="row mb-3">
              <div class="col-sm-6">
                <div class="text-tiny text-bold">Questions (English language)</div>
                <input class="form-control mb-3" type="text">
              </div>
              <div class="col-sm-6">
                <div class="text-tiny text-bold">Questions (Thai language)</div>
                <input class="form-control mb-3" type="text">
              </div>
              <div class="col-sm-6">
                <div class="text-tiny text-bold">Answer (English language)</div>
                <textarea rows="3" class="form-control mb-3" type="text"></textarea>
              </div>
              <div class="col-sm-6">
                <div class="text-tiny text-bold">Answer (Thai language)</div>
                <textarea rows="3" class="form-control mb-3" type="text"></textarea>
              </div>
            </div>
            <button class="btn-clear"><i class="fas fa-plus-circle me-2"></i>Add more </button>
          </div>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-sm-4 ">
            <a href="list_property3.php">
              <div class="btn-grey mt-3">Back</div>
            </a>
          </div>
          <div class="col-sm-4 ">
            <a href="list_property5.php">
              <div class="btn-orange mt-3">Next</div>
            </a>
          </div>

        </div>

      </div>

      <div class="space-footer"></div>
    </div>
    <?php require('inc_footer_hotel.php'); ?>
</body>

</html>

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