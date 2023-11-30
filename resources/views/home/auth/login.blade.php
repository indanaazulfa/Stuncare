<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login StunCare</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/util.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}" />
    <!--===============================================================================================-->
  </head>
  <body>

      <div class="container-login100">
        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
          <span class="login100-form-title p-b-24" text-align="center"> Selamat Datang! </span>
		  <span class="txt4 p-b-11"> Silahkan Login dan Akses Seluruh Informasi dari StunCare </span>

          <form class="login100-form validate-form flex-sb flex-w">
            <span class="txt1 p-b-11"> Username </span>
            <div class="wrap-input100 validate-input m-b-36" data-validate="Username is required">
              <input class="input100" type="text" name="username" />
              <span class="focus-input100"></span>
            </div>

            <span class="txt1 p-b-11"> Kata Sandi </span>
            <div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
              <span class="btn-show-pass">
                <i class="fa fa-eye"></i>
              </span>
              <input class="input100" type="password" name="pass" />
              <span class="focus-input100"></span>
            </div>

            <div class="flex-sb-m w-full p-b-24">
              <div>
                <a href="#" class="txt3"> Lupa Kata Sandi? </a>
              </div>
            </div>
            <div class="container-login100-form-btn">
            <form action="" method="post">
              <button class="login100-form-btn">Masuk</button>
              </form>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
  </body>
</html>
