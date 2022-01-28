<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{getenv("SITE_NAME")}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{asset("arsha/assets/img/favicon.png")}}" rel="icon">
  <link href="{{asset("arsha/assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Vendor CSS Files -->
  <link href="{{asset("arsha/assets/vendor/aos/aos.css")}}" rel="stylesheet">
  <link href="{{asset("arsha/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{asset("arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{asset("arsha/assets/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
  <link href="{{asset("arsha/assets/vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
  <link href="{{asset("arsha/assets/vendor/remixicon/remixicon.css")}}" rel="stylesheet">
  <link href="{{asset("arsha/assets/vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset("arsha/assets/css/style.css")}}" rel="stylesheet">
</head>
<body>
@section("head")
    @include("Arsha.headbase")
@show
@section("body")
    @include("Arsha.bodybase")
@show
@section("footer")
    @include("Arsha.footerbase")
@show
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{asset("arsha/assets/vendor/aos/aos.js")}}"></script>
  <script src="{{asset("arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("arsha/assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
  <script src="{{asset("arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
  <script src="{{asset("arsha/assets/vendor/swiper/swiper-bundle.min.js")}}"></script>
  <script src="{{asset("arsha/assets/vendor/waypoints/noframework.waypoints.js")}}"></script>
  <script src="{{asset("arsha/assets/vendor/php-email-form/validate.js")}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset("arsha/assets/js/main.js")}}"></script>
@section("footerscript")
@show
</body>
</html>
