<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
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
<!--===============================================================================================-->
</head>
<body>


  <div class="container-contact100">
    <div class="wrap-contact100">
      @include('templates/feedback')
      <form class="contact100-form validate-form" action="{{url('login')}}" method="post">
        <span class="contact100-form-title">
          Tolong Login!
        </span>
        {{csrf_field()}}
        <div class="wrap-input100 validate-input" data-validate="Name is required">
          <span class="label-input100">Username</span>
          <input class="input100" type="text" name="username" placeholder="Masukan Username Anda">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">Password</span>
          <input class="input100" type="password" name="password" placeholder="Masukan Password Anda">
          <span class="focus-input100"></span>
        </div>

        <div class="container-contact100-form-btn">
          <div class="wrap-contact100-form-btn">
            <div class="contact100-form-bgbtn"></div>
            <button class="contact100-form-btn">
              <span>
                Submit
                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
              </span>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>

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

</body>
</html>
