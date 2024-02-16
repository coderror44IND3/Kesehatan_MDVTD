<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MDVTD</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('pages/assets/img/icon.png') }}" rel="icon">
    <link href="{{ asset('pages/assets/img/icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('pages/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('pages/assets/css/style.css') }}" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('pages/table/css/style.css') }}">

</head>

<body>

    <!-- ======= Top Bar Start ======= -->
    
    @include('pages.layouts.topbar')
    
    <!-- ======= Top Bar End ======= -->

    <!-- ======= Header Start ======= -->
    
    @include('pages.layouts.header')

    <!-- ======= Header End ======= -->

    <!-- ======= Hero Section Start ======= -->
    
    @include('pages.layouts.hero')

    <!-- ======= Hero Section End ======= -->

    <!-- ======= Main Start ======= -->
    
    <main id="main">

        @yield('content')

    </main>
    
    <!-- ======= Main End ======= -->

    <!-- ======= Footer Start ======= -->

    @include('pages.layouts.footer')

    <!-- ======= Footer End ======= -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('pages/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('pages/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('pages/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('pages/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('pages/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('pages/assets/js/main.js') }}"></script>

    <script src="{{ asset('pages/table/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('pages/table/js/popper.min.js') }}"></script>
    <script src="{{ asset('pages/table/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('pages/table/js/main.js') }}"></script>

</body>

</html>