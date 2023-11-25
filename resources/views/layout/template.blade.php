
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <style>
      /*--------------------------------------------------------------
    # Header
    --------------------------------------------------------------*/
    .header {
      transition: all 0.5s;
      z-index: 997;
      padding: 20px 0;
      background: #95cee5;
    }
    
    .header .logo {
      line-height: 0;
    }
    
    .header .logo img {
      max-height: 40px;
      margin-right: 6px;
    }
    
    .header .logo span {
      font-size: 30px;
      font-weight: 700;
      letter-spacing: 1px;
      color: #012970;
      font-family: "Nunito", sans-serif;
      margin-top: 3px;
    }
    /*--------------------------------------------------------------
    # Footer
    --------------------------------------------------------------*/
    .footer {
      background: #ace0f5;
      padding: 0 0 30px 0;
      font-size: 14px;
    }
    
    .footer .copyright {
      text-align: center;
      padding-top: 30px;
      color: #012970;
    }
    
    .footer .credits {
      padding-top: 10px;
      text-align: center;
      font-size: 13px;
      color: #012970;
    }
    .container{
      margin-top: 100px;
    }
    </style>
  </head>
  <body class="bg-light">

     <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="header-scrolled container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="{{ asset('/img/LOGO.png') }}" alt="logo">
      </a>
    </div>
  </header><!-- End Header -->

    <main class="container">
      @include('komponen/pesan')
        @yield('konten')
    </main>

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="container">
    <div class="copyright">
      &copy; 2023; Copyright <strong><span>StunCare</span></strong>
    </div>
    <div class="credits">
      <img src="{{ asset('/img/ig.png') }}" alt=""style="width: 30px; height: 30px;">
      <img src="{{ asset('/img/yt.png') }}" alt="" style="width: 50px; height: 50px;">
      <img src="{{ asset('/img/fb.png') }}" alt=""style="width: 30px; height: 30px;">
    </div>
  </div>
</footer><!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>