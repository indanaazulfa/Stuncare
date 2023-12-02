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
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
  <link rel="stylesheet" href="{{ asset('assets/toast/dist/simple-notify.min.css') }}" />
  <script src="{{ asset('assets/toast/dist/simple-notify.min.js') }}"></script>
</head>

<body>

  <div class="container-login100">
    <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
      <span class="login100-form-title p-b-24" text-align="center"> Selamat Datang! </span>
      <span class="txt4 p-b-11"> Silahkan Login dan Akses Seluruh Informasi dari StunCare </span>

      <form class="login100-form validate-form flex-sb flex-w" action="{{ route('authenticate') }}" method="post">
        @csrf
        <span class="txt1 p-b-11"> Username </span>
        <div class="wrap-input100 validate-input m-b-36" data-validate="Username is required">
          <input required class="input100" type="text" name="username" value="{{ old('username') }}" />
          <span class="focus-input100"></span>
        </div>

        <span class="txt1 p-b-11"> Kata Sandi </span>
        <div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
          <span class="btn-show-pass">
            <i class="fa fa-eye"></i>
          </span>
          <input required class="input100" type="password" name="password" value="{{ old('password') }}" />
          <span class="focus-input100"></span>
        </div>

        <div class="flex-sb-m w-full p-b-24">
          <div>
            <a href="#" class="txt3"> Lupa Kata Sandi? </a>
          </div>
        </div>
        <div class="container-login100-form-btn">
          <button type="submit" class="login100-form-btn">
            <span>Masuk</span>
          </button>
        </div>

        <div class="txt2 text-center p-t-10">
          Belum Punya Akun?
          <a class="" href="{{ route('register') }}">
            Daftar
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
          </a>
        </div>
      </form>
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

  <script>
	@if (session('error'))
      toastr('error', 'Gagal', '{{ session('error') }}')
    @endif

    @if (session('success'))
      toastr('success', 'Berhasil', '{{ session('success') }}')
    @endif  

    function toastr(status = 'success', title = 'Toast Title', text = 'Toast Text') {
      new Notify({
        status: status,
        title: title,
        text: text,
        effect: 'fade',
        speed: 300,
        showIcon: true,
        showCloseButton: true,
        autoclose: true,
        autotimeout: 3000,
        gap: 20,
        distance: 20,
        type: 3,
        position: 'right top',
      })
    }
  </script>
</body>

</html>
