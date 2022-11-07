<!DOCTYPE html>
<html lang="en">
  <head>

    @include('parts.head')

  </head>

  <body>
    <!-- ======= Header ======= -->

    @include('parts.header')
    
    <!-- End Header -->

    @yield('content')

    <!-- End #main -->

    <!-- ======= Footer ======= -->

    @include('parts.footer')
    
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../vendor/aos/aos.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../js/main.js"></script>
  </body>
</html>
