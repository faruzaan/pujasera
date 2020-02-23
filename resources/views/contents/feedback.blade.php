<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="{{asset('assets')}}/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/login/vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/login/css/util.css">
  <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/login/css/main.css">
  <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/login/css/tambah.css">
<!--===============================================================================================-->
</head>
<body>


  <div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" action="{{url('feedback/add')}}" method="POST">
        <span class="contact100-form-title">
          Beri Kami Penilaian
        </span>
        {{ csrf_field() }}
        <div class="wrap-input100 validate-input" data-validate="Nama dibutuhan">
          <span class="label-input100">Nama Anda</span>
          <input class="input100" type="text" name="nama_pelanggan" placeholder="Masukan nama anda">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Butuh email yang valid: contoh@abc.xyz">
          <span class="label-input100">Email</span>
          <input class="input100" type="text" name="email" placeholder="Masukan email anda">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Pesan dibutuhkan">
          <span class="label-input100">Pesan</span>
          <textarea class="input100" name="feedback_pelanggan" placeholder="Masukan pesan anda disini..."></textarea>
          <span class="focus-input100"></span>
        </div>

        <fieldset class="rating">
            <legend>Tolong Nilai:</legend>
            <input type="radio" id="star5" name="service_rating" value="5" /><label for="star5" title="Sangat Bagus!">5 stars</label>
            <input type="radio" id="star4" name="service_rating" value="4" /><label for="star4" title="Bagus">4 stars</label>
            <input type="radio" id="star3" name="service_rating" value="3" /><label for="star3" title="Meh">3 stars</label>
            <input type="radio" id="star2" name="service_rating" value="2" /><label for="star2" title="Buruk">2 stars</label>
            <input type="radio" id="star1" name="service_rating" value="1" /><label for="star1" title="Sangat Buruk">1 star</label>
        </fieldset>

        <div class="container-contact100-form-btn">
          <div class="wrap-contact100-form-btn">
            <div class="contact100-form-bgbtn"></div>
            <button class="contact100-form-btn">
              <span>
                Kirim
                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
              </span>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>



  <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
  <script src="{{asset('assets')}}/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="{{asset('assets')}}/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="{{asset('assets')}}/login/vendor/bootstrap/js/popper.js"></script>
  <script src="{{asset('assets')}}/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="{{asset('assets')}}/login/vendor/select2/select2.min.js"></script>
  <script>
    $(".selection-2").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
    });
  </script>
<!--===============================================================================================-->
  <script src="{{asset('assets')}}/login/vendor/daterangepicker/moment.min.js"></script>
  <script src="{{asset('assets')}}/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="{{asset('assets')}}/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="{{asset('assets')}}/login/js/main.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
